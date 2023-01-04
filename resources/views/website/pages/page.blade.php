@extends('website.layout.app')

@section('title', $page->name)

@section('meta')
<meta name="title" content="{{ $page->meta_title??'' }}">
<meta name="description" content="{{ $page->meta_description??'' }}">
<meta name="keywords" content="{{ $page->meta_keywords??'' }}">
@endsection

@section('content')

@include('website.layout._header_page', [
'title' => $page->title,
'pageName' => $page->name,
'heroImage' => $page->photo,
])


<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">

        <div class="bg-content-complaint">
            <div class="row gx-0 p-5">

                <h2 class="firstWordInfo col-lg-6 col-sm-12">
                    {{$page->title??''}}
                </h2>

                @if ($page->description)
                <div class="col-12 text-lg-start text-center my-3">
                    {!! $page->description??'' !!}
                </div>
                @endif

                @if ($page->image)
                <div class="col-12   my-3">
                    <img src="{{ $page->image??'' }}" alt="{{ $page->name }}" width="100%">
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
