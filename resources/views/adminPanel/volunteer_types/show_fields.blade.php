<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/volunteerTypes.fields.id') . ':') !!}
    <b>{{ $volunteerType->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/volunteerTypes.fields.name') . ':') !!}
    <b>{{ $volunteerType->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/volunteerTypes.fields.created_at') . ':') !!}
    <b>{{ $volunteerType->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/volunteerTypes.fields.updated_at') . ':') !!}
    <b>{{ $volunteerType->updated_at }}</b>
</div>
