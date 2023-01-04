<?php

namespace App\Http\Controllers\Website;

use App\Models\Country;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Follow;

class ProfileController extends Controller
{
    public function profile()
    {
        $data['user'] = auth()->user();
        return view('website.pages.profile.main', $data);
    }

    public function update_information(Request $request)
    {
        $data['user'] = auth()->user();
        $data['countryCodes'] = Country::get()->pluck('code', 'id');
        return view('website.pages.profile.information', $data);
    }

    public function update_information_post(Request $request)
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

    public function my_requests(Request $request)
    {
        // dd($request->all());
        $user = auth()->user();
        $query = Follow::query();
        $query->where('user_id', $user->id);

        if (request()->filled('name')) $query->where('name', 'LIKE', '%' . request('name') . '%');
        if (request()->filled('status')) $query->where('status', request('status'));
        if (request()->filled('department')) $query->where('department', request('department'));

        if (request()->filled('sort') && request('sort') == 'asc') {
        } else {
            $query->latest();
        }

        $data['follow_requests'] = $query->paginate(9);
        $data['departments'] = Follow::departments();
        $data['status_types'] = Follow::status_types();
        $data['sort'] = [
            'desc' => 'desc',
            'asc'  => 'asc',
        ];

        return view('website.pages.profile.requests', $data);
    }

    public function my_request($id)
    {
        $follow_request = Follow::where('user_id', auth()->id())->where('id', $id)->first();
        if (empty($follow_request)) {
            Flash::error('Request Not Found.');
            return back();
        }
        $data['follow_request'] = $follow_request;
        return view('website.pages.profile.request', $data);
    }

    public function my_request_delete($id)
    {
        $follow_request = Follow::where('user_id', auth()->id())->where('id', $id)->first();
        if (empty($follow_request)) {
            Flash::error('Request Not Found.');
            return back();
        }
        $follow_request->delete();
        Flash::success('Request Deleted Successful.');
        return back();
    }
}
