<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/consultings.fields.name') . ':') !!}
    {!! Form::text('name', isset($consulting) ? $consulting->name ?? '' : '', [
        'class' => 'form-control',
        'minlength' => 3,
        'maxlength' => 191,
    ]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/consultings.fields.email') . ':') !!}
    {!! Form::text('email', isset($consulting) ? $consulting->email ?? '' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/consultings.fields.country_code') . ':') !!}
    {!! Form::select('country_code', $countryCodes, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.country_code'),
    ]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/consultings.fields.phone') . ':') !!}
    {!! Form::text('phone', isset($consulting) ? $consulting->phone ?? '' : '', ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', __('models/consultings.fields.country_id') . ':') !!}
    {!! Form::select('country_id', $countries, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.country'),
    ]) !!}
</div>

<!-- Job Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job', __('models/consultings.fields.job') . ':') !!}
    {!! Form::text('job', null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.job'),
    ]) !!}
</div>

<!-- Consultant Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultant_type_id', __('models/consultings.fields.consultant_type_id') . ':') !!}
    {!! Form::select('consultant_type_id', $consultantTypes, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.consultant_type'),
    ]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/consultings.fields.type') . ':') !!}
    {!! Form::select('type', $types, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.type'),
    ]) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', __('models/consultings.fields.date_of_birth') . ':') !!}
    {!! Form::text('date_of_birth', isset($consulting) ? $consulting->date_of_birth ?? '' : '', [
        'class' => 'form-control',
    ]) !!}
</div>

<!-- Fav Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fav_lang', __('models/consultings.fields.fav_lang') . ':') !!}
    {!! Form::select('fav_lang', $favLangs, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.fav_lang'),
    ]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/consultings.fields.description') . ':') !!}
    {!! Form::text('description', isset($consulting) ? $consulting->description ?? '' : '', [
        'class' => 'form-control',
    ]) !!}
</div>


<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', __('models/consultings.fields.gender') . ':') !!}
    {!! Form::select('gender', $genders, null, [
        'class' => 'form-control',
        'placholder' => __('lang.select') . ' ' . __('lang.gender'),
    ]) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', __('models/consultings.fields.nationality') . ':') !!}
    {!! Form::text('nationality', isset($consulting) ? $consulting->nationality ?? '' : '', [
        'class' => 'form-control',
    ]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.consultings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
