<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/individualTrainings.fields.id') . ':') !!}
    <b>{{ $individualTraining->id }}</b>
</div>


<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', __('models/individualTrainings.fields.full_name') . ':') !!}
    <b>{{ $individualTraining->full_name }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group">
    {!! Form::label('country_code', __('models/individualTrainings.fields.country_code') . ':') !!}
    <b>{{ $individualTraining->country_code }}</b>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/individualTrainings.fields.phone') . ':') !!}
    <b>{{ $individualTraining->phone }}</b>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/individualTrainings.fields.email') . ':') !!}
    <b>{{ $individualTraining->email }}</b>
</div>


<!-- Attachment Letter Field -->
<div class="form-group">
    {!! Form::label('attachment_letter', __('models/individualTrainings.fields.attachment_letter') . ':') !!}
    <b><a href="{{ $individualTraining->attachment_letter }}" target="_blank"
            class="btn btn-sm btn-primary">@lang('lang.open_file')</a></b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/individualTrainings.fields.created_at') . ':') !!}
    <b>{{ $individualTraining->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/individualTrainings.fields.updated_at') . ':') !!}
    <b>{{ $individualTraining->updated_at }}</b>
</div>
