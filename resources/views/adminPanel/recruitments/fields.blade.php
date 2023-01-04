<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', __('models/recruitments.fields.full_name').':') !!}
    {!! Form::text('full_name', isset($recruitment)? $recruitment->full_name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/recruitments.fields.email').':') !!}
    {!! Form::email('email', isset($recruitment)? $recruitment->email ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', 'Country Code:') !!}
    {!! Form::select('country_code',  $country_codes ??[], null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/recruitments.fields.phone').':') !!}
    {!! Form::text('phone', isset($recruitment)? $recruitment->phone ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Cv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_cv', __('models/recruitments.fields.attachment_cv').':') !!}
    {!! Form::file('attachment_cv') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.recruitments.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
