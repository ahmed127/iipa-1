<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/regions.fields.id').':') !!}
    <b>{{ $region->id }}</b>
</div>


<!-- City Id Field -->
<div class="form-group show">
    {!! Form::label('city_id', __('models/regions.fields.city_id').':') !!}
    <b>{{ $region->city_id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/regions.fields.name').':') !!}
    <b>{{ $region->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/regions.fields.created_at').':') !!}
    <b>{{ $region->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/regions.fields.updated_at').':') !!}
    <b>{{ $region->updated_at }}</b>
</div>


