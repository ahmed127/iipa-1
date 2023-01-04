@extends('website.layout.app')

@section('title', 'Media Center')

@section('content')
    <div class="row gx-0"
        style="background-image: url('{{ $blog->photo_cover_original_path }}'); background-size: cover; height: 73vh;">
        <div class="col-12 text-white my-auto px-3 px-lg-5">
            <p class="fw-bold m-0">
                <i class="fa-regular fa-calendar-days text-info"></i>
                {{ $blog->created_at->diffForHumans() }}
            </p>
            <h1 class="py-2 col-lg-6 col-md-8 col-sm-12">
                {{ $blog->title }}
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <i class="fa-solid fa-link px-2 py-1"></i>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route('website.home') }}">@lang('lang.home')</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route('website.media_center_all') }}">@lang('lang.media_center')</a>
                    </li>
                    <li class="breadcrumb-item px-0 text-white-50" aria-current="page">
                        {{ $blog->title }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="bg-content-custom p-custom">
        <div class="row gx-0">
            <div class="col-12">
                {!! $blog->description !!}
            </div>
        </div>
    </section>
@endsection
