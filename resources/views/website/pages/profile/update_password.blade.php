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
            <div class="shadow-custom rounded-4 bg-white">
                <form action="{{ route('website.update_information') }}" method="POST">
                    @csrf
                    <div class="row gx-0 p-3">
                        <div class="col-lg-6 col-md-12 py-3 px-2">
                            <i class="fa-sharp fa-solid fa-circle-user fa-lg text-info d-inline"></i>
                            <p class="firstWordInfo d-inline">
                                Modify your Password
                            </p>
                        </div>

                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6">
                            <label for="old_password" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                Old Password:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control border border-end-0 text-start py-3"
                                    id="old_password">
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                    <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6">
                            <label for="password" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                New Password :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control border border-end-0 text-start py-3"
                                    id="password">
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                    <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 px-2 mb-3 fs-6">
                            <label for="password_confirmation" class="form-label px-1">
                                <i class="fa-solid fa-arrow-left text-secondary opacity-50 fa-sm"></i>
                                Password Confirmation :
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="password_confirmation"
                                    class="form-control border border-end-0 text-start py-3" id="password_confirmation">
                                <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                    <i class="fa-solid fa-eye text-secondary opacity-50 fa-sm"></i>
                                </span>
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
