<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.outreaches.index', 'method' => 'GET']) !!}
                    <div class="row">
                        <!-- Title Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('title', __('models/outreaches.fields.title') . ':') !!}
                            {!! Form::text('title', request('title') ?? null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Brief Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('brief', __('models/outreaches.fields.brief') . ':') !!}
                            {!! Form::text('brief', request('brief') ?? null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Type Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('type', __('models/outreaches.fields.type') . ':') !!}
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
                            <a href="{{ route('adminPanel.outreaches.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            {{-- <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button> --}}
                        </div>

                        {{-- <div class="form-group col-sm-12">
                            @error('export_rows')
                            <h1 class="text-danger">
                                @lang('lang.select_to_export', ['model' => __('models/outreaches.plural')])
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
            <th>#</th>
            <th>@lang('models/outreaches.fields.title')</th>
            <th>@lang('models/outreaches.fields.brief')</th>
            <th>@lang('models/outreaches.fields.type')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'outreaches'], 'id' => 'export-data']) !!}
        @foreach ($outreaches as $outreach)
            <tr>
                {{-- <td>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs inputs-permmission control-input"
                        value="{{ $outreach->id }}" name="export_rows[]">
                    <span></span>
                </label>
            </td> --}}
                <td>{{ $outreach->id }}</td>
                <td>{{ $outreach->title }}</td>
                <td>{{ $outreach->brief }}</td>
                <td>{{ $outreach->type == 1 ? __('lang.page') : __('lang.attachment_pdf') }}</td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.outreaches.destroy', $outreach->id], 'method' =>
                'delete'])
                !!} --}}
                    <div class='btn btn-sm-group'>
                        {{-- @can('outreaches view')
                    <a href="{{ route('adminPanel.outreaches.show', [$outreach->id]) }}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                        <i class="fa fa-eye"></i>
                    </a>
                    @endcan --}}
                        @can('outreaches edit')
                            <a href="{{ route('adminPanel.outreaches.edit', [$outreach->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                                <i class="fa fa-edit"></i>
                            </a>
                        @endcan
                        @can('outreaches destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm
                    btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return
                    confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $outreach->id }}-modal">
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

@can('outreaches destroy')
    @foreach ($outreaches as $outreach)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $outreach->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $outreach->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open(['route' => ['adminPanel.outreaches.destroy', $outreach->id], 'method' => 'delete']) !!}
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
