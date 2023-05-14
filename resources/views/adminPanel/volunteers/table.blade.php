<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.volunteers.index', 'method' => 'GET']) !!}
                    <div class="row">

                        <!-- status Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('status', __('lang.status') . ':') !!}
                            {!! Form::select('status', \App\Models\Follow::status_types(), null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.status'),
                            ]) !!}
                        </div>

                        <!-- from Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('from', __('lang.from') . ':') !!}
                            {!! Form::date('from', request('from') ?? null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.from'),
                            ]) !!}
                        </div>

                        <!-- to Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('to', __('lang.to') . ':') !!}
                            {!! Form::date('to', request('to') ?? null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.to'),
                            ]) !!}
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
                            <a href="{{ route('adminPanel.volunteers.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button>
                        </div>

                        <div class="form-group col-sm-12">
                            @error('export_rows')
                                <h1 class="text-danger">
                                    @lang('lang.select_to_export', ['model' => __('models/volunteers.plural')])
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
            <th>@lang('models/volunteers.fields.id')</th>
            <th>@lang('models/volunteers.fields.volunteer_type_id')</th>
            <th>@lang('lang.user')</th>
            <th>@lang('models/volunteers.fields.full_name')</th>
            <th>@lang('models/volunteers.fields.id_no')</th>
            <th>@lang('models/volunteers.fields.email')</th>
            <th>@lang('models/volunteers.fields.country_code')</th>
            <th>@lang('models/volunteers.fields.phone')</th>
            <th>@lang('lang.status')</th>
            <th>@lang('models/volunteers.fields.attachment_cv')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'volunteers'], 'id' => 'export-data']) !!}
        @foreach ($volunteers as $volunteer)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input"
                            value="{{ $volunteer->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                <td>{{ $volunteer->id }}</td>
                <td>{{ $volunteer->volunteer_type->name ?? '' }}</td>
                <td>
                    @if ($volunteer->user)
                        <a href="{{ route('adminPanel.users.show', $volunteer->user->id) }}">
                            {{ $volunteer->user->full_name }}
                        </a>
                    @else
                        {{ __('lang.guest') }}
                    @endif
                </td>
                <td>{{ $volunteer->full_name }}</td>
                <td>{{ $volunteer->id_no }}</td>
                <td>{{ $volunteer->email }}</td>
                <td>{{ $volunteer->country_code }}</td>
                <td>{{ $volunteer->phone }}</td>
                <td>{{ $volunteer->status_text }}</td>
                <td>
                    <a href="{{ $volunteer->attachment_cv }}" target="_blank"
                        class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
                </td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.volunteers.destroy', $volunteer->id], 'method' =>
                'delete']) !!} --}}
                    <div class='btn btn-sm-group'>
                        @can('volunteers view')
                            <a href="{{ route('adminPanel.volunteers.show', [$volunteer->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                                <i class="fa fa-eye"></i>
                            </a>
                        @endcan
                        {{-- @can('volunteers edit')
                    <a href="{{ route('adminPanel.volunteers.edit', [$volunteer->id]) . '?languages=en' }}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                        <i class="fa fa-edit"></i>
                    </a>
                    @endcan --}}
                        @can('volunteers destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm
                    btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return
                    confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $volunteer->id }}-modal">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endcan
                    </div>
                    {{-- {!! Form::close() !!} --}}
                </td>
            </tr>
            @endforeach
            <tr>
                <td class="h2 p-5">@lang('lang.total')</td>
                <td class="h1 text-success text-bold" colspan="3">{{ $volunteers->count() }}</td>
            </tr>
        {!! Form::close() !!}
    </tbody>
</table>
<!--end: Datatable-->

@can('volunteers destroy')
    @foreach ($volunteers as $volunteer)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $volunteer->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $volunteer->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open(['route' => ['adminPanel.volunteers.destroy', $volunteer->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fa fa-trash"></i>', [
                            'type' => 'submit',
                            'class' => 'btn
                                                                                                                                                                                                                                                                                                                                                                                        btn-transparent-danger',
                        ]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endcan
