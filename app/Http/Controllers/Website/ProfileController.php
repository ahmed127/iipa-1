<?php

namespace App\Http\Controllers\Website;

use App\Models\Country;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        $data['user'] = auth()->user();
        $data['countryCodes'] = Country::get()->pluck('code', 'id');
        return view('website.pages.profile.information', $data);
    }

    public function update_information(Request $request)
    {
        $user = auth()->user();

        $inputs = $request->validate([
            'full_name'     => 'required',
            'email'         => 'required|unique:users,email,' . $user->id . ',id',
            'country_code'  => 'required',
            'phone'         => 'required',
        ]);

        $user->update($inputs);
        Flash::success('Updated Information Successfully.');

        return back();
    }

    public function update_password(Request $request)
    {
        $data['user'] = auth()->user();

        return view('website.pages.profile.update_password', $data);
    }

    public function update_password_post(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'full_name' => 'required',
            'email'     => 'required|unique:users,email,' . $user->id . ',id',
            'password'  => 'required|confirmed',
        ]);

        $user->update($request->only('full_name', 'email', 'password'));

        return view('website.pages.profile.information', $data);
    }

    public function my_request(Request $request)
    {
        $user = auth()->user();
        $data = [];
        return view('website.pages.requests.all', $data);
    }
}
