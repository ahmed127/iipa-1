@extends('website.layout.app')

@section('title', 'Login')

@section('content')

@include('website.layout._header_page', [
'title' => 'Update Information',
'pageName' => 'Update Information',
])
<section class="bg-content-custom p-custom">
    <div class="row">
        <div class="col-2">
            @include('website.pages.profile._aside')
        </div>
        <div class="col-10">
            <div class="shadow-custom rounded-4  bg-white ">
                @include('website.inc._error')
                @include('flash::message')
                <form action="{{ route('website.update_information_post') }}" method="POST">
                    @csrf
                    <div class="row gx-0 p-3">
                        <div class="col-lg-6 col-md-12 py-3 px-2">
                            <i class="fa-sharp fa-solid fa-circle-user fa-lg text-info d-inline"></i>
                            <p class="firstWordInfo d-inline">
                                Modify your personal data
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6 ">
                            <label for="full_name" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                Full Name :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control border text-start py-3" id="full_name"
                                    name="full_name" value="{{ $user->full_name }}" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6">
                            <label for="email" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                Email :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="email" class="form-control border text-start py-3" id="email" name="email"
                                    value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-6 px-2 mb-3 fs-6">
                            <label for="phone" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                @lang('lang.phone') :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group rounded-4 shadow-sm">
                                <label for="country_code">
                                    {!! Form::select('country_code', $countryCodes, $user->country_code??null, ['class'
                                    =>
                                    'border
                                    border-end-0 py-3
                                    form-select bg-primary text-white']) !!}
                                </label>
                                <input type="text" name="phone" value="{{ $user->phone }}"
                                    class="form-control border border-end-0 text-start py-3 " id="phone">
                            </div>
                        </div>
                        <div class="py-4 text-center">
                            <button type="submit"
                                class="btn btn-primary rounded-4 px-5 py-2 col-lg-3 col-sm-6 shadow-custom m-2">
                                <i class="fa-solid fa-circle-check"></i>
                                Save
                            </button>
                            <a href="{{ route('website.home') }}"
                                class="btn btn-light rounded-4 px-5 py-2 col-lg-3 col-sm-6 shadow-custom m-2">
                                <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </section>

@endsection
