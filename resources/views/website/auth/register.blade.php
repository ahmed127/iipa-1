@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Create New Account',
'pageName' => 'Register',
])
<section class="bg-content-custom">

    <div class="shadow-custom rounded-4 m-5 bg-white">
        <div class="row gx-0 p-5">
            <div class="col-12 text-center">
                <h3 class="text-center h4">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.7933 31.3385V26.9561H27.6176V4.38243H15.7933V0H27.6176C28.8303 0 29.8639 0.420051 30.7183 1.26015C31.5728 2.10136 32 3.14212 32 4.38243V26.9561C32 28.1964 31.5728 29.2366 30.7183 30.0767C29.8639 30.9179 28.8303 31.3385 27.6176 31.3385H15.7933ZM11.9897 25.0543L8.93023 21.9535L13.0233 17.8605H0V13.478H13.0233L8.93023 9.38501L11.9897 6.28424L21.3747 15.6693L11.9897 25.0543Z"
                            fill="#11B0F9" />
                    </svg>
                    <span class="text-info">
                        يرجى
                    </span>
                    تسجيل الدخول او تسجيل حساب جديد
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, earum.</p>
            </div>
            <div class="col-lg-6 col-sm-12 px-3 mb-3 fs-6">
                <label for="fullName" class="form-label px-1">
                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                    @lang('lang.full_name') :
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                    <input type="text" class="form-control border text-start py-3 shadow-sm rounded-4"
                        id="fullName" placeholder="@lang('lang.full_name')">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 px-3 mb-3 fs-6">
                <label for="email" class="form-label px-1">
                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                    @lang('lang.email') :
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                    <input type="email" name="email" class="form-control border text-start py-3 shadow-sm rounded-4"
                        id="email" placeholder="@lang('lang.email')">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 px-3 mb-3">
                <label for="password" class="form-label px-1">
                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                    @lang('lang.password') :
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group shadow-sm rounded-4">
                    <input type="password" name="password" class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                        id="password" placeholder="@lang('lang.password')">
                    <span class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr" id="basic-addon1">
                        <i class="fa-solid fa-pen text-secondary opacity-50 fa-sm"></i>
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 px-3 mb-3">
                <label for="confirmPassword" class="form-label px-1">
                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                    @lang('lang.confirm_password:') :
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group shadow-sm rounded-4">
                    <input type="password" name="confirmPassword" class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                        id="confirmPassword" placeholder="@lang('lang.confirm_password:')">
                    <span class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr" id="basic-addon1">
                        <i class="fa-solid fa-pen text-secondary opacity-50 fa-sm"></i>
                    </span>
                </div>
            </div>
            <div class="pt-4 text-center">
                <button type="button" class="btn btn-primary rounded-4 px-5 py-2 shadow-custom mx-2">
                    <i class="fa-solid fa-circle-check"></i>
                    تسجيل الان
                </button>
                <button type="button" class="btn btn-light rounded-4 px-5 py-2 shadow-custom mx-2">
                    <i class="fa-solid fa-circle-xmark"></i>
                    الغاء الأن
                </button>
            </div>
        </div>
    </div>
    </div>

</section>

@endsection
