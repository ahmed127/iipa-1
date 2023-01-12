@extends('website.layout.app')

@section('title', __('models/initiatives.plural'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('models/initiatives.plural'),
        'pageName' => __('models/initiatives.plural'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    @forelse ($initiatives as $initiative)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            @if ($initiative->type == 1)
                                <a href="{{ route('website.initiative', $initiative->id) }}">
                                    <div class="card m-3 rounded-4 shadow-custom p-0">
                                        <div class="p-5"
                                            style="background:url('{{ $initiative->photo }}');background-repeat: no-repeat;background-size: cover; border-radius: 16px 16px 0 0;">
                                        </div>
                                        <div class="text-white  text-center p-3"
                                            style="background-color: #00113D;border-radius: 0 0 16px 16px;height:160px">
                                            <p class="fw-bold fs-5 mb-1">
                                                {{ $initiative->title ?? '' }}
                                            </p>
                                            <p class="mb-1">
                                                {{ $initiative->brief ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a href="{{ $initiative->attachment_pdf }}" target="_blank">
                                    <div class="card m-3 rounded-4 shadow-custom p-0">
                                        <div class="p-5"
                                            style="background:url('{{ $initiative->photo }}');background-repeat: no-repeat;background-size: cover;border-radius: 16px 16px 0 0;">

                                        </div>
                                        <div class="text-white  text-center p-3"
                                            style="background-color: #00113D;border-radius: 0 0 16px 16px;height:160px">
                                            <p class="fw-bold fs-5 mb-1">
                                                {{ $initiative->title ?? '' }}
                                            </p>
                                            <p class="mb-1">
                                                {{ $initiative->brief ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endif
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
