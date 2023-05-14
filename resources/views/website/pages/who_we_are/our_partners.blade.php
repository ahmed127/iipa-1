@extends('website.layout.app')

@section('title', __('lang.our_partners'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.our_partners'),
        'pageName' => __('lang.our_partners'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0 d-flex row">

            @forelse ($partners as $partner)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0" style="height: 300px">
                        <a href="{{ $partner->link }}" target="_blank" class="m-auto">
                            <img src="{{ $partner->logo }}" class=" card-img-top" style="border-radius: 16px 16px 0 0;"
                                alt="{{ $partner->link }}">
                        </a>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
    </section>
@endsection
