<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/menus.fields.name').':') !!}
    {!! Form::text('name', isset($menu)? $menu->name ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Route Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route_name', __('models/menus.fields.route_name').':') !!}
    {!! Form::text('route_name', isset($menu)? $menu->route_name ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', __('models/menus.fields.url').':') !!}
    {!! Form::text('url', isset($menu)? $menu->url ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', __('models/menus.fields.status').':') !!}
        <label class="radio">
        {!! Form::radio('status', "Active", null) !!}
        <span></span>
        @lang('lang.Active')
    </label>
    <label class="radio">
        {!! Form::radio('status', "Inactive", null) !!}
        <span></span>
        @lang('lang.Inactive')
    </label>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/menus.fields.type').':') !!}
    {!! Form::text('type', isset($menu)? $menu->type ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.menus.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
