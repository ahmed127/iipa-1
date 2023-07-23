@extends('website.layout.app')

@section('title', __('lang.recruitment'))

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.recruitment'),
        'pageName' => __('lang.recruitment'),
        'heroImage' => asset('website/images/recruitment.jpg'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            @include('website.inc._error')
            @include('flash::message')
            <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
                <div class="row gx-0 p-3">
                    <div class="col-12 text-center py-3">

                        <h3 class="firstWordInfo d-inline">@lang('lang.recruitment_intro_heading')</h3>
                        {{-- <p class="my-4 col-8 m-auto">
                        @lang('lang.recruitment_intro_text')
                    </p> --}}
                    </div>

                    {!! Form::open(['route' => 'website.recruitment_store', 'class' => 'd-flex row', 'files' => true]) !!}

                    <!-- Full Name Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'full_name',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('models/recruitments.fields.full_name') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('full_name', auth()->check() ? auth()->user()->full_name : null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'minlength' => 3,
                                'maxlength' => 191,
                                'readonly' => auth()->check(),
                            ]) !!}
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'email',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('models/recruitments.fields.email') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('email', auth()->check() ? auth()->user()->email : null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'placeholder' => 'name@example.com',
                                'readonly' => auth()->check(),
                            ]) !!}
                        </div>
                    </div>

                    <!-- Phone Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'phone',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('models/recruitments.fields.phone') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group rounded-4 shadow-sm">
                            {!! Form::text('phone', auth()->check() ? auth()->user()->phone : null, [
                                'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr',
                                'readonly' => auth()->check(),
                            ]) !!}
                            <label for="country_code">
                                {!! Form::select('country_code', $countryCodes, auth()->check() ? auth()->user()->country_code : null, [
                                    'class' => 'border border-end-0 py-3 form-select bg-primary text-white direction-span-rtl direction-span-ltr',
                                    'placeholder' => '',
                                    'readonly' => auth()->check(),
                                ]) !!}
                            </label>
                        </div>
                    </div>

                    <div class="col-12 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'attachment_cv',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('models/recruitments.fields.attachment_cv') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::file('attachment_cv', [
                                'class' => 'form-control shadow-sm',
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
