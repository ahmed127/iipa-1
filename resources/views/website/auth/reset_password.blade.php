@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Reset Password',
'pageName' => 'Reset Password',
])
<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
            @include('flash::message')
            <form action="{{ route('website.reset_password_post') }}" method="POST">
                @csrf
                <div class="row gx-0 p-3">
                    <div class="col-12 text-center py-2">
                        <h3 class="firstWordInfo">Reset Password</h3>
                        <p class="mt-2">You can reset password.</p>
                    </div>

                    <div class="col-lg-6 col-sm-12 p-1 d-none">
                        <label for="email" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.email') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <input type="email" name="email" value="{{ old('email', $email) }}"
                                class="form-control border text-start py-3 shadow-sm rounded-4" id="email">
                        </div>
                        @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-lg-12 col-sm-12 p-1">
                        <label for="otp_code" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.otp') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <input type="otp_code" name="otp_code" value="{{ old('otp_code') }}"
                                class="form-control border text-start py-3 shadow-sm rounded-4" id="otp_code"
                                autocomplete="off">
                        </div>
                        @error('otp_code') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-lg-12 col-sm-12 p-1">
                        <label for="password" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.password') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group shadow-sm rounded-4">
                            <input type="password" name="password"
                                class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                id="password">
                            <span
                                class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                id="basic-addon1">
                                <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                            </span>
                        </div>
                        @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-lg-12 col-sm-12 p-1">
                        <label for="password_confirmation" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.password_confirmation'):
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group shadow-sm rounded-4">
                            <input type="password" name="password_confirmation"
                                class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                id="password_confirmation">
                            <span
                                class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                id="basic-addon1">
                                <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                            </span>
                        </div>
                        @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="row justify-content-center gx-0 pb-3">
                        <button class="btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                            <i class="fa-solid fa-circle-check"></i>
                            Reset Password
                        </button>
                        <span class="btn btn-light rounded-4 px-lg-4 py-3 col-lg-4 col-sm-10 shadow-custom m-3"
                            onclick="document.getElementById('resend').submit();">
                            <i class="fa-solid fa-circle-check"></i>
                            Resend OTP
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<form action="{{ route('website.forget_password_post') }}" method="POST" id="resend">
    @csrf
    <input type="hidden" value="{{ $email }}" name="email">
</form>
@endsection
