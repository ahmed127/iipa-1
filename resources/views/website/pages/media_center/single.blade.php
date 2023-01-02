@extends('website.layout.app')

@section('title', 'Media Center')

@section('content')
<div class="row gx-0"
    style="background-image: url({{ asset('website') }}/images/bg-association-news.png); background-size: cover; height: 73vh;">
    <div class="col-12 text-white my-auto px-3 px-lg-5">
        <p class="fw-bold m-0">
            <i class="fa-regular fa-calendar-days text-info"></i>
            الرياض 23 مايو 2022
        </p>
        <h1 class="py-2 col-lg-6 col-md-8 col-sm-12">
            جمعية حماية المستثمرين الأفراد توقع مذكرة تفاهم مع الأكاديمية المالية
        </h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb d-flex align-items-center">
                <i class="fa-solid fa-link px-2"></i>
                <li class="breadcrumb-item pb-1"><a class="text-white" href="/index.html">الرئيسية</a></li>
                <li class="breadcrumb-item pb-1 px-0"><a class="text-white" href="#">المركز الاعلامي</a></li>
                <li class="breadcrumb-item pb-1 px-0 text-white-50" aria-current="page">اخبار الجمعيه</li>
            </ul>
        </nav>
    </div>
</div>
<section class="bg-content-custom p-custom">
    <div class="row gx-0">
        <div class="col-12">
            <p class="text-lg-start text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae voluptate aspernatur
                facere totam cum perspiciatis, fugit necessitatibus dolores rem consequatur facilis iure ipsum
                ratione quaerat esse ducimus consequuntur quasi nisi. Rerum fugit unde suscipit voluptatibus
                culpa consequuntur temporibus distinctio iure sequi perspiciatis necessitatibus ipsum
                asperiores, amet similique assumenda facilis.
            </p>
            <p class="fw-bold m-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga earum adipisci, asperiores quam
                recusandae atque.
            </p>
            <ol>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ol>
            <p class="fw-bold m-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga earum adipisci, asperiores quam
                recusandae atque.
            </p>
            <ol class="pb-4">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ol>
        </div>
    </div>
</section>
@endsection
