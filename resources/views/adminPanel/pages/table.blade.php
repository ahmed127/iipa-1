<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.pages.index', 'method'=>'GET']) !!}
                    <div class="row">
                        <!-- Title Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('title', __('models/pages.fields.title').':') !!}
                            {!! Form::text('title', request('title')??null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Brief Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('brief', __('models/pages.fields.brief').':') !!}
                            {!! Form::text('brief', request('brief')??null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Type Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('type', __('models/pages.fields.type').':') !!}
                            {!! Form::select('type', [''=>__('lang.select'), '1'=>__('models/pages.fields.page'), 3 =>
                            __('models/pages.fields.image')],
                            request('type')??null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- pagination Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('pagination', __('crud.pagination').':') !!}
                            {!! Form::select('pagination', config('statusSystem.pagination'),
                            request('pagination')??null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('user_id', __('crud.action').':') !!} <br>
                            {!! Form::submit(__('crud.search'), ['class' => 'btn btn-light-success']) !!}
                            <a href="{{ route('adminPanel.pages.index') }}"
                                class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>
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
            {{-- <th>
                <label class="checkbox">
                    <input type="checkbox" class="check_inputs control-input" value=".inputs-permmission">
                    <span></span>
                </label>
            </th> --}}
            <th>#</th>
            <th>@lang('models/pages.fields.title')</th>
            <th>@lang('models/pages.fields.brief')</th>
            <th>@lang('models/pages.fields.type')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => ['adminPanel.data.export', 'pages'], 'id' => 'export-data']) !!}
        @foreach($pages as $page)
        <tr>

            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td>{{ $page->brief }}</td>
            <td>{{ $page->type == 1 ? __('models/pages.fields.page') : __('models/pages.fields.image')}}</td>
            <td>
                <div class='btn btn-sm-group'>
                    @can('pages view')
                    <a href="{{ route('adminPanel.pages.show', [$page->id]) }}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                        <i class="fa fa-eye"></i>
                    </a>
                    @endcan
                    @can('pages edit')
                    <a href="{{ route('adminPanel.pages.edit', [$page->id])}}"
                        class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                        <i class="fa fa-edit"></i>
                    </a>
                    @endcan
                    @can('pages destroy')
                    <button type="button" class="btn btn-sm btn-shadow mx-1 btn-transparent-danger" data-toggle="modal"
                        data-target="#country-{{$page->id}}-modal">
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

@can('pages destroy')
@foreach($pages as $page)

<!-- Modal -->
<div class="modal fade" id="country-{{$page->id}}-modal" tabindex="-1" role="dialog"
    aria-labelledby="country-{{$page->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-danger">
                    @lang('crud.are_you_sure')
                </h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('crud.close')</button>
                {!! Form::open(['route' => ['adminPanel.pages.destroy', $page->id], 'method' => 'delete'])
                !!}
                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                btn-transparent-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endforeach
@endcan
