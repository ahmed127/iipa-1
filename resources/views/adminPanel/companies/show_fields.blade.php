<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/companies.fields.id') . ':') !!}
    <b>{{ $company->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/companies.fields.name') . ':') !!}
    <b>{{ $company->name }}</b>
</div>


<!-- Website Field -->
<div class="form-group show">
    {!! Form::label('website', __('models/companies.fields.website') . ':') !!}
    <b>{{ $company->website }}</b>
</div>


<!-- Location Field -->
<div class="form-group show">
    {!! Form::label('location', __('models/companies.fields.location') . ':') !!}
    <b>{{ $company->location }}</b>
</div>


<!-- Type Field -->
<div class="form-group show">
    {!! Form::label('type', __('models/companies.fields.type') . ':') !!}
    <b>{{ $company->type }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/companies.fields.created_at') . ':') !!}
    <b>{{ $company->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/companies.fields.updated_at') . ':') !!}
    <b>{{ $company->updated_at }}</b>
</div>
