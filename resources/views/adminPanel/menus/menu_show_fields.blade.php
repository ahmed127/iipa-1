<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/menus.fields.id').':') !!}
    <b>{{ $menu->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/menus.fields.name').':') !!}
    <b>{{ $menu->name }}</b>
</div>


<!-- Route Name Field -->
<div class="form-group show">
    {!! Form::label('route_name', __('models/menus.fields.route_name').':') !!}
    <b>{{ $menu->route_name }}</b>
</div>


<!-- Url Field -->
<div class="form-group show">
    {!! Form::label('url', __('models/menus.fields.url').':') !!}
    <b>{{ $menu->url }}</b>
</div>


<!-- Status Field -->
<div class="form-group show">
    {!! Form::label('status', __('models/menus.fields.status').':') !!}
    <b>{{ $menu->status }}</b>
</div>


<!-- Type Field -->
<div class="form-group show">
    {!! Form::label('type', __('models/menus.fields.type').':') !!}
    <b>{{ $menu->type }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/menus.fields.created_at').':') !!}
    <b>{{ $menu->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/menus.fields.updated_at').':') !!}
    <b>{{ $menu->updated_at }}</b>
</div>


