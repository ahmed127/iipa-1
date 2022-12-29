<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/menus.fields.name').':') !!}
    {!! Form::text('name', isset($item)? $item->name ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Route Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu_route_id', __('models/menus.fields.menu_route_id').':') !!}
    {!! Form::select('menu_route_id', $routes ??[], old('route'), ['class' => 'form-control']) !!}
</div>

<!-- Parent ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', __('models/menus.fields.parent_id').':') !!}
    {!! Form::select('parent_id', $parents ??[], old('route'), ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', __('models/menus.fields.status').':') !!}
        <label class="radio">
        {!! Form::radio('status', 1, 'active') !!}
        <span></span>
        @lang('lang.active')
    </label>
    <label class="radio">
        {!! Form::radio('status', 2, null) !!}
        <span></span>
        @lang('lang.inactive')
    </label>
</div>

<!-- Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('type', __('models/menus.fields.type').':') !!}
        <label class="radio">
        {!! Form::radio('type', 1, 'active') !!}
        <span></span>
        @lang('models/menus.fields.type_category')
    </label>
    <label class="radio">
        {!! Form::radio('type', 2, null) !!}
        <span></span>
        @lang('models/menus.fields.type_route')
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.menus.item_index', $menu->id) }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
