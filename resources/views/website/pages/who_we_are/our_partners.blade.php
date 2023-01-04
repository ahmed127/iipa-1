@extends('website.layout.app')

@section('title', 'Our Partners')

@section('content')
    @include('website.layout._header_page', [
        'title' => 'Our Partners',
        'pageName' => 'Our Partners',
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0 d-flex">

            @forelse ($partners as $partner)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ $partner->logo }}" class=" card-img-top" style="border-radius: 16px 16px 0 0;"
                                alt="{{ $partner->link }}" width="300" height="300">
                        </a>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
    </section>
@endsection
