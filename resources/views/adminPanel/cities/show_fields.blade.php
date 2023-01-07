<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/cities.fields.id') . ':') !!}
    <b>{{ $city->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/cities.fields.name') . ':') !!}
    <b>{{ $city->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/cities.fields.created_at') . ':') !!}
    <b>{{ $city->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/cities.fields.updated_at') . ':') !!}
    <b>{{ $city->updated_at }}</b>
</div>
