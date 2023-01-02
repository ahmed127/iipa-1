@extends('website.layout.app')

@section('title', 'Initiatives')

@section('content')
    @include('website.layout._header_page', [
        'title' => 'Initiatives',
        'pageName' => 'Initiatives',
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    @forelse ($initiatives as $initiative)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a href="{{ route('website.initiative', $initiative->id) }}">
                                <div class="card m-3 rounded-4 shadow-custom p-0">
                                    <img src="{{ $initiative->photo }}" class="p-5" style="border-radius: 16px 16px 0 0;"
                                        alt="...">
                                    <div class=" text-white  text-center p-3"
                                        style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                        <p class="fw-bold fs-5 mb-1">
                                            {{ $initiative->name }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="pagination-container d-flex">
                    {{ $initiatives->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
