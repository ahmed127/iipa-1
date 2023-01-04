<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [
        'prefix' => 'adminPanel',
        'namespace' => 'App\Http\Controllers\AdminPanel',
        'as' => 'adminPanel.'
    ],
    function () {

        Route::group(['middleware' => ['guest']], function () {

            Route::get('/login', 'AuthController@login')->name('login');
            Route::post('/login', 'AuthController@postLogin')->name('postLogin');
        });


        Route::group(['middleware' => ['auth:admin', 'permissionHandler']], function () {

            Route::get('logout', 'AuthController@logout')->name('logout');
            Route::get('/', 'DashboardController@dashboard')->name('dashboard');
            Route::get('profile', 'AdminController@profile')->name('admins.profile');
            Route::get('password', 'AdminController@passwordForm')->name('admins.password');
            Route::patch('update-password', 'AdminController@updatePassword')->name('admins.updatePassword');
            Route::resource('roles', 'RolesController')->except('show');
            Route::get('updatePermissions', 'RolesController@updatePermissions')->name('roles.updatePermissions');

            Route::post('/export/{forable}', 'ExportController@export')->name('data.export');

            Route::resource('admins', AdminController::class);

            Route::resource('socialLinks', SocialLinkController::class);
            Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
            Route::resource('information', InformationController::class);
            Route::resource('sliders', SliderController::class);
            Route::resource('contacts', ContactController::class);
            Route::get('newsletters', 'NewsletterController@index')->name('newsletters.index');
            Route::resource('blogCategories', BlogCategoryController::class);
            Route::resource('blogs', BlogController::class);
            Route::resource('faqCategories', FaqCategoryController::class);
            Route::resource('faqs', FaqController::class);

            // Pages CRUD
            Route::resource('pages', 'PageController');
            Route::resource('pages.paragraphs', 'ParagraphController')->shallow();
            Route::resource('pages.images', 'imagesController')->shallow();

            Route::resource('settings', SettingController::class);

            Route::resource('notifications', NotificationController::class);

            Route::resource('countries', CountryController::class);
            Route::resource('countries.cities', CityController::class)->shallow();
            Route::resource('cities.regions', RegionController::class)->shallow();

            Route::controller(MenuController::class)->as('menus.')->prefix('menus')->group(function () {

                Route::get('/', 'menu_index')->name('menu_index');
                Route::get('/{id}', 'menu_show')->name('menu_show');
                Route::get('/create', 'menu_create')->name('menu_create');
                Route::get('/{id}/edit', 'menu_edit')->name('menu_edit');
                Route::post('/store', 'menu_store')->name('menu_store');
                Route::patch('/update', 'menu_update')->name('menu_update');
                Route::delete('/destroy', 'menu_destroy')->name('menu_destroy');

                Route::get('/{menu}/items', 'item_index')->name('item_index');
                Route::get('/{menu}/items/{id}/show', 'item_show')->name('item_show');
                Route::get('/{menu}/items/create', 'item_create')->name('item_create');
                Route::get('/{menu}/items/{id}/edit', 'item_edit')->name('item_edit');
                Route::post('/{menu}/items/store', 'item_store')->name('item_store');
                Route::patch('/{menu}/items/{id}/update', 'item_update')->name('item_update');
                Route::delete('/{menu}/items/destroy', 'item_destroy')->name('item_destroy');
            });


            Route::resource('directors', DirectorController::class);
            Route::resource('volunteerTypes', VolunteerTypeController::class);
            Route::resource('volunteers', VolunteerController::class);
            Route::resource('cooperativeTrainings', CooperativeTrainingController::class);
            Route::resource('individualTrainings', IndividualTrainingController::class);
            Route::resource('jobs', JobController::class);
            Route::resource('consultantTypes', ConsultantTypeController::class);
            Route::resource('consultings', ConsultingController::class);
            Route::resource('initiatives', InitiativeController::class);
            Route::resource('laws', LawController::class);
            Route::resource('outreaches', OutreachController::class);
            Route::resource('regulations', RegulationController::class);
            Route::resource('partners', PartnerController::class);
            Route::resource('events', EventController::class);
            Route::resource('eventAttendees', EventAttendeeController::class);
            Route::resource('companies', CompanyController::class);
            Route::resource('packages', PackageController::class);
            Route::resource('recruitments', RecruitmentController::class);
        });
    }
);

///////////////////////////////////////////////////////////////////////////
///								End admin panel routes 					///
///////////////////////////////////////////////////////////////////////////





