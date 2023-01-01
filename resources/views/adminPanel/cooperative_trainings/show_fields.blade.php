<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/cooperativeTrainings.fields.id').':') !!}
    <b>{{ $cooperativeTraining->id }}</b>
</div>


<!-- Entity Name Field -->
<div class="form-group">
    {!! Form::label('entity_name', __('models/cooperativeTrainings.fields.entity_name').':') !!}
    <b>{{ $cooperativeTraining->entity_name }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group">
    {!! Form::label('country_code', __('models/cooperativeTrainings.fields.country_code').':') !!}
    <b>{{ $cooperativeTraining->country_code }}</b>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/cooperativeTrainings.fields.phone').':') !!}
    <b>{{ $cooperativeTraining->phone }}</b>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/cooperativeTrainings.fields.email').':') !!}
    <b>{{ $cooperativeTraining->email }}</b>
</div>


<!-- Attachment Letter Field -->
<div class="form-group">
    {!! Form::label('attachment_letter', __('models/cooperativeTrainings.fields.attachment_letter').':') !!}
    <b><a href="{{ $cooperativeTraining->attachment_letter }}" target="_blank"
        class="btn btn-sm btn-primary">@lang('lang.open_file')</a></b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/cooperativeTrainings.fields.created_at').':') !!}
    <b>{{ $cooperativeTraining->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/cooperativeTrainings.fields.updated_at').':') !!}
    <b>{{ $cooperativeTraining->updated_at }}</b>
</div>


