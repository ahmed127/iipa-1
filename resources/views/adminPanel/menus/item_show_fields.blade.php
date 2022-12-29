<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/menus.fields.id').':') !!}
    <b>{{ $item->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/menus.fields.name').':') !!}
    <b>{{ $item->name }}</b>
</div>


<!-- Route Name Field -->
<div class="form-group">
    {!! Form::label('route_name', __('models/menus.fields.route_name').':') !!}
    <b>{{ $item->route_name }}</b>
</div>


<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', __('models/menus.fields.url').':') !!}
    <b>{{ $item->url }}</b>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/menus.fields.status').':') !!}
    <b>{{ $item->status }}</b>
</div>


<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/menus.fields.type').':') !!}
    <b>{{ $item->type }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/menus.fields.created_at').':') !!}
    <b>{{ $item->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/menus.fields.updated_at').':') !!}
    <b>{{ $item->updated_at }}</b>
</div>


