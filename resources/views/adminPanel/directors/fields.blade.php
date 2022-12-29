<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', __('models/directors.fields.photo').':') !!}
    {!! Form::text('photo', isset($director)? $director->photo ??'' : '', ['class' => 'form-control','maxlength' => 10000]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/directors.fields.name').':') !!}
    {!! Form::text('name', isset($director)? $director->name ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', __('models/directors.fields.country_code').':') !!}
    {!! Form::text('country_code', isset($director)? $director->country_code ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Job Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_title', __('models/directors.fields.job_title').':') !!}
    {!! Form::text('job_title', isset($director)? $director->job_title ??'' : '', ['class' => 'form-control','minlength' => 3,'maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.directors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
