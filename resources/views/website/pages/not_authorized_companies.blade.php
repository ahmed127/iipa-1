@extends('website.layout.app')

@section('title', 'Not Authorized Companies')

@section('content')
    @include('website.layout._header_page', [
        'title' => 'The Not Authorized Companies',
        'pageName' => 'The Not Authorized Companies',
    ])

    {{-- <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-custom p-custom p-0">
                <div class="row gx-0 p-5"> --}}

    <div class="bg-light shadow-custom">
        <div class="container-fluid">
            <div class="row p-3 align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <h5 class="m-0">
                        @lang('lang.ithmaar_company')
                    </h5>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p class="m-0 text-success fw-lighter fs-6">
                        @lang('lang.list_updated_weekly')
                    </p>
                </div>
                <div class="col-lg-2 col-sm-12">
                    {!! Form::open(['route' => 'website.not_authorized_companies_search']) !!}
                    <div class="input-group">

                        {!! Form::text('search_term', request('search_term') ?? '', [
                            'class' => 'form-control border border-end-0 direction-input-rtl direction-input-ltr',
                            'placeholder' => __('lang.search'),
                        ]) !!}

                        {!! Form::button('<i class="fa-solid fa-magnifying-glass fa-sm text-primary"></i>', [
                            'type' => 'submit',
                            'class' => 'input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr',
                        ]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container p-lg-5 p-3">
        <div class="shadow-custom bg-white h-100">
            <div style="overflow-x: scroll;">
                <table class="table table-bordered table-hover m-0">
                    <thead class="text-white" style="background: #00113D">
                        <tr class="py-2">
                            <th>​اسم الشركة</th>
                            <th>الموقع</th>
                            <th>مقر الشركة​</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <th>{{ $company->name }}</th>
                                <td>{{ $company->website }}</td>
                                <td>{{ $company->location }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="pagination-container d-flex">
        {{ $companies->links() }}
    </div>

@endsection
