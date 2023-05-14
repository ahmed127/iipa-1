<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.initiatives.index', 'method' => 'GET']) !!}
                    <div class="row">
                        <!-- Title Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('title', __('models/initiatives.fields.title') . ':') !!}
                            {!! Form::text('title', request('title') ?? null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Brief Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('brief', __('models/initiatives.fields.brief') . ':') !!}
                            {!! Form::text('brief', request('brief') ?? null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Type Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('type', __('models/initiatives.fields.type') . ':') !!}
                            {!! Form::select(
                                'type',
                                ['' => __('lang.select'), '1' => __('lang.page'), 2 => __('lang.attachment_pdf')],
                                request('type') ?? null,
                                ['class' => 'form-control'],
                            ) !!}
                        </div>

                        <!-- pagination Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('pagination', __('crud.pagination') . ':') !!}
                            {!! Form::select('pagination', config('statusSystem.pagination'), request('pagination') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('user_id', __('crud.action') . ':') !!} <br>
                            {!! Form::submit(__('crud.search'), ['class' => 'btn btn-light-success']) !!}
                            <a href="{{ route('adminPanel.initiatives.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            {{-- <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button> --}}
                        </div>

                        {{-- <div class="form-group col-sm-12">
                            @error('export_rows')
                            <h1 class="text-danger">
                                @lang('lang.select_to_export', ['model' => __('models/initiatives.plural')])
                            </h1>
                            @enderror
                        </div> --}}
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
            {{-- <th>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs control-input" value=".inputs-permmission">
                    <span></span>
                </label>
            </th> --}}
            {{-- <th>#</th> --}}
            <th>@lang('models/initiatives.fields.title')</th>
            <th>@lang('models/initiatives.fields.brief')</th>
            <th>@lang('models/initiatives.fields.type')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'initiatives'], 'id' => 'export-data']) !!}
        @foreach ($initiatives as $initiative)
            <tr>
                {{-- <td>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs inputs-permmission control-input"
                        value="{{ $initiative->id }}" name="export_rows[]">
                    <span></span>
                </label>
            </td> --}}
                {{-- <td>{{ $initiative->id }}</td> --}}
                <td>{{ $initiative->title }}</td>
                <td>{{ $initiative->brief }}</td>
                <td>{{ $initiative->type == 1 ? __('lang.page') : __('lang.attachment_pdf') }}</td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.initiatives.destroy', $initiative->id], 'method' =>
                'delete'])
                !!} --}}
                    <div class='btn btn-sm-group'>
                        {{-- @can('initiatives view')
                    <a href="{{ route('adminPanel.initiatives.show', [$initiative->id]) }}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                        <i class="fa fa-eye"></i>
                    </a>
                    @endcan --}}
                        @can('initiatives edit')
                            <a href="{{ route('adminPanel.initiatives.edit', [$initiative->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                                <i class="fa fa-edit"></i>
                            </a>
                        @endcan
                        @can('initiatives destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm
                    btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return
                    confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $initiative->id }}-modal">
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

@can('initiatives destroy')
    @foreach ($initiatives as $initiative)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $initiative->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $initiative->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open(['route' => ['adminPanel.initiatives.destroy', $initiative->id], 'method' => 'delete']) !!}
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
