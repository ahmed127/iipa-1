<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/countries.fields.id').':') !!}
    <b>{{ $country->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/countries.fields.name').':') !!}
    <b>{{ $country->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/countries.fields.created_at').':') !!}
    <b>{{ $country->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/countries.fields.updated_at').':') !!}
    <b>{{ $country->updated_at }}</b>
</div>


