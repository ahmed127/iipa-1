<?php

namespace App\Http\Controllers\Website;

use App\Models\Contact;
use App\Models\Country;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\CreateConsultingRequest;
use App\Http\Requests\AdminPanel\CreateContactRequest;
use App\Http\Requests\AdminPanel\CreateCooperativeTrainingRequest;
use App\Http\Requests\AdminPanel\CreateIndividualTrainingRequest;
use App\Http\Requests\AdminPanel\CreateRecruitmentRequest;
use App\Http\Requests\AdminPanel\CreateVolunteerRequest;
use App\Models\Company;
use App\Models\ConsultantType;
use App\Models\Consulting;
use App\Models\CooperativeTraining;
use App\Models\Director;
use App\Models\IndividualTraining;
use App\Models\Initiative;
use App\Models\Job;
use App\Models\Law;
use App\Models\Package;
use App\Models\Volunteer;
use App\Models\VolunteerType;
use App\Models\Outreach;
use App\Models\Partner;
use App\Models\Recruitment;

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
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.contact_us', compact('countryCodes'));
    }

    public function contact_us_store(CreateContactRequest $request)
    {
        $input = $request->all();

        Contact::create($input);

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
        $directors = Director::all();
        return view('website.pages.who_we_are.board_of_directors', compact('directors'));
    }

    public function organizational_structure()
    {
        return view('website.pages.who_we_are.organizational_structure');
    }

    public function our_partners()
    {
        $partners = Partner::all();
        return view('website.pages.who_we_are.our_partners', compact('partners'));
    }
    // Who We Are

    public function outreaches(Outreach $outreach)
    {
        return view('website.pages.outreach', compact('outreach'));
    }


    public function laws()
    {
        $laws = Law::paginate(9);
        return view('website.pages.laws', compact('laws'));
    }

    public function initiatives()
    {
        $initiatives = Initiative::paginate(9);
        return view('website.pages.initiatives', compact('initiatives'));
    }

    public function initiative(Initiative $initiative)
    {
        return view('website.pages.initiative', compact('initiative'));
    }

    // Advisors
    public function advisors()
    {
        $data['countryCodes'] = Country::get()->pluck('code', 'code');
        $data['countries'] = Country::get()->pluck('name', 'id');
        $data['jobs'] = Job::get()->pluck('name', 'id');
        $data['consultantTypes'] = ConsultantType::get()->pluck('name', 'id');
        $data['types'] = Consulting::types();
        $data['favLangs'] = Consulting::favLangs();
        $data['genders'] = Consulting::genders();


        return view('website.pages.advisors', $data);
    }

    public function advisors_store(CreateConsultingRequest $request)
    {
        $input = $request->all();

        Consulting::create($input);

        Flash::success(__('lang.message_sent'));

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
        $volunteerTypes = VolunteerType::get()->pluck('name', 'id');
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.volunteer_request', compact('volunteerTypes', 'countryCodes'));
    }

    public function volunteer_request_store(CreateVolunteerRequest $request)
    {
        $input = $request->all();
        $volunteer = Volunteer::create($input);
        Flash::success(__('lang.message_sent'));

        return back();
    }

    public function training_entities()
    {
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.training_entities', compact('countryCodes'));
    }

    public function training_entities_store(CreateCooperativeTrainingRequest $request)
    {
        $input = $request->all();
        $training = CooperativeTraining::create($input);
        Flash::success(__('lang.message_sent'));

        return back();
    }

    public function training_individuals()
    {
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.training_individuals', compact('countryCodes'));
    }


    public function training_individuals_store(CreateIndividualTrainingRequest $request)
    {
        $input = $request->all();
        $training = IndividualTraining::create($input);
        Flash::success(__('lang.message_sent'));

        return back();
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

    // Recruitment
    public function recruitment()
    {
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.recruitment', compact('countryCodes'));
    }

    public function recruitment_store(CreateRecruitmentRequest $request)
    {
        $input = $request->all();

        Recruitment::create($input);

        Flash::success(__('lang.message_sent'));

        return back();
    }
    // Recruitment

    // Companies
    public function authorized_companies()
    {
        $companies = Company::authorized()->paginate(2);
        return view('website.pages.authorized_companies', compact('companies'));
    }
    public function authorized_companies_search()
    {
        $query = Company::query();
        if (request('search_term')) {
            $query->whereTranslationLike('name', "%" . request('search_term') . "%")
                ->orWhereTranslationLike('location', "%" . request('search_term') . "%")
                ->orWhere('website', 'LIKE', "%" . request('search_term') . "%");
        }

        $companies = $query->authorized()->paginate(10);
        return view('website.pages.authorized_companies', compact('companies'));
    }

    public function not_authorized_companies()
    {
        $companies = Company::notAuthorized()->paginate(10);
        return view('website.pages.not_authorized_companies', compact('companies'));
    }
    public function not_authorized_companies_search()
    {
        $query = Company::query();
        if (request('search_term')) {
            $query->whereTranslationLike('name', "%" . request('search_term') . "%")
                ->orWhereTranslationLike('location', "%" . request('search_term') . "%")
                ->orWhere('website', 'LIKE', "%" . request('search_term') . "%");
        }

        $companies = $query->notAuthorized()->paginate(10);
        return view('website.pages.not_authorized_companies', compact('companies'));
    }
    // End Companies

    // Packages
    public function packages()
    {
        $packages = Package::all();
        return view('website.pages.packages', compact('packages'));
    }
    // End Packages

}
