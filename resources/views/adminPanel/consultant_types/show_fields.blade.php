<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/consultantTypes.fields.id') . ':') !!}
    <b>{{ $consultantType->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/consultantTypes.fields.name') . ':') !!}
    <b>{{ $consultantType->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/consultantTypes.fields.created_at') . ':') !!}
    <b>{{ $consultantType->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/consultantTypes.fields.updated_at') . ':') !!}
    <b>{{ $consultantType->updated_at }}</b>
</div>
