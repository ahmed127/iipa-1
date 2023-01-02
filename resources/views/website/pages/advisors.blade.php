@extends('website.layout.app')

@section('title', 'Advisors')

@section('content')
@include('website.layout._header_page', [
'title' => 'Your legal advisor',
'pageName' => 'Your Adviors',
])
<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
            <div class="row gx-0 p-3">
                <div class="col-12 text-center py-3">

                    <h3 class="firstWordInfo d-inline">Please complete the registration details below</h3>
                    <p class="mt-2 col-8 m-auto">
                        This service aims to provide advice and legal assistance to members and individual
                        investors with regard to filing
                        complaints, filing class action lawsuits, and hiring lawyers.
                    </p>
                </div>
                <div class="col-lg-2 col-md-12 p-1">
                    <label class="form-label px-1" for="nickName">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.nick_name') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <select class="border rounded-4 py-3 px-1 form-select fw-bold" id="nickName" name="nickName">
                            <option value="1">السيد/</option>
                            <option value="2">السيدة/</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 p-1">
                    <label for="fullName" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.full_name') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control border text-start py-3 shadow-sm rounded-4" id="fullName"
                            placeholder="@lang('lang.full_name')">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 p-1">
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
                <div class="col-lg-4 col-sm-12 p-1">
                    <label for="phone" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.phone') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group rounded-4 shadow-sm">
                        <input type="text" name="phone"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="phone">
                        <label for="country_code">

                        </label>
                    </div>
                </div>

                <div class="row justify-content-center gx-0 pb-3">
                    <button type="button"
                        class="btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                        <i class="fa-solid fa-circle-check"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
