<nav class="navbar bg-light navbar-expand-xxl shadow-custom sticky-top p-lg-4 p-sm-0">
    <div class="container-fluid flex-sm-nowrap">
        <a class="navbar-brand m-0" href="{{ route('website.home') }}">
            <img style="max-height: 100px; max-width: 100px"
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
                                    {{ auth()->user()->full_name }}
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item {{ Request::is('*profile*') ? 'active' : '' }}"
                                            href="{{ route('website.profile') }}">Profile</a></li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('*update-information*') ? 'active' : '' }}"
                                            href="{{ route('website.update_information') }}">
                                            Update Information
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('*update-password*') ? 'active' : '' }}"
                                            href="{{ route('website.update_password') }}">
                                            Update Password
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('*my-request*') ? 'active' : '' }}"
                                            href="{{ route('website.my_request') }}">
                                            My Requests
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="{{ route('website.logout') }}">
                                            logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link pt-0" href="{{ route('website.login') }}">
                                    <i class="fa-sharp fa-solid fa-circle-user text-primary"></i>
                                    <span class="my-auto"> Register / Login </span>
                                </a>
                            </li>
                            @endauth
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <!-- <span class="hr-navbar d-xl-none w-75 my-3 mx-auto"><hr class="dropdown-divider"></span> -->
                            <li class="nav-item">
                                <a class="nav-link pt-0" href="{{ route('website.events') }}">
                                    <i class="fa-regular fa-calendar-days text-primary"></i>
                                    <span class="my-auto"> Events </span>
                                </a>
                            </li>
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <!-- <span class="hr-navbar d-xl-none w-75 my-3 mx-auto"><hr class="dropdown-divider"></span> -->
                            <li class="nav-item">
                                <a class="nav-link pt-0 " href="{{ route('website.contact_us') }}">
                                    <i class="fa-solid fa-envelope text-primary"></i>
                                    <span class="my-auto"> Contact Us </span>
                                </a>
                            </li>
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <!-- <span class="hr-navbar d-xl-none w-75 my-3 mx-auto"><hr class="dropdown-divider"></span> -->
                            <li class="nav-item">
                                <a class="nav-link pt-0" href="{{ route('website.help') }}">
                                    <i class="fa-solid fa-circle-info text-primary"></i>
                                    <span class="my-auto"> Help </span>
                                </a>
                            </li>
                            <span class="vr d-xl-inline-block d-none mx-2 mb-1"></span>
                            <!-- <span class="hr-navbar d-xl-none w-75 my-3 mx-auto"><hr class="dropdown-divider"></span> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pt-0 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-language  text-primary"></i>
                                    @if ($lang_page == 'en')
                                    <span class="my-auto"> En </span>
                                    @else
                                    <span class="my-auto"> Ar </span>
                                    @endif
                                </a>
                                <ul class="dropdown-menu">

                                    @if ($lang_page == 'ar')
                                    <li><a class="dropdown-item"
                                            href="{{ str_replace('/ar', '/en', url()->current()) }}">En</a></li>
                                    @else
                                    <li><a class="dropdown-item"
                                            href="{{ str_replace('/en', '/ar', url()->current()) }}">Ar</a></li>
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
                                    Home
                                </a>
                            </li>
                            {{-- End: Home --}}

                            {{-- Start: How We Are --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*who-we-are*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    Who we are
                                </a>
                                <ul class="dropdown-menu" style="width: 210px;">

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*incorporation*') ? 'active' : '' }}"
                                            href="{{ route('website.incorporation') }}">
                                            Incorporation
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*our-goals*') ? 'active' : '' }}"
                                            href="{{ route('website.our_goals') }}">
                                            Our Goals
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*board-of-directors*') ? 'active' : '' }}"
                                            href="{{ route('website.board_of_directors') }}">
                                            Board of Directors
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*organizational-structure*') ? 'active' : '' }}"
                                            href="{{ route('website.organizational_structure') }}">
                                            Organizational Structure
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  {{ Request::is('*our-partners*') ? 'active' : '' }}"
                                            href="{{ route('website.our_partners') }}">
                                            Our partners
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- End: How We Are --}}

                            {{-- Start: The Outreach --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*awareness*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('models/outreaches.plural')

                                </a>
                                <ul class="dropdown-menu" style="width: 210px;">
                                    @forelse ($outreaches_app as $outreach)
                                    <li>
                                        @if ($outreach->type == 1)

                                        <a class="dropdown-item"
                                            href="{{ route('website.outreaches', $outreach->id) }}">
                                            {{ $outreach->title??'' }}
                                        </a>
                                        @else
                                        <a class="dropdown-item" target="_blank"
                                            href="{{ $outreach->attachment_pdf??'' }}">
                                            {{ $outreach->title??'' }}
                                        </a>
                                        @endif
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            {{-- End: The Outreach --}}

                            {{-- Start: The Laws --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*laws*') ? 'active' : '' }}"
                                    href="{{ route('website.laws') }}">The Laws</a>
                            </li>
                            {{-- End: The Laws --}}

                            {{-- Start: The Initiatives --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*initiatives*') ? 'active' : '' }}"
                                    href="{{ route('website.initiatives') }}">@lang('models/initiatives.plural')</a>
                            </li>
                            {{-- End: The Initiatives --}}

                            {{-- Start: Your Advisor --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*advisors*') ? 'active' : '' }}"
                                    href="{{ route('website.advisors') }}">Your Advisor</a>
                            </li>
                            {{-- End: Your Advisor --}}

                            {{-- Start: Class Action --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*class-action*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    Class Action

                                </a>
                                <ul class="dropdown-menu" style="width: 340px;">

                                    <li>
                                        <a class="dropdown-item" href="{{ route('website.class_actions_request') }}">
                                            Cooperative training program for the entities
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('website.class_actions_tutorial') }}">
                                            How to file a class action
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- End: Class Action --}}

                            {{-- Start: Volunteering & Training --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('*volunteer*') ? 'active' : '' }} {{ Request::is('*training*') ? 'active' : '' }}"
                                    href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    Volunteering & Training
                                </a>
                                <ul class="dropdown-menu" style="width: 340px;">

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*volunteer-request*') ? 'active' : '' }}"
                                            href="{{ route('website.volunteer_request') }}">
                                            Volunteer request
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*training-entities*') ? 'active' : '' }}"
                                            href="{{ route('website.training_entities') }}">
                                            Cooperative training program for the entities
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item {{ Request::is('*training-individuals*') ? 'active' : '' }}"
                                            href="{{ route('website.training_individuals') }}">
                                            Cooperative training program for individuals
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            {{-- End: Volunteering & Training --}}

                            {{-- Start: Media Center --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*media-center*') ? 'active' : '' }}"
                                    href="{{ route('website.media_center_all') }}">Media Center</a>
                            </li>
                            {{-- End: Media Center --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
