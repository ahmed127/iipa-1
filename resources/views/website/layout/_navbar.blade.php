<nav class="navbar bg-light navbar-expand-xxl shadow-custom sticky-top p-lg-4 p-sm-0">
    <div class="container-fluid flex-sm-nowrap">
        <a class="navbar-brand m-0" href="{{ route('website.home') }}">
            <img style="max-height: 300px; max-width: 300px"
                src="{{ $information_app->translate(App::getLocale())->logo_original_path }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img style="max-height: 100px; max-width: 100px"
                        src="{{ $information_app->translate(App::getLocale())->logo_original_path }}" alt="logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="col-lg-12 ">
                        <ul class="navbar-nav me-auto mb-2 mb-xxl-0 float-xxl-end">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link pt-0 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-sharp fa-solid fa-circle-user text-primary"></i>
                                        {{ auth()->user()->full_name }} <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <a class="dropdown-item {{ Request::is('*profile*') ? 'active' : '' }}"
                                                href="{{ route('website.profile') }}">
                                                @lang('lang.profile')
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item {{ Request::is('*update-information*') ? 'active' : '' }}"
                                                href="{{ route('website.update_information') }}">
                                                @lang('lang.update_information')
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item {{ Request::is('*update-password*') ? 'active' : '' }}"
                                                href="{{ route('website.update_password') }}">
                                                @lang('lang.update_password')
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item {{ Request::is('*my-request*') ? 'active' : '' }}"
                                                href="{{ route('website.my_requests') }}">
                                                @lang('lang.my_requests')
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger" href="{{ route('website.logout') }}">
                                                @lang('lang.logout')
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link pt-0" href="{{ route('website.login') }}">
                                        <i class="fa-sharp fa-solid fa-circle-user text-primary"></i>
                                        <span class="my-auto">@lang('lang.register_or_login')</span>
                                    </a>
                                </li>
                            @endauth
                            {{-- <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <li class="nav-item">
                                <a class="nav-link pt-0" href="{{ route('website.events') }}">
                                    <i class="fa-regular fa-calendar-days text-primary"></i>
                                    <span class="my-auto">@lang('lang.events')</span>
                                </a>
                            </li> --}}
                            {{-- <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <li class="nav-item">
                                <a class="nav-link pt-0 " href="{{ route('website.contact_us') }}">
                                    <i class="fa-solid fa-envelope text-primary"></i>
                                    <span class="my-auto">@lang('lang.contact_us')</span>
                                </a>
                            </li> --}}
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <li class="nav-item">
                                <a class="nav-link pt-0" href="{{ route('website.help') }}">
                                    <i class="fa-solid fa-circle-info text-primary"></i>
                                    <span class="my-auto">@lang('lang.help')</span>
                                </a>
                            </li>
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <li class="nav-item dropdown">
                                <a class="nav-link pt-0 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-language  text-primary"></i>
                                    @if ($lang_page == 'en')
                                        <span class="my-auto"> @lang('lang.english') <i
                                                class="fa fa-chevron-down"></i></span>
                                    @else
                                        <span class="my-auto">@lang('lang.arabic') <i
                                                class="fa fa-chevron-down"></i></span>
                                    @endif
                                </a>
                                <ul class="dropdown-menu">
                                    @if ($lang_page == 'ar')
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ str_replace('ar', 'en', url()->current()) }}">
                                                @lang('lang.english')
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ str_replace('/en', '/ar', url()->current()) }}">
                                                @lang('lang.arabic')
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <span class="hr-navbar d-xl-none w-100 my-3">
                        <hr class="dropdown-divider">
                    </span>
                    <div class="col-lg-12 ">
                        <ul class="navbar-nav me-auto mb-2 mb-xxl-0 float-xxl-end">

                            {{-- Start: Home --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*home*') ? 'active' : '' }}" aria-current="page"
                                    href="{{ route('website.home') }}">
                                    @lang('lang.home')
                                </a>
                            </li>
                            {{-- End: Home --}}

                            {{-- Start: How We Are --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*who-we-are*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('lang.who_we_are') <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" style="width: 210px;">

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*incorporation*') ? 'active' : '' }}"
                                            href="{{ route('website.incorporation') }}">
                                            {{ $page_app->where('id', 1)->first()->title ?? '' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*our-goals*') ? 'active' : '' }}"
                                            href="{{ route('website.our_goals') }}">
                                            {{ $page_app->where('id', 2)->first()->title ?? '' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*board-of-directors*') ? 'active' : '' }}"
                                            href="{{ route('website.board_of_directors') }}">
                                            @lang('lang.board_of_directors')
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*general-assembly-members*') ? 'active' : '' }}"
                                            href="{{ route('website.general_assembly_members') }}">
                                            @lang('lang.general_assembly_members')
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*organizational-structure*') ? 'active' : '' }}"
                                            href="{{ route('website.organizational_structure') }}">
                                            {{ $page_app->where('id', 3)->first()->title ?? '' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*our-partners*') ? 'active' : '' }}"
                                            href="{{ route('website.our_partners') }}">
                                            @lang('lang.our_partners')
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- End: How We Are --}}

                            {{-- Start: The Outreach --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*awareness*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('models/outreaches.plural') <i class="fa fa-chevron-down"></i>

                                </a>
                                <ul class="dropdown-menu" style="width: 210px;">
                                    @forelse ($outreaches_app as $outreach)
                                        <li>
                                            @if ($outreach->type == 1)
                                                <a class="dropdown-item"
                                                    href="{{ route('website.outreaches', $outreach->id) }}">
                                                    {{ $outreach->title ?? '' }}
                                                </a>
                                            @else
                                                <a class="dropdown-item" target="_blank"
                                                    href="{{ $outreach->attachment_pdf ?? '' }}">
                                                    {{ $outreach->title ?? '' }}
                                                </a>
                                            @endif
                                        </li>
                                    @empty
                                    @endforelse
                                    <li class="bg-success">
                                        <a class="dropdown-item text-light"
                                            href="{{ route('website.authorized_companies') }}">
                                            @lang('lang.authorized_companies')
                                        </a>
                                    </li>
                                    <li class="bg-danger">
                                        <a class="dropdown-item text-light"
                                            href="{{ route('website.not_authorized_companies') }}">
                                            @lang('lang.not_authorized_companies')
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- End: The Outreach --}}

                            {{-- Start: The Laws --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*laws*') ? 'active' : '' }}"
                                    href="{{ route('website.laws') }}">
                                    @lang('lang.laws')
                                </a>
                            </li>
                            {{-- End: The Laws --}}

                            {{-- Start: The Initiatives --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*initiatives*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('models/initiatives.plural') <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" style="width: max-content;">
                                    @forelse ($initiatives_app as $single_initiative)
                                        <li>
                                            <a class="dropdown-item {{ Request::is('*initiative/' . $single_initiative->id) ? 'active' : '' }}"
                                                href="{{ route('website.initiative', $single_initiative->id) }}">
                                                {{ $single_initiative->title ?? '' }}
                                            </a>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            {{-- End: The Initiatives --}}

                            {{-- Start: Your Advisor --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*advisors*') ? 'active' : '' }}"
                                    href="{{ route('website.advisors') }}">
                                    @lang('lang.your_advisors')
                                </a>
                            </li>
                            {{-- End: Your Advisor --}}



                            {{-- Start: Class Action --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*class-actions*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('lang.class_actions') <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" style="width: 340px;">

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*request*') ? 'active' : '' }}"
                                            href="{{ route('website.class_actions_request') }}">
                                            @lang('lang.request_advisors')
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('*tutorial*') ? 'active' : '' }}"
                                            href="{{ route('website.class_actions_tutorial') }}">
                                            {{ $page_app->where('id', 4)->first()->title ?? '' }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- End: Class Action --}}

                            {{-- Start: Volunteering & Training --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*volunteer*') ? 'active' : '' }} {{ Request::is('*training*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('lang.volunteering_and_training') <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" style="width: 340px;">

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*volunteer-request*') ? 'active' : '' }}"
                                            href="{{ route('website.volunteer_request') }}">
                                            @lang('lang.volunteer_request')
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*training-entities*') ? 'active' : '' }}"
                                            href="{{ route('website.training_entities') }}">
                                            @lang('lang.cooperative_training_program_for_the_entities')
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*training-individuals*') ? 'active' : '' }}"
                                            href="{{ route('website.training_individuals') }}">
                                            @lang('lang.cooperative_training_program_for_individuals')
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            {{-- End: Volunteering & Training --}}

                            {{-- Start: Media Center --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*media-center*') ? 'active' : '' }}"
                                    href="{{ route('website.media_center_all') }}">
                                    @lang('lang.media_centre')
                                </a>
                            </li>
                            {{-- End: Media Center --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
