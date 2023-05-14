@extends('website.layout.app')

@section('title', __('lang.policies'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.policies'),
        'pageName' => __('lang.policies'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    @forelse ($policies as $policy)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a @if ($policy->type == 1) href="{{ $policy->attachment_pdf }}"
                        @else
                        href="{{ $policy->link }}" @endif
                                target="_blank">
                                <div class="card m-3 rounded-4 shadow-custom p-0">
                                    <img src="{{ $policy->photo_original_path }}" class="w-100"
                                        style="border-radius: 16px 16px 0 0;" alt="...">
                                    <div class=" text-white  text-center p-3"
                                        style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                        <p class="fw-bold fs-5 mb-1">
                                            {{ $policy->title }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>

                <div class="pagination-container d-flex">
                    {{ $policies->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
