@extends('adminPanel.layouts.app')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
         <a href="{!! route('adminPanel.menus.menu_index') !!}">@lang('models/menus.menu_plural')</a>
    </li>
    <li class="breadcrumb-item">
         <a href="{!! route('adminPanel.menus.item_index', $menu->id) !!}">@lang('models/menus.item_plural')</a>
    </li>
    <li class="breadcrumb-item active">@lang('crud.add_new')</li>
</ul>
@endsection
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">@lang('crud.create') @lang('models/menus.item_singular') To {{ $menu->name }}</h3>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => ['adminPanel.menus.item_store', $menu->id]]) !!}
                                @include('adminPanel.menus.item_fields')
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