Route::group([
    'prefix' => '/',
    'namespace' => 'App\Http\Controllers\Website',
    'as' => 'website.'
], function () {
    Route::group(['middleware' => ['guest']], function () {

        $class_name_auth = 'AuthController@';
        Route::get('login',  $class_name_auth . 'login')->name('login');
        Route::post('login-post',  $class_name_auth . 'login_post')->name('login_post');
        Route::get('register',  $class_name_auth . 'register')->name('register');
        Route::post('register-post',  $class_name_auth . 'register_post')->name('register_post');
        Route::get('forget_password',  $class_name_auth . 'forget_password')->name('forget_password');
        Route::post('forget_password_post',  $class_name_auth . 'forget_password_post')->name('forget_password_post');
        Route::get('reset_password/{email}',  $class_name_auth . 'reset_password')->name('reset_password');
        Route::post('reset_password_post',  $class_name_auth . 'reset_password_post')->name('reset_password_post');
    });

    Route::group(['middleware' => ['auth:web']], function () {

        Route::get('logout',  'AuthController@logout')->name('logout');
        $class_name_profile = 'ProfileController@';

        //Profile
        Route::get('profile', $class_name_profile . 'profile')->name('profile');
        Route::get('update-information', $class_name_profile . 'update_information')->name('update_information');
        Route::post('update-information-post', $class_name_profile . 'update_information_post')->name('update_information_post');
        Route::get('update-password', $class_name_profile . 'update_password')->name('update_password');
        Route::post('update-password-post', $class_name_profile . 'update_password_post')->name('update_password_post');
        Route::get('my-requests',  $class_name_profile . 'my_requests')->name('my_requests');
        Route::get('my-requests/{id}',  $class_name_profile . 'my_request')->name('my_request');
        Route::get('my-requests/{id}/deleted',  $class_name_profile . 'my_request_delete')->name('my_request_delete');

        $class_name_main = 'MainController@';

        // Pages
        Route::get('home', $class_name_main . 'home')->name('home');
        Route::get('events', $class_name_main . 'events')->name('events');
        Route::get('contact-us', $class_name_main . 'contact_us')->name('contact_us');
        Route::post('contact-us', $class_name_main . 'contact_us_store')->name('contact_us_store');
        Route::get('help', $class_name_main . 'help')->name('help');

        // about_us
        Route::get('about_us/incorporation', $class_name_main . 'incorporation')->name('incorporation');
        Route::get('about_us/our-goals', $class_name_main . 'our_goals')->name('our_goals');
        Route::get('about_us/board-of-directors', $class_name_main . 'board_of_directors')->name('board_of_directors');
        Route::get('about_us/organizational-structure', $class_name_main . 'organizational_structure')->name('organizational_structure');
        Route::get('about_us/our-partners', $class_name_main . 'our_partners')->name('our_partners');
        // about_us

        Route::get('awareness', $class_name_main . 'outreaches')->name('outreaches');
        Route::get('awareness/{outreach}', $class_name_main . 'outreaches')->name('outreaches');
        Route::get('the-laws', $class_name_main . 'laws')->name('laws');
        Route::get('the-initiatives', $class_name_main . 'initiatives')->name('initiatives');
        Route::get('the-initiative/{initiative}', $class_name_main . 'initiative')->name('initiative');

        // volunteer-training
        Route::get('volunteer-request',  $class_name_main . 'volunteer_request')->name('volunteer_request');
        Route::post('volunteer-request',  $class_name_main . 'volunteer_request_store')->name('volunteer_request_store');
        Route::get('training-entities',  $class_name_main . 'training_entities')->name('training_entities');
        Route::post('training-entities',  $class_name_main . 'training_entities_store')->name('training_entities_store');
        Route::get('training-individuals',  $class_name_main . 'training_individuals')->name('training_individuals');
        Route::post('training-individuals',  $class_name_main . 'training_individuals_store')->name('training_individuals_store');
        // volunteer-training

        // your-advisors
        Route::get('your-advisors', $class_name_main . 'advisors')->name('advisors');
        Route::post('your-advisors-store', $class_name_main . 'advisors_store')->name('advisors_store');
        // your-advisors

        // class-actions
        Route::get('class-actions-request', $class_name_main . 'class_actions_request')->name('class_actions_request');
        Route::post('class-actions-request-store', $class_name_main . 'class_actions_request_store')->name('class_actions_request_store');
        Route::get('class-actions-tutorial', $class_name_main . 'class_actions_tutorial')->name('class_actions_tutorial');
        // class-actions

        // volunteer-training
        Route::get('volunteer-request', $class_name_main . 'volunteer_request')->name('volunteer_request');
        Route::get('training-entities', $class_name_main . 'training_entities')->name('training_entities');
        Route::get('training-individuals', $class_name_main . 'training_individuals')->name('training_individuals');
        // volunteer-training

        // media-center
        Route::get('media-center', $class_name_main . 'media_center_all')->name('media_center_all');
        Route::get('media-center/{id}', $class_name_main . 'media_center_single')->name('media_center_single');
        // media-center

        // recruitment
        Route::get('recruitment', $class_name_main . 'recruitment')->name('recruitment');
        Route::post('recruitment-store', $class_name_main . 'recruitment_store')->name('recruitment_store');
        // recruitment

        // Companies
        Route::get('authorized-companies', $class_name_main . 'authorized_companies')->name('authorized_companies');
        Route::post('authorized-companies', $class_name_main . 'authorized_companies_search')->name('authorized_companies_search');
        Route::get('not-authorized-companies', $class_name_main . 'not_authorized_companies')->name('not_authorized_companies');
        Route::post('not-authorized-companies', $class_name_main . 'not_authorized_companies_search')->name('not_authorized_companies_search');
        // End Companies

        // Packages
        Route::get('packages', $class_name_main . 'packages')->name('packages');
        // End Packages
    });
});
