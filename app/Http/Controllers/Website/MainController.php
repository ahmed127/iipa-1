<?php

namespace App\Http\Controllers\Website;

use App\Models\Contact;
use App\Models\Country;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\CreateContactRequest;

class MainController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }

    public function events()
    {
        return view('website.pages.events');
    }

    public function contact_us()
    {
        $countryCodes = Country::get()->pluck('code', 'id');
        return view('website.pages.contact_us', compact('countryCodes'));
    }

    public function contact_us_store(CreateContactRequest $request)
    {
        $input = $request->all();

        $contact = Contact::create($input);

        Flash::success(__('lang.message_sent'));

        return back();
    }

    public function help()
    {
        return view('website.pages.help');
    }

    // Who We Are
    public function incorporation()
    {
        return view('website.pages.who_we_are.incorporation');
    }

    public function our_goals()
    {
        return view('website.pages.who_we_are.our_goals');
    }

    public function board_of_directors()
    {
        return view('website.pages.who_we_are.board_of_directors');
    }

    public function organizational_structure()
    {
        return view('website.pages.who_we_are.organizational_structure');
    }

    public function our_partners()
    {
        return view('website.pages.who_we_are.our_partners');
    }
    // Who We Are

    public function outreach()
    {
        return view('website.pages.outreach');
    }

    public function laws()
    {
        return view('website.pages.laws');
    }

    public function initiatives()
    {
        return view('website.pages.initiatives');
    }

    // Advisors
    public function advisors()
    {
        return view('website.pages.advisors');
    }

    public function advisors_store()
    {
        return back();
    }
    // Advisors

    // Class Actions
    public function class_actions_request()
    {
        return view('website.pages.class_actions.request');
    }

    public function class_actions_request_store()
    {
        return back();
    }

    public function class_actions_tutorial()
    {
        return view('website.pages.class_actions.tutorial');
    }
    // Class Actions

    // Volunteer and Training
    public function volunteer_request()
    {
        return view('website.pages.volunteer_request');
    }

    public function training_entities()
    {
        return view('website.pages.training_entities');
    }

    public function training_individuals()
    {
        return view('website.pages.training_individuals');
    }
    // Volunteer and Training

    // Media Center
    public function media_center_all()
    {
        return view('website.pages.media_center.all');
    }

    public function media_center_single($id)
    {
        return view('website.pages.media_center.single');
    }
    // Media Center

    // Media Center
    public function recruitment()
    {
        return view('website.pages.recruitment');
    }

    public function recruitment_store(Request $request)
    {
        return back();
    }
    // Media Center

}
