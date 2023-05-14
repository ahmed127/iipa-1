@extends('website.layout.app')

@section('title', __('lang.your_legal_advisor'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.your_legal_advisor'),
        'pageName' => __('lang.your_legal_advisor'),
        'heroImage' => asset('website/images/advisor.jpeg'),
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

                    <!-- Name Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'name',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.name') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('name', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'name',
                            ]) !!}
                        </div>
                    </div>

                    <!-- email Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'email',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.email') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('email', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'email',
                                'placeholder' => 'name@example.com',
                            ]) !!}
                        </div>
                    </div>

                    <!-- email_confirmation Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'email_confirmation',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.email_confirmation') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('email_confirmation', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                                'id' => 'email_confirmation',
                                'placeholder' => 'name@example.com',
                            ]) !!}
                        </div>
                    </div>

                    <!-- phone Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'phone',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.phone') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group rounded-4 shadow-sm">
                            {!! Form::text('phone', null, [
                                'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl
                                                                                direction-input-ltr',
                            ]) !!}
                            <label for="country_code">
                                {!! Form::select('country_code', $countryCodes, null, [
                                    'class' => 'border border-end-0 py-3 form-select bg-primary text-white direction-span-rtl
                                                                                            direction-span-ltr',
                                    'placeholder' => '',
                                ]) !!}
                            </label>
                        </div>
                    </div>

                    <!-- country_id Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'country_id',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.country') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::select('country_id', $countries, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.country'),
                            ]) !!}
                        </div>
                    </div>

                    <!-- job_id Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'job_id',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.job') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::select('job_id', $jobs, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.job'),
                            ]) !!}
                        </div>
                    </div>

                    <!-- consultant_type_id Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'consultant_type_id',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.consultant_type') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::select('consultant_type_id', $consultantTypes, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.consultant_type'),
                            ]) !!}
                        </div>
                    </div>

                    <!-- fav_lang Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'fav_lang',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.fav_lang') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::select('fav_lang', $favLangs, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.fav_lang'),
                            ]) !!}
                        </div>
                    </div>

                    <!-- gender Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'gender',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.gender') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::select('gender', $genders, null, [
                                'class' => 'border py-3 form-select rounded-4',
                                'placeholder' => __('lang.select') . ' ' . __('lang.gender'),
                            ]) !!}
                        </div>
                    </div>

                    <!-- date_of_birth Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'date_of_birth',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.date_of_birth') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::date('date_of_birth', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <!-- description Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'description',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.description') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('description', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <!-- nationality Field -->
                    <div class="col-lg-4 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'nationality',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.nationality') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
                        <div class="input-group">
                            {!! Form::text('nationality', null, [
                                'class' => 'form-control border text-start py-3 shadow-sm rounded-4',
                            ]) !!}
                        </div>
                    </div>

                    <!-- attachment_letter Field -->
                    <div class="col-lg-12 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                        {!! Html::decode(
                            Form::label(
                                'attachment_letter',
                                '<i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i> ' .
                                    __('lang.attachment_letter') .
                                    ':' .
                                    '<span class="text-danger">*</span>',
                                ['class' => 'form-label px-1'],
                            ),
                        ) !!}
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
