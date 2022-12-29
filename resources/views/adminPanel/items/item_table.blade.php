<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.menus.menu_index', 'method'=>'GET']) !!}
                        <div class="row">

                            <!-- pagination Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('pagination', __('crud.pagination').':') !!}
                                {!! Form::select('pagination', config('statusSystem.pagination'), request('pagination')??null, ['class' => 'form-control']) !!}
                            </div>


                            <!-- Submit Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('user_id', __('crud.action').':') !!} <br>
                                {!! Form::submit(__('crud.search'), ['class' => 'btn btn-light-success']) !!}
                                <a href="{{ route('adminPanel.menus.menu_index') }}" class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                                <button type="button" class="btn btn-light-primary font-weight-bold"  id="exportButton">@lang('crud.export')</button>
                            </div>

                            <div class="form-group col-sm-12">
                                @error('export_rows')
                                    <h1 class="text-danger">
                                        @lang('lang.select_to_export', ['model' => __('models/menus.plural')])
                                    </h1>
                                @enderror
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
<!--end::Search Form-->

<!--begin: Datatable-->
<table class="table table-bordered table-hover" id="kt_datatableasd">
    <thead>
        <tr>
            <th>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs control-input" value=".inputs-permmission">
                    <span></span>
                </label>
            </th>
            <th>@lang('models/menus.fields.name')</th>
            <th>@lang('models/menus.fields.status')</th>
            <th>@lang('models/menus.fields.type')</th>
            <th>@lang('models/menus.fields.items_count')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'menus'], 'id' => 'export-data']) !!}
        @foreach($menus as $menu)
        <tr>
            <td>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs inputs-permmission control-input" value="{{ $menu->id }}" name="export_rows[]">
                    <span></span>
                </label>
            </td>
            <td>{{ $menu->name??'' }}</td>
            <td>{{ $menu->status? 'Active' : 'Inactive' }}</td>
            <td>{{ $menu->type  }}</td>
            <td><a href="{{ route('adminPanel.menus.item_index', $menu->id) }}" class="btn btn-primary">{{ $menu->items_count }}</a></td>
            <td>
                {{-- <div class='btn btn-sm-group'>
                    @can('menus view')
                    <a href="{{ route('adminPanel.menus.show', [$menu->id]) }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                        <i class="fa fa-eye"></i>
                    </a>
                    @endcan
                    @can('menus edit')
                    <a href="{{ route('adminPanel.menus.edit', [$menu->id]) . "?languages=en" }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                        <i class="fa fa-edit"></i>
                    </a>
                    @endcan
                    @can('menus destroy')
                    <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger" data-toggle="modal" data-target="#country-{{$menu->id}}-modal">
                        <i class="fa fa-trash"></i>
                    </button>
                    @endcan
                </div> --}}
            </td>
        </tr>
        @endforeach
        {!! Form::close() !!}
    </tbody>
</table>
<!--end: Datatable-->

{{-- @can('menus destroy')
    @foreach($menus as $menu)

    <!-- Modal -->
    <div class="modal fade" id="country-{{$menu->id}}-modal" tabindex="-1" role="dialog" aria-labelledby="country-{{$menu->id}}"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-danger">
                        @lang('crud.are_you_sure')
                    </h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                    {!! Form::open(['route' => ['adminPanel.menus.destroy', $menu->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-transparent-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endcan --}}

