@extends('website.layout.app')

@section('title', __('lang.financials'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.financials'),
        'pageName' => __('lang.financials'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5">
                    @forelse ($financials as $financial)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a @if ($financial->type == 1) href="{{ $financial->attachment_pdf }}"
                        @else
                        href="{{ $financial->link }}" @endif
                                target="_blank">
                                <div class="card m-3 rounded-4 shadow-custom p-0">
                                    <img src="{{ $financial->photo_original_path }}" class="w-100"
                                        style="border-radius: 16px 16px 0 0;" alt="...">
                                    <div class=" text-white  text-center p-3"
                                        style="background-color: #00113D;border-radius: 0 0 16px 16px;">
                                        <p class="fw-bold fs-5 mb-1">
                                            {{ $financial->title }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>

                <div class="pagination-container d-flex">
                    {{ $financials->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
