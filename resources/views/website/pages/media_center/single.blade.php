@extends('website.layout.app')

@section('title', 'Media Center')

@section('content')
    <div class="row gx-0"
        style="background-image: url('{{ $blog->photo_cover_original_path }}'); background-size: cover; height: 73vh;">
    </div>
    <p class="fw-bold m-3">
        <i class="fa-regular fa-calendar-days text-info"></i>
        {{ $blog->date }}
    </p>
    <section class="bg-content-custom p-custom">
        <div class="row gx-0">
            <div class="col-12">
                {!! $blog->description !!}
            </div>
        </div>
    </section>
@endsection
