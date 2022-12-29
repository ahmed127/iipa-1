<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/initiatives.fields.id').':') !!}
    <b>{{ $initiative->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/initiatives.fields.name').':') !!}
    <b>{{ $initiative->name }}</b>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/initiatives.fields.description').':') !!}
    <b>{{ $initiative->description }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/initiatives.fields.created_at').':') !!}
    <b>{{ $initiative->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/initiatives.fields.updated_at').':') !!}
    <b>{{ $initiative->updated_at }}</b>
</div>


