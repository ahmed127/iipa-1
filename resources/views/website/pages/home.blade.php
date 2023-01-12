@extends('website.layout.app')

@section('title', __('lang.home'))

@section('content')

    {{-- Slider --}}
    <div class="swiper mySwiper text-white">
        <div class="swiper-wrapper m-0 text-white">
            @forelse ($slider as $slide)
                <div class="swiper-slide d-flex text-start"
                    style="background-image: url('{{ $slide->photo_original_path }}'); background-size: cover; height: 70vh;">
                    <div class="slide-content container-fluid">
                        <h1 class="fw-bold fs-2" data-swiper-parallax="-300">
                            {{ $slide->title }}
                        </h1>
                        <div class="text-start" data-swiper-parallax="-100">
                            <p class="pb-2 col-lg-4 col-md-6 col-sm-12">
                                {{ $slide->brief }}
                            </p>
                        </div>
                        <a href="{{ $slide->type == 1 ? $slide->attachment_pdf : $slide->link }}" target="_blank"
                            class="btn btn-primary btn-lg rounded-4 px-5">
                            <i class="fa-solid fa-circle-info text-light"></i>
                            @lang('lang.more')
                        </a>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
        {{-- swiper-buttons --}}
        <span class="d-flex align-items-center gap-4 w-50 position-absolute swiper-button">
            <div class="swiper-pagination"></div>
            <span class="d-flex gap-2 swiper-btn">
                <div class="swiper-button-prev text-white"><i class="fa-sharp fa-solid fa-arrow-right"></i>
                </div>
                <div class="swiper-button-next text-white"><i class="fa-solid fa-arrow-left"></i></div>
            </span>
        </span>
    </div>
    {{-- End Slider --}}
    {{-- regulations --}}
    <section class="h-auto overflow-hidden ">
        <div class="hedaer d-flex justify-content-between align-items-center px-2 pb-4">
            <h2>
                <!-- <img class="" src="images/local_police.svg" alt=""> -->
                <i class="fa-solid fa-shield fa-lg text-info"></i>
                @lang('lang.regulations')
            </h2>
            <span class="px-2">
                <a class="fw-light fs-6 text-secondary" href="{{ route('website.regulations') }}">
                    <!-- <img class="" src="images/window.svg" alt=""> -->
                    <i class="fa-solid fa-window-restore fa-lg"></i>
                    @lang('lang.all')
                </a>
            </span>
        </div>
        <div class="swiper mySwiperslide slide-swiper">
            <div class="swiper-wrapper col-3 h-50 pb-5">
                @foreach ($regulations as $regulation)
                    <div class="swiper-slide shadow-custom rounded-4"
                        style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
    url('{{ $regulation->photo_original_path }}'); height: 24vh!important; background-size: cover;">
                        <a @if ($regulation->type == 1) href="{{ $regulation->attachment_pdf }}"
                        @else
                        href="{{ $regulation->link }}" @endif
                            target="_blank">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <span>
                                    <img class="img-fluid m-3 d-block"
                                        src="{{ $information_app->translate(App::getLocale())->logo_original_path }}"
                                        alt="{{ $regulation->title }}" width="100">
                                </span>
                                <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                                    <span class="py-3">
                                        {{ $regulation->title }}
                                    </span>
                                    <span class="py-3">
                                        <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                                    </span>
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <span class="d-lg-flex d-none align-items-center gap-4 justify-content-center py-3 swiper-btn">
                <div class="swiper-button-prev text-white"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next text-white"><i class="fa-sharp fa-solid fa-arrow-left"></i></div>
            </span>
        </div>
    </section>
    {{-- End regulations --}}

    <section class="overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-1.png);height: 81vh;">
        <div class="row gx-0 h-100 align-items-center">
            <div class="col-12 text-white fs-5">
                <h2 class="firstWordInfo d-inline">@lang('lang.our_goals')</h2>

                {{-- <p class="fw-bold text-break col-lg-10 col-sm-12 fs-5 p-2">
                    أولا:
                    <span class="fw-light">
                        وفق استراتيجية الأعمال لجمعية حماية المستثمرين الأفراد تم التركيز على هدفين استراتيجيين، تُبنى
                        على أساسه كل الأهداف الفرعية والتشغيلية
                    </span>
                </p>
                <p class="fw-bold text-break col-lg-10 col-sm-12 fs-5 p-2">
                    ثانياً:
                    <span class="fw-light">
                        وفق استراتيجية الأعمال لجمعية حماية المستثمرين الأفراد تم التركيز على هدفين استراتيجيين، تُبنى
                        على أساسه كل الأهداف الفرعية والتشغيلية
                    </span>
                </p> --}}

                <div class="content my-4">
                    {!! Str::limit($our_goals, 700, '...') !!}
                </div>


                <div class="row gx-0 w-100">
                    <a href="{{ route('website.our_goals') }}"
                        class="btn btn-primary rounded-4 px-lg-4 py-3 col-lg-2 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        @lang('lang.more')
                    </a>
                    <a href="{{ route('website.contact_us') }}"
                        class="btn btn-light rounded-4 px-lg-4 py-3 col-lg-2 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-solid fa-envelope text-dark"></i>
                        @lang('lang.contact_us')
                    </a>
                </div>


            </div>
        </div>
    </section>

    <section class="h-auto overflow-hidden bg-size-cover "
        style="background-image: url({{ asset('website') }}/images/section-8.png)">
        <div class="hedaer d-flex justify-content-between align-items-center px-2 pb-4">
            <h2>
                <!-- <img class="" src="images/privacy_tip.svg" alt=""> -->
                <i class="fa-solid fa-shield fa-lg text-info"></i>
                @lang('models/outreaches.plural')
            </h2>
            <span class="px-2">
                <a class="fw-light fs-6 text-secondary" href="#">
                    <!-- <img class="" src="images/window.svg" alt=""> -->
                    <i class="fa-solid fa-window-restore fa-lg"></i>
                    @lang('lang.all')
                </a>
            </span>
        </div>
        <div class="swiper mySwiperslide slide-swiper">
            <div class="swiper-wrapper pb-5">
                @forelse ($outreaches_app as $outreach)
                    {{-- <li> --}}
                    @if ($outreach->type == 1)
                        <div class="swiper-slide">
                            <div class="card-slider mx-2">
                                <div class="card-body d-flex align-items-center">
                                    <span class="mx-3">
                                        <i class="fa-solid fa-circle-info text-dark"></i>
                                    </span>
                                    <span class="">
                                        <p class="fw-bold fs-6 m-1">
                                            {{ $outreach->title ?? '' }}
                                        </p>
                                        <p class="fs-6 fw-lighter m-1">
                                            {{ $outreach->brief ?? '' }}
                                        </p>
                                        <a class="text-info fw-bold fs-6"
                                            href="{{ route('website.outreaches', $outreach->id) }}">
                                            @lang('lang.more')
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="swiper-slide">
                            <div class="card-slider mx-2">
                                <div class="card-body d-flex align-items-center">
                                    <span class="mx-3">
                                        <i class="fa-solid fa-circle-info text-dark"></i>
                                    </span>
                                    <span class="">
                                        <p class="fw-bold fs-6 m-1">
                                            {{ $outreach->title ?? '' }}
                                        </p>
                                        <p class="fs-6 fw-lighter m-1">
                                            {{ $outreach->brief ?? '' }}
                                        </p>
                                        <a class="text-info fw-bold fs-6" target="_blank"
                                            href="{{ $outreach->attachment_pdf ?? '' }}">
                                            @lang('lang.more')
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- </li> --}}
                @empty
                @endforelse
            </div>
            <span class="d-flex align-items-center gap-4 justify-content-center p-3 swiper-btn">
                <div class="swiper-button-prev text-white"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next text-white"><i class="fa-solid fa-arrow-left"></i></div>
            </span>
        </div>
    </section>

    <section class="overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-2.png)">
        <div class="row gx-0 h-100 align-items-center">
            <div class="col-12 text-whit text-white">
                <h2 class="firstWordInfo d-inline">@lang('lang.class_action_tutorial')</h2>
                <div class="content my-4">
                    {!! Str::limit($class_action_tutorial, 700, '...') !!}
                </div>

                <div class="row gx-0 w-100 pt-md-5 px-2">
                    <a href="{{ route('website.class_actions_tutorial') }}"
                        class="btn btn-primary rounded-4 px-lg-2 py-3 col-xl-2 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        @lang('lang.more')
                    </a>
                    <a href="{{ route('website.volunteer_request') }}"
                        class="btn btn-light rounded-4 px-lg-2 py-3 col-xl-2 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-solid fa-envelope"></i>
                        @lang('lang.volunteer_request')
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 px-lg-5 px-2 section-h overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-5.png);">
        <div class="row h-100 align-items-center gx-0">
            <div class="col-lg-8 col-sm-12 mx-lg-auto mx-2">
                <span class="w-75 px-5 text-wrap">
                    <h2 class="px-2 firstWordInfo">
                        @lang('lang.our_partners')
                    </h2>
                    <p class="px-2 py-3">
                        @lang('lang.partners_intro')
                    </p>
                    <div class="d-flex  align-items-center">
                        @forelse ($partners as $partner)
                            <span>
                                <a href="{{ $partner->link }}">
                                    <img class="w-100" src="{{ $partner->logo }}" alt="company-3">
                                </a>
                            </span>
                            <span class="vr mx-3"></span>

                        @empty
                        @endforelse
                        {{-- <span> <img class="w-100" src="{{ asset('website') }}/images/company-2.png" alt="company-2">
                        </span>
                        <span class="vr mx-3"></span>
                        <span> <img class="w-100" src="{{ asset('website') }}/images/company-1.png" alt="company-1">
                        </span> --}}
                    </div>

                </span>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 px-lg-5 px-2 section-h overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-3.png)">
        <div class="row gx-0 align-items-center h-100">
            <div class="col-12">
                <div class="text-center text-white">

                    <h2 class="firstWordInfo d-inline">@lang('lang.volunteering_and_training')</h2>

                    <p class="fs-6 fw-light py-3 mx-auto col-lg-6 col-sm-12">
                        @lang('lang.volunteer_request_intro_text')
                    </p>
                    <div class="row gx-0 w-100 px-2 justify-content-center">
                        <a href="{{ route('website.volunteer_request') }}"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            @lang('lang.volunteer_request')
                        </a>
                        <a href="{{ route('website.training_entities') }}"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            @lang('lang.cooperative_training_program_for_the_entities')
                        </a>
                        <a href="{{ route('website.training_individuals') }}"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            @lang('lang.cooperative_training_program_for_individuals')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('css')
    <style>
        .slide-content {
            margin: auto 0;
            padding: 0 10%;
            width: 100%;
        }
    </style>
@endsection
