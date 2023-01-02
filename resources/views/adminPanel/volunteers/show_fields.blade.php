<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/volunteers.fields.id') . ':') !!}
    <b>{{ $volunteer->id }}</b>
</div>


<!-- Volunteer Type Id Field -->
<div class="form-group">
    {!! Form::label('volunteer_type_id', __('models/volunteers.fields.volunteer_type_id') . ':') !!}
    <b>{{ $volunteer->volunteer_type_id }}</b>
</div>


<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', __('models/volunteers.fields.full_name') . ':') !!}
    <b>{{ $volunteer->full_name }}</b>
</div>


<!-- Id No Field -->
<div class="form-group">
    {!! Form::label('id_no', __('models/volunteers.fields.id_no') . ':') !!}
    <b>{{ $volunteer->id_no }}</b>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/volunteers.fields.email') . ':') !!}
    <b>{{ $volunteer->email }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group">
    {!! Form::label('country_code', __('models/volunteers.fields.country_code') . ':') !!}
    <b>{{ $volunteer->country_code }}</b>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/volunteers.fields.phone') . ':') !!}
    <b>{{ $volunteer->phone }}</b>
</div>


<!-- Attachment Cv Field -->
<div class="form-group">
    {!! Form::label('attachment_cv', __('models/volunteers.fields.attachment_cv') . ':') !!}
    <a href="{{ $volunteer->attachment_cv }}" target="_blank" class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/volunteers.fields.created_at') . ':') !!}
    <b>{{ $volunteer->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/volunteers.fields.updated_at') . ':') !!}
    <b>{{ $volunteer->updated_at }}</b>
</div>
