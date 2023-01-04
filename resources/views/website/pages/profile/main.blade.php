@extends('website.layout.app')

@section('title', 'Profile')

@section('content')

@include('website.layout._header_page', [
'title' => 'Profile',
'pageName' => 'Profile',
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
                <div class="row gx-0 p-3">
                    <div class="col-lg-12 col-md-12 py-3 px-2">
                        <i class="fa-sharp fa-solid fa-circle-user fa-lg text-info d-inline"></i>
                        <p class="firstWordInfo d-inline">
                            My Account
                        </p>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Full Name :</div>
                        <div class="col-7">{{ $user->full_name }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Email :</div>
                        <div class="col-7">{{ $user->email }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Phone :</div>
                        <div class="col-7">{{ $user->country->code??'' }} {{ $user->phone }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Account Created At :</div>
                        <div class="col-7">{{ $user->created_at }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Request to Advisor :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.advisors') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Class Actions Request :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.class_actions_request') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Volunteer Request :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.volunteer_request') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Entities Training Program Request :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.training_entities') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Individuals training Program Request :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.training_individuals') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-5">Contact Us :</div>
                        <div class="col-6">0</div>
                        <div class="col-1">
                            <a href="{{ route('website.contact_us') }}">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-lg text-info"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
