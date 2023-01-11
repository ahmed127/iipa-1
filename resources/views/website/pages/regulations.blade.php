@extends('website.layout.app')

@section('title', __('lang.regulations'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.regulations'),
        'pageName' => __('lang.regulations'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    @forelse ($regulations as $regulation)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a @if ($regulation->type == 1) href="{{ $regulation->attachment_pdf }}"
                        @else
                        href="{{ $regulation->link }}" @endif
                                target="_blank">
                                <div class="card m-3 rounded-4 shadow-custom p-0">
                                    <img src="{{ $regulation->photo_original_path }}" class="w-100"
                                        style="border-radius: 16px 16px 0 0;" alt="...">
                                    <div class=" text-white  text-center p-3"
                                        style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                        <p class="fw-bold fs-5 mb-1">
                                            {{ $regulation->title }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>

                <div class="pagination-container d-flex">
                    {{ $regulations->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
