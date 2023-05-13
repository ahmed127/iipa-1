@extends('website.layout.app')

@section('title', __('lang.general_assembly_members'))

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.general_assembly_members'),
        'pageName' => __('lang.general_assembly_members'),
    ])

    <section class="bg-content-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-0">
                <div class="row gx-0 p-5">

                    @forelse ($generals as $general)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card m-3 rounded-4 shadow-custom p-0">
                                <img src="{{ $general->photo }}" class="px-5"
                                    style="border-radius: 16px 16px 0 0; max-height: 163px;" alt="...">
                                <div class=" text-white  text-center p-3"
                                    style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                    <p class="fw-lighter fs-6 mb-1">{{ $general->nickname }}</p>
                                    <p class="fw-bold fs-5 mb-1">
                                        {{ $general->name }}
                                    </p>
                                    <p class="fw-lighter fs-6 mb-1">{{ $general->job_title }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <img src="{{ asset('website') }}/images/img-Administration.png" class="px-5"
                            style="border-radius: 16px 16px 0 0;" alt="...">
                        <div class=" text-white  text-center p-3"
                            style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                            <p class="fw-lighter fs-6 mb-1">سعادة المحامي الأستاذ</p>
                            <p class="fw-bold fs-5 mb-1">
                                محمد أحمد الضبعان
                            </p>
                            <p class="fw-lighter fs-6 mb-1">رئيس مجلس الإدارة</p>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
