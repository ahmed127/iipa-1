@extends('website.layout.app')

@section('title', 'Login')

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.update_information'),
        'pageName' => __('lang.update_information'),
    ])
    <section class="bg-content-custom p-custom">
        <div class="row">
            <div class="col-2 d-none d-sm-block">
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
                        <div class="row gx-0 p-3 w-75 m-auto">
                            <div class="col-lg-9 col-md-9 py-5 px-2">
                                <i class="fa-sharp fa-solid fa-circle-user fa-lg fs-3 text-info d-inline"></i>
                                <h3 class="firstWordInfo d-inline">
                                    @lang('lang.update_information')
                                </h3>
                            </div>
                            <div class="col-lg-3 col-md-3 py-5 px-2 text-end">
                                <a href="{{ route('website.home') }}"
                                    class="btn btn-light rounded-4 px-5 py-2 shadow-custom ">
                                    <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                                    @lang('lang.cancel')
                                </a>
                            </div>
                            <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6 d-flex">
                                <label for="full_name" class="form-label px-1 w-25 m-auto">
                                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.full_name') :
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group w-75">
                                    <input type="text" class="form-control border text-start py-3" id="full_name"
                                        name="full_name" value="{{ $user->full_name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6 d-flex">
                                <label for="email" class="form-label px-1 w-25 m-auto">
                                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.email') :
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group w-75">
                                    <input type="email" class="form-control border text-start py-3" id="email"
                                        name="email" value="{{ $user->email }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-6 px-2 mb-3 fs-6 d-flex">
                                <label for="phone" class="form-label px-1 w-25 m-auto">
                                    <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.phone') :
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group rounded-4 shadow-sm w-75">
                                    <label for="country_code">
                                        {!! Form::select('country_code', $countryCodes, $user->country_code ?? null, [
                                            'class' => 'border
                                                                                                                                                            border-end-0 py-3
                                                                                                                                                            form-select bg-primary text-white',
                                            'required' => 'required',
                                        ]) !!}
                                    </label>
                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                        class="form-control border border-start-0 text-start py-3 " id="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-6 py-4 text-center">
                                <button type="submit"
                                    class="btn btn-primary rounded-4 px-5 py-2 col-lg-3 col-sm-6 shadow-custom m-2">
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
