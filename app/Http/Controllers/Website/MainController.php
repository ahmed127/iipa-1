<?php

namespace App\Http\Controllers\Website;

use App\Models\Job;
use App\Models\Law;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Director;
use App\Models\Outreach;
use App\Models\Statistic;
use App\Models\Volunteer;
use App\Mail\RequestReply;
use App\Models\Consulting;
use App\Models\Initiative;
use App\Models\Regulation;
use Laracasts\Flash\Flash;
use App\Models\FaqCategory;
use App\Models\Recruitment;
use App\Helpers\FollowTrait;
use Illuminate\Http\Request;
use App\Models\VolunteerType;
use App\Models\ConsultantType;
use App\Models\IndividualTraining;
use App\Models\CooperativeTraining;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AdminPanel\CreateContactRequest;
use App\Http\Requests\AdminPanel\CreateVolunteerRequest;
use App\Http\Requests\AdminPanel\CreateConsultingRequest;
use App\Http\Requests\AdminPanel\CreateRecruitmentRequest;
use App\Http\Requests\AdminPanel\CreateIndividualTrainingRequest;
use App\Http\Requests\AdminPanel\CreateCooperativeTrainingRequest;

class MainController extends Controller
{
    use FollowTrait;

    public function home()
    {
        $data['slider'] = Slider::all();
        $data['regulations'] = Regulation::where('type_for', 'regulation')->get();
        $data['partners'] = Partner::orderBy('id', 'DESC')->get();
        $data['our_goals'] = Page::find(2);
        $data['class_action_tutorial'] = Page::find(4);
        return view('website.pages.home', $data);
    }

    public function events()
    {
        $events = Event::get()->pluck('event_json');

        if (request()->ajax()) {
            return response()->json(compact('events'));
        }
        return view('website.pages.events', compact('events'));
    }

    public function contact_us()
    {
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('website.pages.contact_us', compact('countryCodes'));
    }

    public function contact_us_store(CreateContactRequest $request)
    {
        $input = $request->all();
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $contact = Contact::create($input);
        $this->follow_store($contact);

        Flash::success(__('lang.message_sent'));

        return back();
    }

    public function help()
    {
        $faqCategories = FaqCategory::with('faqs')->get();
        return view('website.pages.help', compact('faqCategories'));
    }

    // Who We Are
    public function incorporation()
    {
        $page = Page::find(1);
        return view('website.pages.page', compact('page'));
    }

    public function our_goals()
    {
        $page = Page::find(2);
        return view('website.pages.page', compact('page'));
    }

    public function board_of_directors()
    {
        $directors = Director::where('type', 'directors')->get();
        return view('website.pages.who_we_are.board_of_directors', compact('directors'));
    }

    public function general_assembly_members()
    {
        $generals = Director::where('type', 'generals')->get();
        return view('website.pages.who_we_are.general_assembly_members', compact('generals'));
    }

    public function organizational_structure()
    {
        $page = Page::find(3);
        return view('website.pages.page', compact('page'));
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

    public function regulations()
    {
        $regulations = Regulation::where('type_for', 'regulation')->paginate(9);
        return view('website.pages.regulations', compact('regulations'));
    }

    public function financials()
    {
        $financials = Regulation::where('type_for', 'financial')->paginate(9);
        return view('website.pages.financials', compact('financials'));
    }

    public function policies()
    {
        $policies = Regulation::where('type_for', 'policy')->paginate(9);
        return view('website.pages.policies', compact('policies'));
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
        $input['type'] = array_search(__('lang.legal_advisor'), Consulting::types());
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $consulting = Consulting::create($input);
        $this->follow_store($consulting);

        Flash::success(__('lang.message_sent'));

        return back();
    }
    // Advisors

    // Class Actions
    public function class_actions_request()
    {
        $data['countryCodes'] = Country::get()->pluck('code', 'code');
        $data['countries'] = Country::get()->pluck('name', 'id');
        $data['jobs'] = Job::get()->pluck('name', 'id');
        $data['consultantTypes'] = ConsultantType::get()->pluck('name', 'id');
        $data['types'] = Consulting::types();
        $data['favLangs'] = Consulting::favLangs();
        $data['genders'] = Consulting::genders();

        return view('website.pages.class_actions.request', $data);
    }

    public function class_actions_request_store(CreateConsultingRequest $request)
    {
        $input = $request->all();
        $input['type'] = array_search(__('lang.request_lawsuit'), Consulting::types());
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $consulting = Consulting::create($input);
        $this->follow_store($consulting);

        Flash::success(__('lang.message_sent'));

        return back();
    }

    public function class_actions_tutorial()
    {
        $page = Page::find(4);
        return view('website.pages.page', compact('page'));
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
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $volunteer = Volunteer::create($input);
        $this->follow_store($volunteer);

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
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $training = CooperativeTraining::create($input);
        $this->follow_store($training);

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
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $training = IndividualTraining::create($input);
        $this->follow_store($training);
        Flash::success(__('lang.message_sent'));

        return back();
    }
    // Volunteer and Training

    // Media Center
    public function media_center_all()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('website.pages.media_center.all', compact('blogs'));
    }

    public function media_center_single($id)
    {
        $blog = Blog::findOrFail($id);
        return view('website.pages.media_center.single', compact('blog'));
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
        if (Auth::user()) {
            $input['user_id'] = auth()->id();
        }
        $recruitment = Recruitment::create($input);
        $this->follow_store($recruitment);

        Flash::success(__('lang.message_sent'));

        return back();
    }
    // Recruitment

    // Companies
    public function authorized_companies()
    {
        $companies = Company::authorized()->paginate(10);
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

    // Statistics
    public function statistics()
    {
        $statistics = Statistic::all();
        return view('website.pages.statistics', compact('statistics'));
    }
    // End Statistics

}
