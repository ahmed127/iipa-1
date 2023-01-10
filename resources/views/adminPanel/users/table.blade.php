<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.users.index', 'method' => 'GET']) !!}
                    <div class="row">

                        <!-- First name Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('full_name', __('models/users.fields.full_name') . ':') !!}
                            <div class="input-group">
                                {!! Form::text('full_name', request('full_name') ?? null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('email', __('models/users.fields.email') . ':') !!}
                            <div class="input-group">
                                {!! Form::text('email', request('email') ?? null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <!-- phone Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('phone', __('models/users.fields.phone') . ':') !!}
                            <div class="input-group">
                                {!! Form::text('phone', request('phone') ?? null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <!-- pagination Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('pagination', __('crud.pagination') . ':') !!}
                            {!! Form::select('pagination', config('statusSystem.pagination'), request('pagination') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>


                        <!-- Submit Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('user_id', __('crud.action') . ':') !!} <br>
                            {!! Form::submit(__('crud.search'), ['class' => 'btn btn-light-success']) !!}
                            <a href="{{ route('adminPanel.users.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            {{-- <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button> --}}
                        </div>

                        <div class="form-group col-sm-12">
                            @error('export_rows')
                                <h1 class="text-danger">
                                    @lang('lang.select_to_export', ['model' => __('models/users.plural')])
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
            {{-- <th>@lang('models/users.fields.id')</th> --}}
            <th>@lang('models/users.fields.full_name')</th>
            <th>@lang('models/users.fields.email')</th>
            <th>@lang('lang.country_code')</th>
            <th>@lang('models/users.fields.phone')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'users'], 'id' => 'export-data']) !!}
        @foreach ($users as $user)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input"
                            value="{{ $user->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                {{-- <td>{{ $user->id }}</td> --}}
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->country_code }}</td>
                <td>{{ $user->phone }}</td>

                <td>
                    <div class='btn btn-sm-group'>
                        @can('users view')
                            <a href="{{ route('adminPanel.users.show', [$user->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                                <i class="fa fa-eye"></i>
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
