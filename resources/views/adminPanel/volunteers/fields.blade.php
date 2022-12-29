<!-- Volunteer Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('volunteer_type_id', __('models/volunteers.fields.volunteer_type_id').':') !!}
    {!! Form::text('volunteer_type_id', isset($volunteer)? $volunteer->volunteer_type_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', __('models/volunteers.fields.full_name').':') !!}
    {!! Form::text('full_name', isset($volunteer)? $volunteer->full_name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Id No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_no', __('models/volunteers.fields.id_no').':') !!}
    {!! Form::text('id_no', isset($volunteer)? $volunteer->id_no ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/volunteers.fields.email').':') !!}
    {!! Form::text('email', isset($volunteer)? $volunteer->email ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/volunteers.fields.country_code').':') !!}
    {!! Form::text('country_code', isset($volunteer)? $volunteer->country_code ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/volunteers.fields.phone').':') !!}
    {!! Form::text('phone', isset($volunteer)? $volunteer->phone ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Cv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_cv', __('models/volunteers.fields.attachment_cv').':') !!}
    {!! Form::text('attachment_cv', isset($volunteer)? $volunteer->attachment_cv ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.volunteers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
