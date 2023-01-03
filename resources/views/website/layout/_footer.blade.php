<footer class="container-fluid overflow-hidden shadow-custom">
    <div class="p-lg-5 p-3">
        <div class="row gx-0">
            <div class="col-lg-3 col-md-4 col-sm-12 mx-md-auto me-lg-5 mx-sm-0 my-auto">
                <img class="w-100 d-flex justify-content-end" src="{{ $information_app->logo_original_path }}"
                    alt="">
            </div>
            <span class="vr d-lg-inline-block d-none"></span>
            <span class="hr-navbar d-lg-none w-100 my-4">
                <hr class="dropdown-divider">
            </span>
            <div class="col-lg-2 mx-lg-auto mx-sm-0 col-sm-12">
                <ul class="px-0 ms-xl-4 ms-lg-0 text-lg-start text-center">
                    <span class="px-1 fs-6 fw-bold">
                        <i class="fa-solid fa-briefcase fa-lg px-1 text-primary"></i>
                        عن الجمعيه
                    </span>
                    <li class="py-3">
                        <a class="px-1 fs-6 fw-bold" href="{{ route('website.incorporation') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            Incorporation
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="px-1 fs-6 fw-bold" href="{{ route('website.our_goals') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            Our Goals
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="px-1 fs-6 fw-bold" href="{{ route('website.board_of_directors') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            Board of Directors
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="px-1 fs-6 fw-bold" href="{{ route('website.organizational_structure') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            Organizational Structure
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="px-1 fs-6 fw-bold" href="{{ route('website.recruitment') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            Recruitment
                        </a>
                    </li>
                </ul>
            </div>
            <span class="vr d-lg-inline-block d-none"></span>
            <span class="hr-navbar d-lg-none w-100 my-4">
                <hr class="dropdown-divider">
            </span>
            <div class="col-lg-2 mx-lg-auto mx-sm-0 col-sm-12">
                <ul class="px-0 ms-xl-4 ms-lg-0 text-lg-start text-center">
                    <span class="px-1 fs-6 fw-bold">
                        <i class="fa-solid fa-circle-question fa-lg text-primary"></i>
                        المركز الاعلامي
                    </span>
                    <li class="py-3">
                        <a class="fs-6 fw-bold" href="{{ route('website.events') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            الفعاليات
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="fs-6 fw-bold" href="{{ route('website.media_center_all') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            الأخبار
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="fs-6 fw-bold" href="{{ route('website.packages') }}">
                            <i class="fa-solid fa-link fa-sm text-primary ps-2 pe-1"></i>
                            @lang('lang.packages')
                        </a>
                    </li>
                </ul>
            </div>
            <span class="vr d-lg-inline-block d-none"></span>
            <span class="hr-navbar d-lg-none w-100 my-4">
                <hr class="dropdown-divider">
            </span>
            <div class="col-lg-3 col-sm-12">
                <div class="text-lg-start text-center px-0 ms-lg-5 me-0 mx-sm-0 my-0">
                    <p class="fw-bold ">
                        @lang('lang.contact_us') :
                    </p>

                    <p class="fw-bold pt-2">
                        <i class="fa-solid fa-location-dot text-primary fa-2xl"></i>
                        <span class="fw-lighter px-1">
                            @lang('lang.our_office'):
                        </span>
                        {{ $information_app->address ?? '' }}
                    </p>
                    <p class="fw-bold pt-2">
                        <i class="fa-solid fa-envelope-open text-primary fa-xl"></i>
                        <span class="fw-lighter px-1">
                            @lang('lang.email'):
                        </span>
                        {{ $information_app->email ?? '' }}
                    </p>
                    <p class="fw-bold pt-2">
                        <i class="fa-solid fa-phone text-primary fa-xl"></i>
                        <span class="fw-lighter px-1">
                            @lang('lang.phone') :
                        </span>
                        {{ $information_app->phone ?? '' }}
                    </p>
                    <div class="d-flex justify-content-between pt-2 ">
                        @if ($information_app->linkedin_visible)
                            <a href="{{ $information_app->linkedin_link }}">
                                <i class="fa-brands fa-linkedin-in fa-2xl text-black-50"></i>
                            </a>
                        @endif

                        @if ($information_app->youtube_visible)
                            <a href="{{ $information_app->youtube_link }}">
                                <i class="fa-brands fa-youtube fa-2xl text-black-50"></i>
                            </a>
                        @endif

                        @if ($information_app->instagram_visible)
                            <a href="{{ $information_app->instagram_link }}">
                                <i class="fa-brands fa-instagram fa-2xl text-black-50"></i>
                            </a>
                        @endif

                        @if ($information_app->facebook_visible)
                            <a href="{{ $information_app->facebook_link }}">
                                <i class="fa-brands fa-facebook-f fa-2xl text-black-50"></i>
                            </a>
                        @endif

                        @if ($information_app->twitter_visible)
                            <a href="{{ $information_app->twitter_link }}">
                                <i class="fa-brands fa-twitter fa-2xl text-black-50"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid" style="background: #00113d;">
    <div class="row justify-content-between align-items-center text-white p-4 gx-0">
        <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
            <span class="fw-bold">
                <span class="px-1 fw-light">
                    <i class="fa-solid fa-gear"></i>
                    تم التطوير بواسطة:
                </span>
                IIPA.com.sa
            </span>
        </div>
        <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
            <span class="fw-bold w-100 d-block">
                <span class="px-1 fs-6 fw-light">
                    جميع الحقوق محفوظة
                </span>
                <span>
                    - © 2023 IIPA
                </span>

            </span>
        </div>
    </div>
</div>

<div class="section-market sticky-bottom">
    <div class="container-fluid text-white p-0">
        <p class="fw-bold py-0 mb-0">
            <span class="">
                <i class="fa-solid fa-dollar-sign"></i>
            </span>
            <span class="px-2">
                اسعار الاسهم الأن :
            </span>
        </p>
        <div class="fw-lighter m-0 overflow-x-hidden py-2" style="font-size: small;">
            الحفر العربية
            <span class="text-warning">29.00 0.00 (0.00%)</span> |
            البحري
            <span class="text-success">29.00 0.00 (0.00%)</span> |
            الدريس
            <span class="text-danger">29.00 0.00 (0.00%)</span> |
            الحفر العربية
            <span class="text-warning">29.00 0.00 (0.00%)</span> |
            البحري
            <span class="text-success">29.00 0.00 (0.00%)</span> |
            الدريس
            <span class="text-danger">29.00 0.00 (0.00%)</span> |
            الحفر العربية
            <span class="text-warning">29.00 0.00 (0.00%)</span> |
            البحري
            <span class="text-success">29.00 0.00 (0.00%)</span> |
            الدريس
            <span class="text-danger">29.00 0.00 (0.00%)</span> |
        </div>
    </div>
</div>
