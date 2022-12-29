<!--begin: Datatable-->
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
    <thead>
        <tr>
            <th>@lang('models/settings.fields.min_model_year')</th>
            <th>@lang('crud.action')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->min_model_year }}</td>
                <td nowrap>
                    {!! Form::open(['route' => ['adminPanel.settings.destroy', $setting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    @can('settings view')
                        <a href="{{ route('adminPanel.settings.show', [$setting->id]) }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-success'><i class="fa fa-eye"></i></a>
                    @endcan
                    @can('settings edit')
                        <a href="{{ route('adminPanel.settings.edit', [$setting->id]) }}" class='btn btn-sm btn-shadow mx-1 btn-transparent-primary'><i class="fa fa-edit"></i></a>
                    @endcan
                    @can('settings destroy')
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-shadow mx-1 btn-transparent-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<!--end: Datatable-->
