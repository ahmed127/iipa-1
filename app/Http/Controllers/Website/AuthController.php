<?php

namespace App\Http\Controllers\Website;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Country;
use App\Helpers\MailTrait;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    use MailTrait;

    public function login()
    {
        return view('website.auth.login');
    }

    public function login_post(Request $request)
    {

        $credentials = $request->validate([
            'email'     => 'required|exists:users,email',
            'password'  => 'required',
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect(route('website.home'));
        }
        Flash::error(__('auth.failed'));
        return back();
    }

    public function register()
    {
        $countryCodes = Country::get()->pluck('code', 'id');
        return view('website.auth.register', compact('countryCodes'));
    }

    public function register_post(Request $request)
    {

        $inputs = $request->validate([
            'full_name'     => 'required',
            'email'         => 'required|unique:users,email',
            'password'      => 'required|confirmed',
            'country_code'  => 'required',
            'phone'         => 'required',
        ]);

        $user = User::create($inputs);

        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect(route('website.home'));
        }

        Flash::error(__('auth.failed'));
        return back();
    }

    public function forget_password()
    {
        return view('website.auth.forget_password');
    }

    public function forget_password_post(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        $user = User::whereEmail($request->email)->first();

        $user->update([
            'otp_code'       => (string) mt_rand(100000, 999999),
            'otp_expired_at' => Carbon::now()->addMinute(15),
        ]);

        $this->send_otp($user);

        Flash::success('Mail Send Successful, check Your inbox');

        return redirect(route('website.reset_password', ['email' => $user->email]));
    }

    public function reset_password()
    {
        $email = request('email');
        return view('website.auth.reset_password', compact('email'));
    }

    public function reset_password_post(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|exists:users,email',
            'otp_code'  => 'required',
            'password'  => 'required|confirmed'
        ]);

        $user = User::where($request->only('email', 'otp_code'))->first();

        if (empty($user)) {

            Flash::success(__('lang.otp_fail'));
            return back();
        }

        if (now() > $user->otp_expired_at) {
            Flash::success(__('lang.otp_fail'));
            return back();
        }

        $user->update(['password' => $request->password]);

        return redirect(route('website.login'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect(route('website.login'));
    }
}
