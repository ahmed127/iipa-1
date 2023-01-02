@extends('website.layout.app')

@section('title', 'Class Actions')

@section('content')
@include('website.layout._header_page', [
'title' => 'Class Actions',
'pageName' => 'Class Actions',
])
<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        <div class="shadow-custom rounded-4 bg-white col-xl-10 col-lg-12 col-sm-12 mx-xl-auto mx-sm-0">
            <div class="row gx-0 p-3">
                <div class="col-12 text-center py-3">

                    <h3 class="firstWordInfo d-inline">Please complete the registration details below</h3>
                    <p class="mt-2 col-8 m-auto">
                        This service aims to provide advice and legal assistance to members and individual
                        investors with regard to filing
                        complaints, filing class action lawsuits, and hiring lawyers.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-12 p-1">
                    <label for="full_name" class="form-label px-1">
                        Full Name
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group flex-row-reverse">
                        <input type="full_name"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="full_name" placeholder="name@example.com">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 p-1">
                    <label for="email" class="form-label px-1">
                        Email
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group flex-row-reverse">
                        <input type="email"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="email" placeholder="name@example.com">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 p-1">
                    <label for="phone" class="form-label px-1">
                        Phone
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group flex-row-reverse">
                        <input type="phone"
                            class="form-control border border-end-0 text-start py-3 direction-input-rtl direction-input-ltr"
                            id="phone" placeholder="name@example.com">
                    </div>
                </div>

                <div class="row justify-content-center gx-0 pb-3">
                    <button type="button"
                        class="btn btn-primary rounded-4 px-lg-5 py-3 col-lg-4 col-sm-10 shadow-custom m-3">
                        <i class="fa-solid fa-circle-check"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
