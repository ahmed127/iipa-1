@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Login Now',
'pageName' => 'Login',
])

<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
            <form action="{{ route('website.login_post') }}" method="POST">
                @csrf
                <div class="row gx-0 p-3">
                    <div class="col-12 text-center py-2">
                        <i class="fa-solid fa-arrow-right-to-bracket fs-3 text-info"></i>
                        <h3 class="firstWordInfo d-inline">Pleace Login Or Register</h3>
                        <p class="mt-2">حتي تتمكن من تقيدم طلباتك, واستفسارتك ومتابعتها لاحقًا</p>
                    </div>
                    <div class="col-lg-6 col-sm-12 p-1">
                        <label for="email" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.email') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control border text-start py-3 shadow-sm rounded-4" id="email"
                                placeholder="name@example.com" autocomplete="off">
                        </div>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-12 p-1">
                        <label for="password" class="form-label px-1">
                            <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                            @lang('lang.password') :
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group shadow-sm rounded-4">
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                id="password" placeholder="كلمة المرور" autocomplete="off">
                            <span
                                class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                id="basic-addon1">
                                <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                            </span>
                        </div>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <a class="float-start fs-6 w-auto m-0" href="{{ route('website.forget_password') }}">
                            استرجع
                            <span class="text-info fw-bold">
                                كلمة المرور
                            </span>
                            الخاصة بك.
                        </a>
                    </div>
                    <div class="row justify-content-center gx-0 pb-3">
                        <button class="btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                            <i class="fa-solid fa-circle-check"></i>
                            تسجيل دخول
                        </button>
                        <a href="{{ route('website.register') }}"
                            class="btn btn-light rounded-4 px-lg-4 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                            <i class="fa-solid fa-user-plus"></i>
                            سجل حساب جديد
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
