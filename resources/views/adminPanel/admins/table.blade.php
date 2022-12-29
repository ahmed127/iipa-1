<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.admins.index', 'method'=>'GET']) !!}
                        <div class="row">

                            <!-- Name Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('name', __('models/admins.fields.name').':') !!}
                                {!! Form::text('name', request('name')??null, ['class' => 'form-control', 'placeholder'=> __('models/admins.fields.name')]) !!}
                            </div>

                            <!-- Email Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('email', __('models/admins.fields.email').':') !!}
                                {!! Form::text('email', request('email')??null, ['class' => 'form-control', 'placeholder'=> __('models/admins.fields.email')]) !!}
                            </div>

                            <!-- Status Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('status', __('models/admins.fields.status').':') !!}
                                {!! Form::select('status', $status, request('status')??null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- pagination Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('pagination', __('crud.pagination').':') !!}
                                {!! Form::select('pagination', config('statusSystem.pagination'), request('pagination')??null, ['class' => 'form-control']) !!}
                            </div>


                            <!-- Submit Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('user_id', __('crud.action').':') !!} <br>
                                {!! Form::submit(__('crud.search'), ['class' => 'btn btn-light-success']) !!}
                                <a href="{{ route('adminPanel.admins.index') }}" class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                                @can('admins export')
                                    <button type="button" class="btn btn-light-primary font-weight-bold"  id="exportButton">@lang('crud.export')</button>
                                @endcan
                            </div>

                            <div class="form-group col-sm-12">
                                @error('export_rows')
                                    <h1 class="text-danger">
                                        @lang('lang.select_to_export', ['model' => __('models/admins.plural')])
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
<div class="scroll-table">
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
                <th>@lang('models/admins.fields.name')</th>
                <th>@lang('models/admins.fields.email')</th>
                <th>@lang('models/admins.fields.roles')</th>
                <th>@lang('models/admins.fields.status')</th>
                <th>@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            {!! Form::open(['route' => ['adminPanel.data.export', 'admins'], 'id' => 'export-data']) !!}
            @foreach($admins->whereNull('category_id') as $admin)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input" value="{{ $admin->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                <td>{{ $admin->name??'' }}</td>
                <td>{{ $admin->email??''  }}</td>
                <td>{{ $admin->roles[0]->name??'' }}</td>
                <td>{{ $admin->status ? __('lang.active') : __('lang.inactive') }}</td>
                <td>
                    <div class='btn btn-group'>
                        @can('admins edit')
                            <a href="{{ route('adminPanel.admins.show', [$admin->id]) }}" class='btn btn-success'>
                                @lang('crud.view')
                            </a>
                            <a href="{{ route('adminPanel.admins.edit', [$admin->id]) }}" class='btn btn-primary'>
                                @lang('crud.edit')
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
            @endforeach
            {!! Form::close() !!}
        </tbody>
    </table>
    <!--end: Datatable-->
</div>
