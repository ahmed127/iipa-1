@extends('website.layout.app')

@section('title', __('lang.volunteer_request'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.volunteer_request'),
        'pageName' => __('lang.volunteer_request'),
        'heroImage' => asset('website/images/volunteer_request.jpg'),
    ])

    <section class="bg-content-custom">
        <div class="container-fluid p-0">
            @include('website.inc._error')
            @include('flash::message')
            <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
                <div class="row gx-0 p-3">
                    <div class="col-12 text-center py-3">

                        <h3 class="firstWordInfo d-inline">@lang('lang.volunteer_request_intro_heading')</h3>
                        {{-- <p class="mt-2 col-8 m-auto">
                        @lang('lang.volunteer_request_intro_text')
                    </p> --}}
                    </div>
                    {!! Form::open(['route' => 'website.volunteer_request_store', 'class' => 'd-flex row', 'files' => true]) !!}
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="volunteer_type_id" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.volunteer_type_id') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('volunteer_type_id', $volunteerTypes, null, [
                                'class' => 'form-control form-select border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="full_name" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.full_name') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('full_name', auth()->check() ? auth()->user()->full_name : null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'full_name',
                                'readonly' => auth()->check(),
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="id_no" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.id_no') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('id_no', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'id_no',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="email" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.email') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('email', auth()->check() ? auth()->user()->email : null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'email',
                                'placeholder' => 'name@example.com',
                                'readonly' => auth()->check(),
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="phone" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.phone') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group rounded-4 shadow-sm">
                            {!! Form::text('phone', auth()->check() ? auth()->user()->phone : null, [
                                'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr',
                                'id' => 'phone',
                                'readonly' => auth()->check(),
                            ]) !!}
                            <label for="country_code">
                                {!! Form::select('country_code', $countryCodes, auth()->check() ? auth()->user()->country_code : null, [
                                    'class' => 'border border-end-0 py-3 form-select bg-primary text-white direction-span-rtl direction-span-ltr',
                                    'readonly' => auth()->check(),
                                ]) !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="message" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.attachment_cv'):
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::file('attachment_cv', [
                                'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl
                                                                                                            direction-input-ltr',
                                'id' => 'attachment_cv',
                            ]) !!}
                        </div>
                    </div>
                    <div class="row justify-content-center gx-0 pb-3">
                        {!! Form::button('<i class="fa-solid fa-circle-check"></i>' . ' ' . __('lang.send'), [
                            'type' => 'submit',
                            'class' => 'btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 shadow-custom m-2',
                        ]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection
