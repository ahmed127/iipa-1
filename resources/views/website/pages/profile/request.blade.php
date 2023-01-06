@extends('website.layout.app')

@section('title', 'Profile')

@section('content')

@include('website.layout._header_page', [
'title' => 'Profile',
'pageName' => 'Profile',
])
<style>
    .form-group {
        padding: 25px !important;
    }
</style>
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
                        <p class="firstWordInfo d-inline">
                            {{ $follow_request->name??'' }}
                        </p>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-4">@lang('lang.department') :</div>
                        <div class="col-8">{{ $follow_request->department_name??'' }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-4">@lang('lang.status') :</div>
                        <div class="col-8">{{ $follow_request->status_name??'' }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        <div class="col-4">@lang('lang.created_at') :</div>
                        <div class="col-8">{{ $follow_request->created_at??'' }}</div>
                    </div>
                    <div class="row my-3 p-3">
                        @switch($follow_request->department)
                        @case(1)
                        @include('adminPanel.consultings.show_fields', ['consulting' => $follow_request->forable])
                        @break
                        @case(2)
                        @include('adminPanel.consultings.show_fields', ['consulting' => $follow_request->forable])
                        @break
                        @case(3)
                        @include('adminPanel.volunteers.show_fields', ['volunteer' => $follow_request->forable])
                        @break
                        @case(4)
                        @include('adminPanel.cooperative_trainings.show_fields', ['cooperativeTraining' =>
                        $follow_request->forable])
                        @break
                        @case(5)
                        @include('adminPanel.individual_trainings.show_fields', ['individualTraining' =>
                        $follow_request->forable])
                        @break
                        @case(6)
                        @include('adminPanel.contacts.show_fields', ['contact' => $follow_request->forable])
                        @break
                        @default

                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
