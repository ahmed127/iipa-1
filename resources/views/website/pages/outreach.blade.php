@extends('website.layout.app')

@section('title', $outreach->name)

@section('meta')
    <meta name="title" content="{{ $outreach->meta_title ?? '' }}">
    <meta name="description" content="{{ $outreach->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $outreach->meta_keywords ?? '' }}">
@endsection

@section('content')
    @include('website.layout._header_page', [
        'title' => $outreach->title,
        'pageName' => $outreach->name,
        'heroImage' => $outreach->photo,
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">

            <div class="bg-content-complaint">
                <div class="row gx-0 p-5">

                    <h2 class="firstWordInfo col-lg-6 col-sm-12">
                        {{ $outreach->title ?? '' }}
                    </h2>
                    {{-- <span class="col-lg-6 col-sm-12 text-lg-end text-center">
                    <a href="{{ $outreach->btn_link??'' }}" target="_blank"
                        class="btn btn-primary rounded-4 px-lg-5 px-3 py-2 w-auto shadow-custom">
                        {!! $outreach->btn_name??'' !!}
                    </a>
                </span> --}}
                    <div class="col-12 text-lg-start text-center my-3">
                        {!! $outreach->description ?? '' !!}
                        <span class="col-lg-6 col-sm-12 text-lg-start text-center">
                            <a href="{{ $outreach->btn_link ?? '' }}" target="_blank"
                                class="btn btn-primary rounded-4 px-lg-5 px-3 py-2 w-auto my-5 shadow-custom">
                                {!! $outreach->btn_name ?? '' !!}
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
