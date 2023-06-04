@extends('website.layout.app')

@section('title', __('lang.board_of_directors'))

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.board_of_directors'),
        'pageName' => __('lang.board_of_directors'),
        'heroImage' => asset('website/images/directors.jpg'),
    ])

    <section class="bg-content-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-0">
                <div class="row gx-0 p-5">

                    @forelse ($directors as $director)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card m-3 rounded-4 shadow-custom p-0">
                                @if ($director->photo)
                                    <img src="{{ $director->photo }}" class="px-5"
                                        style="border-radius: 16px 16px 0 0; max-height: 163px;" alt="...">
                                @endif
                                <div class=" text-white  text-center p-3"
                                    style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                    <p class="fw-lighter fs-6 mb-1">{{ $director->nickname }}</p>
                                    <p class="fw-bold fs-5 mb-1">
                                        {{ $director->name }}
                                    </p>
                                    <p class="fw-lighter fs-6 mb-1">{{ $director->job_title }}</p>
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
