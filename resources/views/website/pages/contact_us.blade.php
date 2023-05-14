@extends('website.layout.app')

@section('title', __('lang.contact_us'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.contact_us'),
        'pageName' => __('lang.contact_us'),
    ])
    <div class="">
        <div class="container-fluid p-0">
            @include('website.inc._error')
            @include('flash::message')
            <div class="shadow-custom rounded-4 d-lg-block d-none rounded-top bg-white py-3 px-4 position-absolute w-25"
                style="right: 72%;">
                <p class="fw-bold ">
                    @lang('lang.contact_us') :
                </p>
                <p class="fw-bold h6 d-flex">
                    <i class="fa-solid fa-location-dot text-primary fa-2xl pt-3"></i>
                    <span class="px-2 w-75">
                        <span class="fw-normal">
                            @lang('lang.our_office'):
                        </span>
                        {{ $information_app->address ?? '' }}
                    </span>
                </p>
                <p class="fw-bold">
                    <i class="fa-solid fa-envelope-open text-primary fa-xl"></i>
                    <span class="fw-lighter px-1">
                        @lang('lang.email'):
                    </span>
                    {{ $information_app->email ?? '' }}
                </p>
                <p class="fw-bold">
                    <i class="fa-solid fa-phone text-primary fa-xl"></i>
                    <span class="fw-lighter px-1">
                        @lang('lang.contact_phone') :
                    </span>
                    {{ $information_app->phone ?? '' }}
                </p>
                <p class="d-flex justify-content-between pt-2">

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
                </p>
            </div>
            {{-- 24.70437609251772, 46.66163837301233 --}}
            {{-- 24.704298117352025, 46.66155254232923 --}}
            {{-- 24.703927734648282, 46.66163837301233 --}}
            {{-- < iframe src="//maps.google.com/maps?q=latitude,longitude&z=zoom&output=embed"> --}}
            {{--
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.6695398994475!2d46.66376298490263!3d24.703884157598882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1de8adbf2e39%3A0x1942f1da23f026d6!2z2KzZhdi52YrYqSDYrdmF2KfZitipINin2YTZhdiz2KrYq9mF2LHZitmGINin2YTYo9mB2LHYp9iv!5e0!3m2!1sar!2seg!4v1671367662111!5m2!1sar!2seg"
            --}}
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb={{ $information_app->lat }},{{ $information_app->long }}&hl=es&z=14&amp;output=embed"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe> --}}
            {{-- <iframe
                src="//maps.google.com/maps?q={{ $information_app->lat }},{{ $information_app->long }}&z=zoom&output=embed"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            @php
                $source = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.6695398994475!2d46.66376298490263!3d24.703884157598882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1de8adbf2e39%3A0x1942f1da23f026d6!2z2KzZhdi52YrYqSDYrdmF2KfZitipINin2YTZhdiz2KrYq9mF2LHZitmGINin2YTYo9mB2LHYp9iv!5e0!3m2!1sar!2seg!4v1671367662111!5m2!1sar!2seg';
                // $source =
                "https://www.google.com/maps/embed?pb=$information_app->location_lat,$information_app->location_long&z=zoom&output=embed";
            @endphp
            {{-- {{ dd($source) }} --}}
            <iframe src={{ $source }} width="100%" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="bg-content-custom p-custom">
                <div class="shadow-custom rounded-4 bg-white">
                    <div class="row gx-0 p-3">
                        <div class="col-12 text-center py-2">
                            <h3 class="firstWordInfo d-inline">@lang('lang.contact_us_intro_heading')</h3>
                            <p>@lang('lang.contact_us_intro_text')</p>
                        </div>
                        {!! Form::open(['route' => 'website.contact_us_store', 'class' => 'd-flex row']) !!}
                        <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                            <label for="fullName" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.full_name') :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                {!! Form::text('name', null, [
                                    'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                    'id' => 'fullName',
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                            <label for="email" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.email') :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                {!! Form::text('email', null, [
                                    'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                    'id' => 'email',
                                    'placeholder' => 'name@example.com',
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                            <label for="phone" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.phone') :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group rounded-4 shadow-sm">
                                {!! Form::text('phone', null, [
                                    'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl
                                                                                                direction-input-ltr',
                                    'id' => 'phone',
                                ]) !!}
                                <label for="country_code">
                                    {!! Form::select('country_code', $countryCodes, null, [
                                        'class' => 'border border-end-0 py-3 form-select bg-primary text-white
                                                                                                            direction-span-rtl direction-span-ltr',
                                    ]) !!}
                                </label>
                            </div>
                        </div>
                        <div class="col-12 px-2 mb-3 fs-6">
                            <label for="message" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.message'):
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                {!! Form::textarea('message', null, [
                                    'class' => 'form-control border py-3 rounded-4 shadow-sm',
                                    'id' => 'message',
                                ]) !!}
                            </div>
                        </div>
                        <div class="row justify-content-center gx-0 pb-3">
                            {!! Form::button('<i class="fa-solid fa-circle-check"></i>' . ' ' . __('lang.send'), [
                                'type' => 'submit',
                                'class' => 'btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 shadow-custom m-2',
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
