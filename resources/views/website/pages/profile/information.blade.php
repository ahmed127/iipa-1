@extends('website.layout.app')

@section('title', 'Login')

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.update_information'),
        'pageName' => __('lang.update_information'),
    ])
    <section class="bg-content-custom p-custom">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-10 flex-md-column my-3">
                @include('website.pages.profile._aside')
            </div>
            <div class="col-xs-12 col-sm-10">
                @include('website.inc._error')
                @include('flash::message')
                <div class="shadow-custom rounded-4  bg-white ">
                    @include('website.inc._error')
                    @include('flash::message')
                    <form action="{{ route('website.update_information_post') }}" method="POST">
                        @csrf
                        <div class="row gx-0 p-3 m-auto">
                            <div class="col-lg-9 col-md-9 py-3 col-sm-12">
                                <i class="fa-sharp fa-solid fa-circle-user fa-lg fs-3 text-info d-inline"></i>
                                <h4 class="firstWordInfo d-inline">
                                    @lang('lang.update_information')
                                </h4>
                            </div>
                            <div class="col-lg-3 col-md-3 p-3 text-end">
                                <a href="{{ route('website.home') }}"
                                    class="btn btn-light rounded-4 p-2 w-100 shadow-custom ">
                                    <i class="fa-sharp fa-solid fa-circle-xmark d-block"></i>
                                    @lang('lang.cancel')
                                </a>
                            </div>
                            <div class="col-12 p-2">
                                <label for="old_password" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.full_name') :
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control border border-end-0 text-start py-3 rounded-4 shadow-sm"
                                        id="full_name" value="{{ $user->full_name }}" name="full_name" required>
                                </div>
                            </div>
                            <div class="col-12 p-2">
                                <label for="old_password" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.email') :
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group">
                                    <input type="email" class="form-control border text-start py-3 rounded-4 shadow-sm"
                                        id="email" name="email" value="{{ $user->email }}" required readonly>
                                </div>
                            </div>
                            <div class="col-12 p-2">
                                <label for="phone" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.phone') :
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group rounded-4 shadow-sm ">
                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                        class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                        id="phone" required>
                                    <label for="country_code">
                                        {!! Form::select('country_code', $countryCodes, $user->country_code ?? null, [
                                            'class' => 'py-3 form-select bg-primary rounded-0 rounded-end shadow-sm text-white',
                                            'required' => 'required',
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-6 py-4 text-center">
                                <button type="submit" class="btn btn-primary rounded-4 py-3 w-100 shadow-custom">
                                    <i class="fa-solid fa-circle-check"></i>
                                    @lang('lang.save')
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
