<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/packages.fields.id') . ':') !!}
    <b>{{ $package->id }}</b>
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


@foreach (config('langs') as $locale => $name)
    <!-- Name Field -->
    <div class="form-group show">
        {!! Form::label('name', $name . ' ' . __('models/packages.fields.name') . ':') !!}
        <b>{{ $package->translate($locale)->name }}</b>
    </div>


    <!-- Description Field -->
    <div class="form-group show">
        {!! Form::label('description', $name . ' ' . __('models/packages.fields.description') . ':') !!}
        <b>{!! $package->translate($locale)->description !!}</b>
    </div>
@endforeach
