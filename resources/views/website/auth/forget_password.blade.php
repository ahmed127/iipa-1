@extends('website.layout.app')

@section('title', 'Login')

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.forget_password_h'),
        'pageName' => __('lang.forget_password_h'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
                <form action="{{ route('website.forget_password_post') }}" method="POST">
                    @csrf
                    <div class="row gx-0 p-3">
                        <div class="col-12 text-center py-2">
                            <i class="fa-solid fa-key fs-3 text-info"></i>
                            <h3 class="firstWordInfo d-inline">@lang('lang.forget_password_h')</h3>
                            <p class="mt-2">@lang('lang.forget_password_p')</p>
                        </div>
                        <div class="col-lg-6 col-sm-12 m-auto p-1">
                            <label for="email" class="form-label px-1">
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

                        <div class="row justify-content-center gx-0 pb-3">
                            <button class="btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                                <i class="fa-solid fa-circle-check"></i>
                                @lang('lang.send')
                            </button>
                            <a href="{{ route('website.login') }}"
                                class="btn btn-light rounded-4 px-lg-4 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                                <i class="fa-solid fa-user-plus"></i>
                                @lang('lang.login')
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
