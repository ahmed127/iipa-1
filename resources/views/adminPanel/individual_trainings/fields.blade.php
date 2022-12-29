<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', __('models/individualTrainings.fields.full_name').':') !!}
    {!! Form::text('full_name', isset($individualTraining)? $individualTraining->full_name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/individualTrainings.fields.country_code').':') !!}
    {!! Form::text('country_code', isset($individualTraining)? $individualTraining->country_code ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/individualTrainings.fields.phone').':') !!}
    {!! Form::text('phone', isset($individualTraining)? $individualTraining->phone ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/individualTrainings.fields.email').':') !!}
    {!! Form::text('email', isset($individualTraining)? $individualTraining->email ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Letter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_letter', __('models/individualTrainings.fields.attachment_letter').':') !!}
    {!! Form::text('attachment_letter', isset($individualTraining)? $individualTraining->attachment_letter ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.individualTrainings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
