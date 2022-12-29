<!--begin::Search Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-12">
            <div class="row align-items-center">
                <div class="col-md-12 my-md-0">
                    {!! Form::open(['route' => 'adminPanel.pages.index', 'method'=>'GET']) !!}
                        <div class="row">

                            <!-- Title Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('name', __('models/pages.fields.name').':') !!}
                                {!! Form::text('name', request('name')??null, ['class' => 'form-control', 'placeholder'=> __('models/pages.fields.name')]) !!}
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
                                <a href="{{ route('adminPanel.pages.index') }}" class="btn btn-light-danger font-weight-bold">@lang('crud.reset')</a>

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
            <th>@lang('models/pages.fields.id')</th>
            <th>@lang('models/pages.fields.name')</th>
            <th>@lang('models/paragraphs.plural')</th>
            <th>@lang('models/images.plural')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pages as $page)
            <tr>
                <td>{{ $page->id??'' }}</td>
                <td>{{ $page->name??'' }}</td>

                <td>
                    <a href="{{ route('adminPanel.pages.paragraphs.index', $page->id) }}">
                        {{ $page->paragraph_count }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('adminPanel.pages.images.index', $page->id) }}">
                        {{ $page->image_count }}
                    </a>
                </td>
                <td nowrap>
                    {!! Form::open(['route' => ['adminPanel.pages.destroy', $page->id], 'method' => 'delete']) !!}
                    <div class='btn btn-sm-group'>
                        @can('pages view')
                        <a href="{{ route('adminPanel.pages.show', [$page->id]) }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-success'>
                            <i class="fa fa-eye"></i>
                        </a>
                        @endcan
                        @can('pages edit')
                        <a href="{{ route('adminPanel.pages.edit', [$page->id]) . "?languages=en" }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'>
                            <i class="fa fa-edit"></i>
                        </a>
                        @endcan
                        @can('pages destroy')
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
<!--end: Datatable-->
