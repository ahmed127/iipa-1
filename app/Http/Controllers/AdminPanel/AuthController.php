<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminPanel.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            if ($admin->status === 0) {
                Flash::error(__('auth.access_denied'));
                return back();
            }
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect(route('adminPanel.dashboard'));
        }
        Flash::error(__('auth.failed'));
        return back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect(route('adminPanel.login'));
    }
}
