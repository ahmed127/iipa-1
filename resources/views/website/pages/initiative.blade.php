@extends('website.layout.app')

@section('title', 'Initiatives')

@section('content')
    @include('website.layout._header_page', [
        'title' => 'Initiatives',
        'pageName' => 'Initiatives',
        'heroImage' => $initiative->photo,
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    <h3 class="mb-5">{{ $initiative->name }}</h3>
                    {!! $initiative->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
