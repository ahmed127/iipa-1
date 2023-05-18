@extends('website.layout.app')

@section('title', __('lang.packages'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.packages'),
        'pageName' => __('lang.packages'),
    ])

    <div class="bg-content-memberships">
        <div class="row gx-0 p-lg-5 p-3">

            @forelse ($packages as $package)
                <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                    <div class="card h-100">
                        <div class="card-header text-center bg-primary text-white p-3">
                            <p class="m-0 fw-bold fs-5">
                                {{ $package->name }}
                            </p>
                            <span class="fs-6 fw-lighter text-white-50">
                                {{ $package->note }}
                            </span>
                        </div>
                        <div class="card-header text-center bg-info text-white p-3">
                            <p class="m-0 fw-bold">
                                @for ($i = 0; $i < 3; $i++)
                                    @if ($package->fees[$i]['amount'])
                                        <span
                                            class="fs-6 fw-lighter text-white-50">{{ $package->fees[$i]['name'][app()->getLocale()] }}
                                        </span>
                                        {{ $package->fees[$i]['amount'] }}
                                        @lang('lang.currency') <br>
                                    @endif
                                @endfor
                            </p>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <span>
                                {!! $package->description !!}
                            </span>
                            <a href="{{ route('website.contact_us') }}" type="button"
                                class="btn btn-primary rounded-4 px-5 py-2 shadow-custom col-12">
                                <i class="fa-solid fa-phone"></i>
                                @lang('lang.contact_us')
                            </a>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse

        </div>
    </div>

@endsection
