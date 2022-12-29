@extends('adminPanel.layouts.app')

@section('breadcrumb')
<ul class="p-0 my-2 breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold font-size-sm">
    {{-- <li class="breadcrumb-item">
        <a href="{!! route('adminPanel.settings.index') !!}">@lang('models/settings.singular')</a>
    </li> --}}
    <li class="breadcrumb-item active">@lang('crud.edit')</li>
</ul>
@endsection
@section('content')
@include('flash::message')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container ">
        @include('coreui-templates::common.errors')
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">@lang('crud.edit') @lang('models/settings.singular')</h3>
                    </div>
                    {{-- <form enctype="multipart/form-data"> --}}
                    <div class="card-body">
                        {!! Form::model($setting, ['route' => ['adminPanel.settings.update', $setting->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                        @include('adminPanel.settings.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@endsection
