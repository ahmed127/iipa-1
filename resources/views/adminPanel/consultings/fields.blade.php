<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/consultings.fields.name').':') !!}
    {!! Form::text('name', isset($consulting)? $consulting->name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/consultings.fields.email').':') !!}
    {!! Form::text('email', isset($consulting)? $consulting->email ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Email Confirmation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_confirmation', __('models/consultings.fields.email_confirmation').':') !!}
    {!! Form::text('email_confirmation', isset($consulting)? $consulting->email_confirmation ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/consultings.fields.country_code').':') !!}
    {!! Form::text('country_code', isset($consulting)? $consulting->country_code ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/consultings.fields.phone').':') !!}
    {!! Form::text('phone', isset($consulting)? $consulting->phone ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', __('models/consultings.fields.country_id').':') !!}
    {!! Form::text('country_id', isset($consulting)? $consulting->country_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Job Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', __('models/consultings.fields.job_id').':') !!}
    {!! Form::text('job_id', isset($consulting)? $consulting->job_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Consultant Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultant_type_id', __('models/consultings.fields.consultant_type_id').':') !!}
    {!! Form::text('consultant_type_id', isset($consulting)? $consulting->consultant_type_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/consultings.fields.type').':') !!}
    {!! Form::text('type', isset($consulting)? $consulting->type ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', __('models/consultings.fields.date_of_birth').':') !!}
    {!! Form::text('date_of_birth', isset($consulting)? $consulting->date_of_birth ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Fav Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fav_lang', __('models/consultings.fields.fav_lang').':') !!}
    {!! Form::text('fav_lang', isset($consulting)? $consulting->fav_lang ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/consultings.fields.description').':') !!}
    {!! Form::text('description', isset($consulting)? $consulting->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Letter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_letter', __('models/consultings.fields.attachment_letter').':') !!}
    {!! Form::text('attachment_letter', isset($consulting)? $consulting->attachment_letter ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', __('models/consultings.fields.gender').':') !!}
    {!! Form::text('gender', isset($consulting)? $consulting->gender ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', __('models/consultings.fields.nationality').':') !!}
    {!! Form::text('nationality', isset($consulting)? $consulting->nationality ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.consultings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
