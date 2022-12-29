<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/settings.fields.id').':') !!}
    <b>{{ $setting->id }}</b>
</div>


<!-- Min Model Year Field -->
<div class="form-group">
    {!! Form::label('min_model_year', __('models/settings.fields.min_model_year').':') !!}
    <b>{{ $setting->min_model_year }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/settings.fields.created_at').':') !!}
    <b>{{ $setting->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/settings.fields.updated_at').':') !!}
    <b>{{ $setting->updated_at }}</b>
</div>


