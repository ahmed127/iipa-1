<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/generals.fields.id') . ':') !!}
    <b>{{ $general->id }}</b>
</div>


<!-- Photo Field -->
<div class="form-group show">
    {!! Form::label('photo', __('models/generals.fields.photo') . ':') !!}
    <b><img src="{{ $general->photo }}" alt="{{ $general->name }}" width="200"></b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/generals.fields.name') . ':') !!}
    <b>{{ $general->name }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group show">
    {!! Form::label('country_code', __('models/generals.fields.country_code') . ':') !!}
    <b>{{ $general->country_code }}</b>
</div>


<!-- Job Title Field -->
<div class="form-group show">
    {!! Form::label('job_title', __('models/generals.fields.job_title') . ':') !!}
    <b>{{ $general->job_title }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/generals.fields.created_at') . ':') !!}
    <b>{{ $general->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/generals.fields.updated_at') . ':') !!}
    <b>{{ $general->updated_at }}</b>
</div>
