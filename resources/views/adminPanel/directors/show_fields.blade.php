<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/directors.fields.id') . ':') !!}
    <b>{{ $director->id }}</b>
</div>


<!-- Photo Field -->
<div class="form-group show">
    {!! Form::label('photo', __('models/directors.fields.photo') . ':') !!}
    <b><img src="{{ $director->photo }}" alt="{{ $director->name }}" width="200"></b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/directors.fields.name') . ':') !!}
    <b>{{ $director->name }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group show">
    {!! Form::label('country_code', __('models/directors.fields.country_code') . ':') !!}
    <b>{{ $director->country_code }}</b>
</div>


<!-- Job Title Field -->
<div class="form-group show">
    {!! Form::label('job_title', __('models/directors.fields.job_title') . ':') !!}
    <b>{{ $director->job_title }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/directors.fields.created_at') . ':') !!}
    <b>{{ $director->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/directors.fields.updated_at') . ':') !!}
    <b>{{ $director->updated_at }}</b>
</div>
