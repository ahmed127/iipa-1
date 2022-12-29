@extends('website.layout.app')

@section('title', 'Media Center')

@section('content')
<section class=" ">
    <div class="container-fluid p-0">
        <div class="header-page row gx-0">
            <div class="col-10 text-white d-flex flex-column justify-content-center px-5">
                <h1 class="py-2 h3">
                    <span class="text-info">
                        اخبار
                    </span>
                    الجمعية
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex align-items-center">
                        <i class="fa-solid fa-link px-2"></i>
                        <li class="breadcrumb-item pb-1"><a class="text-white" href="/index.html">الرئيسية</a></li>
                        <li class="breadcrumb-item pb-1 px-0"><a class="text-white" href="#">المركز الاعلامي</a></li>
                        <li class="breadcrumb-item pb-1 px-0 text-white-50" aria-current="page">اخبار الجمعيه</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bg-content-custom p-0">
            <div class="row gx-0 p-5">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single',1) }}">

                            <img src="{{ asset('website') }}/images/img-news.png" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fw-lighter text-truncate">Some quick example text to build on the
                                    card
                                    title
                                    and make up the bulk of the card's content.</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    الرياض 23 مايو 2022
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
