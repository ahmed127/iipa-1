<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/packages.fields.id') . ':') !!}
    <b>{{ $package->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/packages.fields.name') . ':') !!}
    <b>{{ $package->name }}</b>
</div>


<!-- Description Field -->
<div class="form-group show">
    {!! Form::label('description', __('models/packages.fields.description') . ':') !!}
    <b>{{ $package->description }}</b>
</div>


<!-- Fees Field -->
<div class="form-group show">
    {!! Form::label('fees', __('models/packages.fields.fees') . ':') !!}
    <b>{{ $package->fees }}</b>
</div>


<!-- Office Fees Field -->
<div class="form-group show">
    {!! Form::label('office_fees', __('models/packages.fields.office_fees') . ':') !!}
    <b>{{ $package->office_fees }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/packages.fields.created_at') . ':') !!}
    <b>{{ $package->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/packages.fields.updated_at') . ':') !!}
    <b>{{ $package->updated_at }}</b>
</div>
