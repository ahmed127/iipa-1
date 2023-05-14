@extends('website.layout.app')

@section('title', 'Login')

@section('content')

    @include('website.layout._header_page', [
        'title' => __('lang.update_password'),
        'pageName' => __('lang.update_password'),
    ])
    <section class="bg-content-custom p-custom">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-10 flex-md-column my-3">
                @include('website.pages.profile._aside')
            </div>
            <div class="col-xs-12 col-sm-10">
                @include('website.inc._error')
                @include('flash::message')
                <div class="shadow-custom rounded-4 bg-white">
                    <form action="{{ route('website.update_password_post') }}" method="POST">
                        @csrf
                        <div class="row align-items-center gx-0 p-4 m-auto">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <i class="fa-sharp fa-solid fa-circle-user fa-lg fs-3 text-info d-inline"></i>
                                <h4 class="firstWordInfo d-inline">
                                    @lang('lang.update_password')
                                </h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-3 text-end">
                                <a href="{{ route('website.home') }}"
                                    class="btn btn-light rounded-4 p-2 w-100 shadow-custom ">
                                    <i class="fa-sharp fa-solid fa-circle-xmark d-block"></i>
                                    @lang('lang.cancel')
                                </a>
                            </div>
                            <div class="col-12 p-2">
                                <label for="old_password" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.old_password')
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group shadow-sm rounded-4">
                                    <input type="password" name="old_password"
                                        class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                        id="old_password" placeholder="كلمة المرور">
                                    <span
                                        class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                        id="basic-addon1">
                                        <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 p-2">
                                <label for="old_password" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.new_password')
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group shadow-sm rounded-4">
                                    <input type="password" name="old_password"
                                        class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                        id="old_password" placeholder="كلمة المرور">
                                    <span
                                        class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                        id="basic-addon1">
                                        <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 p-2">
                                <label for="old_password" class="form-label px-2 m-auto">
                                    <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                    @lang('lang.password_confirmation')
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-12 px-2 mb-3 fs-6 d-flex">
                                <div class="input-group shadow-sm rounded-4">
                                    <input type="password" name="old_password"
                                        class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                                        id="old_password" placeholder="كلمة المرور">
                                    <span
                                        class="input-group-text bg-white border border-start-0 direction-span-rtl direction-span-ltr"
                                        id="basic-addon1">
                                        <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="py-4 text-center">
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
