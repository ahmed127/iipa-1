<!-- Entity Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entity_name', __('models/cooperativeTrainings.fields.entity_name').':') !!}
    {!! Form::text('entity_name', isset($cooperativeTraining)? $cooperativeTraining->entity_name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/cooperativeTrainings.fields.country_code').':') !!}
    {!! Form::text('country_code', isset($cooperativeTraining)? $cooperativeTraining->country_code ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/cooperativeTrainings.fields.phone').':') !!}
    {!! Form::text('phone', isset($cooperativeTraining)? $cooperativeTraining->phone ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/cooperativeTrainings.fields.email').':') !!}
    {!! Form::text('email', isset($cooperativeTraining)? $cooperativeTraining->email ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Letter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_letter', __('models/cooperativeTrainings.fields.attachment_letter').':') !!}
    {!! Form::text('attachment_letter', isset($cooperativeTraining)? $cooperativeTraining->attachment_letter ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.cooperativeTrainings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
