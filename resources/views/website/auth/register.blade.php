@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Create New Account',
'pageName' => 'Register',
])

<section class="bg-content-custom p-custom">

    <div class="shadow-custom rounded-4 m-5 bg-white">
        <form action="{{ route('website.register_post') }}" method="POST">
            @csrf
            <div class="row gx-0 p-5">
                <div class="col-12 text-center py-2">
                    <i class="fa-solid fa-arrow-right-to-bracket fs-3 text-info"></i>
                    <h3 class="firstWordInfo d-inline">@lang('lang.register_h')</h3>
                    <p class="mt-2">@lang('lang.register_p')</p>
                </div>
                <div class="col-lg-4 col-sm-12 px-3 mb-3 fs-6">
                    <label for="fullName" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.full_name') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input type="text" value="{{ old('full_name') }}" name="full_name"
                            class="form-control border text-start py-3 shadow-sm rounded-4" id="fullName"
                            placeholder="@lang('lang.full_name')">
                    </div>
                    @error('full_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-lg-4 col-sm-12 px-3 mb-3 fs-6">
                    <label for="phone" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.phone') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group rounded-4 shadow-sm">
                        {!! Form::text('phone', null, [
                        'class' => 'form-control border border-end-0 text-start py-3 direction-input-rtl
                        direction-input-ltr',
                        'id' => 'phone',
                        'placeholder' => __('lang.phone') ,
                        ]) !!}
                        <label for="country_code">
                            {!! Form::select('country_code', $countryCodes, null, [
                            'class' => 'border border-end-0 py-3 form-select bg-primary text-white
                            direction-span-rtl direction-span-ltr',
                            ]) !!}
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 px-3 mb-3 fs-6">
                    <label for="email" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.email') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control border text-start py-3 shadow-sm rounded-4" id="email"
                            placeholder="@lang('lang.email')">
                    </div>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12 px-3 mb-3">
                    <label for="password" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.password') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group shadow-sm rounded-4">
                        <input type="password" name="password" value="{{ old('password') }}"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="password" placeholder="{{ __('lang.password') }}">
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
                <div class="col-lg-6 col-sm-12 px-3 mb-3">
                    <label for="password_confirmation" class="form-label px-1">
                        <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                        @lang('lang.password_confirmation') :
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group shadow-sm rounded-4">
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="password_confirmation" placeholder="{{ __('lang.password_confirmation') }}">
                        <span
                            class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                            id="basic-addon1">
                            <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="pt-4 text-center">
                    <button class="btn btn-primary rounded-4 px-5 py-2 shadow-custom mx-2">
                        <i class="fa-solid fa-circle-check"></i>
                        @lang('lang.register')
                    </button>
                    <a href="{{ route('website.home') }}" class="btn btn-light rounded-4 px-5 py-2 shadow-custom mx-2">
                        <i class="fa-solid fa-circle-xmark"></i>
                        @lang('lang.cancel')
                    </a>
                </div>
            </div>
        </form>
    </div>
    </div>

</section>

@endsection
