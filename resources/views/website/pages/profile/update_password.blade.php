@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Update Password',
'pageName' => 'Update Password',
])
<section class="bg-content-custom p-custom">
    <div class="row">
        <div class="col-2">
            @include('website.pages.profile._aside')
        </div>
        <div class="col-10">
            @include('website.inc._error')
            @include('flash::message')
            <div class="shadow-custom rounded-4 bg-white">
                <form action="{{ route('website.update_password_post') }}" method="POST">
                    @csrf
                    <div class="row gx-0 p-3 w-75 m-auto">
                        <div class="col-lg-9 col-md-9 py-5 px-2">
                            <i class="fa-sharp fa-solid fa-circle-user fa-lg fs-3 text-info d-inline"></i>
                            <h3 class="firstWordInfo d-inline">
                                @lang('lang.update_password')
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
                            <label for="old_password" class="form-label px-1 w-25 m-auto">
                                <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.old_password')
                            </label>
                            <div class="input-group w-75">
                                <input type="password" class="form-control border border-end-0 text-start py-3"
                                    id="old_password" name="old_password" required>
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                    <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6 d-flex">
                            <label for="password" class="form-label px-1 w-25 m-auto">
                                <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.new_password')
                            </label>
                            <div class="input-group w-75">
                                <input type="password" class="form-control border border-end-0 text-start py-3"
                                    id="password" name="password" required>
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                    <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6 d-flex">
                            <label for="password_confirmation" class="form-label px-1 w-25 m-auto">
                                <i class="fa-solid fa-arrow-left reversed text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.password_confirmation')
                            </label>
                            <div class="input-group w-75">
                                <input type="password" class="form-control border border-end-0 text-start py-3"
                                    id="password_confirmation" name="password_confirmation" required>
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
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
