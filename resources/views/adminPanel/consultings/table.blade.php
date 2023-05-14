<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.consultings.index', 'method' => 'GET']) !!}
                    <div class="row">

                        <!-- name Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('name', __('models/consultings.fields.name') . ':') !!}
                            {!! Form::text('name', request('name') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- email Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('email', __('models/consultings.fields.email') . ':') !!}
                            {!! Form::text('email', request('email') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- phone Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('phone', __('models/consultings.fields.phone') . ':') !!}
                            {!! Form::text('phone', request('phone') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- type Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('type', __('models/consultings.fields.type') . ':') !!}
                            {!! Form::select('type', $types, request('type') ?? null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.select') . ' ' . __('models/consultings.fields.type'),
                            ]) !!}
                        </div>

                        <!-- job_id Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('job_id', __('models/consultings.fields.job_id') . ':') !!}
                            {!! Form::select('job_id', $jobs, request('job_id') ?? null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.select') . ' ' . __('models/consultings.fields.job_id'),
                            ]) !!}
                        </div>

                        <!-- country_id Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('country_id', __('models/consultings.fields.country_id') . ':') !!}
                            {!! Form::select('country_id', $countries, request('country_id') ?? null, [
                                'class' => 'form-control',
                                'placeholder' => __('lang.select') . ' ' . __('models/consultings.fields.country_id'),
                            ]) !!}
                        </div>

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
                            <a href="{{ route('adminPanel.consultings.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            {{-- <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button> --}}
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
            <th>@lang('lang.user')</th>
            <th>@lang('models/consultings.fields.name')</th>
            <th>@lang('models/consultings.fields.email')</th>
            <th>@lang('models/consultings.fields.country_code')</th>
            <th>@lang('models/consultings.fields.phone')</th>
            <th>@lang('models/consultings.fields.country_id')</th>
            <th>@lang('models/consultings.fields.job_id')</th>
            <th>@lang('models/consultings.fields.consultant_type_id')</th>
            <th>@lang('models/consultings.fields.type')</th>
            <th>@lang('models/consultings.fields.fav_lang')</th>
            <th>@lang('models/consultings.fields.gender')</th>
            <th>@lang('models/consultings.fields.nationality')</th>
            <th>@lang('lang.status')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'consultings'], 'id' => 'export-data']) !!}
        @foreach ($consultings as $consulting)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input"
                            value="{{ $consulting->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                <td>
                    @if ($consulting->user)
                        <a href="{{ route('adminPanel.users.show', $consulting->user->id) }}">
                            {{ $consulting->user->full_name }}
                        </a>
                    @else
                        {{ __('lang.guest') }}
                    @endif
                </td>
                <td>{{ $consulting->name }}</td>
                <td>{{ $consulting->email }}</td>
                <td>{{ $consulting->country_code }}</td>
                <td>{{ $consulting->phone }}</td>
                <td>{{ $consulting->country->name ?? '' }}</td>
                <td>{{ $consulting->job->name ?? '' }}</td>
                <td>{{ $consulting->consultant_type->name ?? '' }}</td>
                <td>{{ $consulting->type_text }}</td>
                <td>{{ $consulting->fav_lang }}</td>
                <td>{{ $consulting->gender }}</td>
                <td>{{ $consulting->nationality }}</td>
                <td>{{ $consulting->status_text }}</td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.consultings.destroy', $consulting->id], 'method' =>
                'delete']) !!} --}}
                    <div class='btn btn-sm-group'>
                        @can('consultings view')
                            <a href="{{ route('adminPanel.consultings.show', [$consulting->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                                <i class="fa fa-eye"></i>
                            </a>
                        @endcan
                        {{-- @can('consultings edit')
                    <a href="{{ route('adminPanel.consultings.edit', [$consulting->id]) . '?languages=en' }}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                        <i class="fa fa-edit"></i>
                    </a>
                    @endcan --}}
                        @can('consultings destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm
                    btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return
                    confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $consulting->id }}-modal">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endcan
                    </div>
                    {{-- {!! Form::close() !!} --}}
                </td>
            </tr>
        @endforeach
        {!! Form::close() !!}
    </tbody>
</table>
<!--end: Datatable-->

@can('consultings destroy')
    @foreach ($consultings as $consulting)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $consulting->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $consulting->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open(['route' => ['adminPanel.consultings.destroy', $consulting->id], 'method' => 'delete']) !!}
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
