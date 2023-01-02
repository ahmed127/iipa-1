<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.cooperativeTrainings.index', 'method' => 'GET']) !!}
                    <div class="row">

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
                            <a href="{{ route('adminPanel.cooperativeTrainings.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button>
                        </div>

                        <div class="form-group col-sm-12">
                            @error('export_rows')
                                <h1 class="text-danger">
                                    @lang('lang.select_to_export', ['model' => __('models/cooperativeTrainings.plural')])
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
            <th>@lang('models/cooperativeTrainings.fields.entity_name')</th>
            <th>@lang('models/cooperativeTrainings.fields.country_code')</th>
            <th>@lang('models/cooperativeTrainings.fields.phone')</th>
            <th>@lang('models/cooperativeTrainings.fields.email')</th>
            <th>@lang('models/cooperativeTrainings.fields.attachment_letter')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'cooperativeTrainings'], 'id' => 'export-data']) !!}
        @foreach ($cooperativeTrainings as $cooperativeTraining)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input"
                            value="{{ $cooperativeTraining->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                <td>{{ $cooperativeTraining->entity_name }}</td>
                <td>{{ $cooperativeTraining->country_code }}</td>
                <td>{{ $cooperativeTraining->phone }}</td>
                <td>{{ $cooperativeTraining->email }}</td>
                <td>
                    <a href="{{ $cooperativeTraining->attachment_letter }}" target="_blank"
                        class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
                </td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.cooperativeTrainings.destroy', $cooperativeTraining->id], 'method' => 'delete']) !!} --}}
                    <div class='btn btn-sm-group'>
                        @can('cooperativeTrainings view')
                            <a href="{{ route('adminPanel.cooperativeTrainings.show', [$cooperativeTraining->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                                <i class="fa fa-eye"></i>
                            </a>
                        @endcan
                        @can('cooperativeTrainings edit')
                            <a href="{{ route('adminPanel.cooperativeTrainings.edit', [$cooperativeTraining->id]) . '?languages=en' }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                                <i class="fa fa-edit"></i>
                            </a>
                        @endcan
                        @can('cooperativeTrainings destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $cooperativeTraining->id }}-modal">
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

@can('cooperativeTrainings destroy')
    @foreach ($cooperativeTrainings as $cooperativeTraining)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $cooperativeTraining->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $cooperativeTraining->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open([
                            'route' => ['adminPanel.cooperativeTrainings.destroy', $cooperativeTraining->id],
                            'method' => 'delete',
                        ]) !!}
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-transparent-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endcan
