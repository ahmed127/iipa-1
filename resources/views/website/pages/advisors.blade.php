@extends('website.layout.app')

@section('title', 'Advisors')

@section('content')
    @include('website.layout._header_page', [
        'title' => 'Your legal advisor',
        'pageName' => 'Your Adviors',
    ])
    <section class="bg-content-custom">
        <div class="container-fluid p-0">
            @include('website.inc._error')
            @include('flash::message')
            <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
                <div class="row gx-0 p-3">
                    <div class="col-12 text-center py-3">

                        <h3 class="firstWordInfo d-inline">@lang('lang.advisors_intro_heading')</h3>
                        <p class="mt-2 col-8 m-auto">
                            @lang('lang.advisors_intro_text')
                        </p>
                    </div>

                    {!! Form::open(['route' => 'website.advisors_store', 'class' => 'd-flex row', 'files' => true]) !!}

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="name" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.name') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('name', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'name',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="email" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.email') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('email', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'email',
                                'placeholder' => 'name@example.com',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="email_confirmation" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.email_confirmation') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('email_confirmation', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'email_confirmation',
                                'placeholder' => 'name@example.com',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="phone" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.phone') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group rounded-4 shadow-sm">
                            {!! Form::text('phone', null, [
                                'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr',
                            ]) !!}
                            <label for="country_code">
                                {!! Form::select('country_code', $countryCodes, null, [
                                    'class' => 'border border-end-0 py-3 form-select bg-primary text-white direction-span-rtl direction-span-ltr',
                                    'placeholder' => '',
                                ]) !!}
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="country_id" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.country') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('country_id', $countries, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.country'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="job_id" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.job') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('job_id', $jobs, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.job'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="consultant_type_id" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.consultant_type') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('consultant_type_id', $consultantTypes, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.consultant_type'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="type" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.type') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('type', $types, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.type'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="fav_lang" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.fav_lang') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('fav_lang', $favLangs, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.fav_lang'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="gender" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.gender') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::select('gender', $genders, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.gender'),
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="date_of_birth" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.date_of_birth') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::date('date_of_birth', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="description" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.description') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('description', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        <label for="nationality" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.nationality') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::text('nationality', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-12 px-2 mb-3 fs-6">
                        <label for="attachment_letter" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.attachment_letter'):
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            {!! Form::file('attachment_letter', [
                                'class' => 'form-control shadow-sm',
                                'id' => 'attachment_letter',
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
