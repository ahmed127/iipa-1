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

    <section class="h-auto overflow-hidden ">
        <div class="hedaer d-flex justify-content-between align-items-center px-2 pb-4">
            <h2>
                <!-- <img class="" src="images/local_police.svg" alt=""> -->
                <i class="fa-solid fa-shield fa-lg text-info"></i>
                اللوائح و الأنظمة
            </h2>
            <span class="px-2">
                <a class="fw-light fs-6 text-secondary" href="#">
                    <!-- <img class="" src="images/window.svg" alt=""> -->
                    <i class="fa-solid fa-window-restore fa-lg"></i>
                    عرض الكل
                </a>
            </span>
        </div>
        <div class="swiper mySwiperslide slide-swiper">
            <div class="swiper-wrapper col-3 h-50 pb-5">
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <span>
                            <img class="img-fluid m-3 d-block" src="{{ asset('website') }}/images/Logo-card.png"
                                alt="">
                        </span>
                        <span class="text-white p-3 pb-0 d-flex justify-content-between ">
                            <span class="py-3">
                                نظام السوق المالي
                            </span>
                            <span class="py-3">
                                <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide shadow-custom rounded-4"
                    style="background-image: linear-gradient(105.09deg, rgba(0, 17, 61, 0) 0%, #00113D 78.13%),
                    url({{ asset('website') }}/images/bg-card.png); height: 24vh!important; background-size: cover;">
                    <img class="img-fluid m-3 d-block" src="images/Logo-card.png" alt="">
                    <span class="float-start text-white p-3 pb-0 h-50 d-grid align-items-end">
                        نظام السوق المالي
                    </span>
                    <span class="float-end text-white p-3 pb-2 h-50 d-grid align-items-end">
                        <i class="fa-solid fa-file-pdf fa-lg fa-fade"></i>
                    </span>
                </div>
            </div>
            <span class="d-lg-flex d-none align-items-center gap-4 justify-content-center py-3 swiper-btn">
                <div class="swiper-button-prev text-white"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next text-white"><i class="fa-sharp fa-solid fa-arrow-left"></i></div>
            </span>
        </div>
    </section>

    <section class="overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-1.png);height: 81vh;">
        <div class="row gx-0 h-100 align-items-center">
            <div class="col-12 text-white fs-5">
                <h2 class="p-2">
                    <span class="text-info">
                        أهداف
                    </span>
                    الجمعية
                </h2>
                <p class="fw-bold text-break col-lg-10 col-sm-12 fs-5 p-2">
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
                </p>
                <div class="row gx-0 w-100">
                    <button type="button"
                        class="btn btn-primary rounded-4 px-lg-4 py-3 col-lg-2 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        المزيد
                    </button>
                    <button type="button"
                        class="btn btn-light rounded-4 px-lg-4 py-3 col-lg-2 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-solid fa-envelope text-dark"></i>
                        اتصل بنا
                    </button>
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
            {{-- <span class="px-2">
            <a class="fw-light fs-6 text-secondary" href="#">
                <!-- <img class="" src="images/window.svg" alt=""> -->
                <i class="fa-solid fa-window-restore fa-lg"></i>
                عرض الكل
            </a>
        </span> --}}
        </div>
        <div class="swiper mySwiperslide slide-swiper">
            <div class="swiper-wrapper pb-5">
                @forelse ($outreaches_app as $outreach)
                    <li>
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
                    </li>
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
                <h2 class="pb-4 px-2">
                    <span class="text-info">
                        كيف تقدم
                    </span>
                    دعوى جماعية
                </h2>
                <p class="fw-light text-break col-lg-7 col-sm-12 fs-6 p-2">
                    في إطار سعي هيئة السوق المالية “الهيئة” المستمر إلى تطوير السوق المالية في المملكة وحماية المستثمرين
                    فيها، وتعزيز آليات تعويض المستثمرين وتيسير إجراءات التقاضي للمتعاملين في السوق المالية بما يكفل حصول
                    المتضررين على تعويضاتهم بأسرع وقت وبأيسر آلية ممكنة، وبناء على نظام السوق المالية الصادر بالمرسوم
                    الملكي رقم (م/30) وتاريخ 1424/2/6هـ، أصدر مجلس الهيئة قراره المتضمن اعتماد تعديل لائحة إجراءات الفصل
                    في منازعات الأوراق المالية “اللائحة”، وذلك بإضافة باب تنظيم الدعوى الجماعية الذي تم نشره على موقعها
                    الإلكتروني
                </p>
                <div class="row gx-0 w-100 pt-md-5 px-2">
                    <button type="button"
                        class="btn btn-primary rounded-4 px-lg-2 py-3 col-xl-2 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        تعرف علي المزيد
                    </button>
                    <button type="button"
                        class="btn btn-light rounded-4 px-lg-2 py-3 col-xl-2 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                        <i class="fa-solid fa-envelope"></i>
                        طلب استشارة لدعوى جماعية
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 px-lg-5 px-2 section-h overflow-hidden bg-size-cover"
        style="background-image: url({{ asset('website') }}/images/section-5.png);">
        <div class="row h-100 align-items-center gx-0">
            <div class="col-lg-8 col-sm-12 mx-lg-auto mx-2">
                <span class="w-75 px-5 text-wrap">
                    <h2 class="px-2">
                        <span class="text-info">
                            شركاؤنا
                        </span>
                        في النجاح
                    </h2>
                    <p class="px-2 py-3">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                    </p>
                    <div class="d-flex  align-items-center">
                        <span> <img class="w-100" src="{{ asset('website') }}/images/company-3.png" alt="company-3">
                        </span>
                        <span class="vr mx-3"></span>
                        <span> <img class="w-100" src="{{ asset('website') }}/images/company-2.png" alt="company-2">
                        </span>
                        <span class="vr mx-3"></span>
                        <span> <img class="w-100" src="{{ asset('website') }}/images/company-1.png" alt="company-1">
                        </span>
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
                    <h2 class="fs-1 fw-bold pb-4">
                        <span class="text-info">
                            التطوع
                        </span>
                        و التدريب
                    </h2>
                    <p class="fs-6 fw-light py-3 mx-auto col-lg-6 col-sm-12">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                    </p>
                    <div class="row gx-0 w-100 px-2 justify-content-center">
                        <button type="button"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            طلب التطوع
                        </button>
                        <button type="button"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            التدريب التعاوني للجهات
                        </button>
                        <button type="button"
                            class="btn btn-light rounded-4 px-lg-2 py-3 col-lg-3 shadow-custom m-2 mx-lg-2 mx-0">
                            <i class="fa-solid fa-envelope"></i>
                            التدريب التعاوني للأفراد
                        </button>
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
