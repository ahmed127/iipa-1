<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.recruitments.index', 'method' => 'GET']) !!}
                    <div class="row">

                        <!-- full_name Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('full_name', __('models/recruitments.fields.full_name') . ':') !!}
                            {!! Form::text('full_name', request('full_name') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- email Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('email', __('models/recruitments.fields.email') . ':') !!}
                            {!! Form::text('email', request('email') ?? null, [
                                'class' => 'form-control',
                            ]) !!}
                        </div>

                        <!-- phone Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('phone', __('models/recruitments.fields.phone') . ':') !!}
                            {!! Form::text('phone', request('phone') ?? null, [
                                'class' => 'form-control',
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
                            <a href="{{ route('adminPanel.recruitments.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
                            {{-- <button type="button" class="btn btn-light-primary font-weight-bold"
                                id="exportButton">@lang('crud.export')</button> --}}
                        </div>

                        {{-- <div class="form-group col-sm-12">
                            @error('export_rows')
                                <h1 class="text-danger">
                                    @lang('lang.select_to_export', ['model' => __('models/recruitments.plural')])
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
            <th>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs control-input" value=".inputs-permmission">
                    <span></span>
                </label>
            </th>
            <th>@lang('lang.user')</th>
            <th>@lang('models/recruitments.fields.full_name')</th>
            <th>@lang('models/recruitments.fields.email')</th>
            <th>@lang('models/recruitments.fields.country_code')</th>
            <th>@lang('models/recruitments.fields.phone')</th>
            <th>@lang('models/recruitments.fields.attachment_cv')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'recruitments'], 'id' => 'export-data']) !!}
        @foreach ($recruitments as $recruitment)
            <tr>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" class="check_inputs inputs-permmission control-input"
                            value="{{ $recruitment->id }}" name="export_rows[]">
                        <span></span>
                    </label>
                </td>
                <td>
                    @if ($recruitment->user)
                        <a href="{{ route('adminPanel.users.show', $recruitment->user->id) }}">
                            {{ $recruitment->user->full_name }}
                        </a>
                    @else
                        {{ __('lang.guest') }}
                    @endif
                </td>
                <td>{{ $recruitment->full_name }}</td>
                <td>{{ $recruitment->email }}</td>
                <td>{{ $recruitment->country_code }}</td>
                <td>{{ $recruitment->phone }}</td>
                <td><a href="{{ $recruitment->attachment_cv }}" target="_blank"
                        class="btn btn-sm btn-primary">@lang('lang.open_file')</a></td>
                <td>
                    {{-- {!! Form::open(['route' => ['adminPanel.recruitments.destroy', $recruitment->id], 'method' => 'delete']) !!} --}}
                    <div class='btn btn-sm-group'>
                        @can('recruitments view')
                            <a href="{{ route('adminPanel.recruitments.show', [$recruitment->id]) }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                                <i class="fa fa-eye"></i>
                            </a>
                        @endcan
                        {{-- @can('recruitments edit')
                            <a href="{{ route('adminPanel.recruitments.edit', [$recruitment->id]) . '?languages=en' }}"
                                class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                                <i class="fa fa-edit"></i>
                            </a>
                        @endcan --}}
                        @can('recruitments destroy')
                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                            <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger"
                                data-toggle="modal" data-target="#country-{{ $recruitment->id }}-modal">
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

@can('recruitments destroy')
    @foreach ($recruitments as $recruitment)
        <!-- Modal -->
        <div class="modal fade" id="country-{{ $recruitment->id }}-modal" tabindex="-1" role="dialog"
            aria-labelledby="country-{{ $recruitment->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-danger">
                            @lang('crud.are_you_sure')
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                        {!! Form::open(['route' => ['adminPanel.recruitments.destroy', $recruitment->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-transparent-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endcan
