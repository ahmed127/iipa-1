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


@for ($i = 0; $i < 3; $i++)
    <!-- Fees Name Field -->
    <div class="form-group show">
        {!! Form::label('fees', __('models/packages.fields.fees_name') . ' ' . $i + 1 . ':') !!}
        <b>{{ $package->fees[$i]['name'][app()->getLocale()] }}</b>
    </div>


    <!-- Fees Amount Field -->
    <div class="form-group show">
        {!! Form::label('fees_amount', __('models/packages.fields.fees_amount') . ' ' . $i + 1 . ':') !!}
        <b>{{ $package->fees[$i]['amount'] }}</b>
    </div>
@endfor


<!-- Note Field -->
<div class="form-group show">
    {!! Form::label('note', __('models/packages.fields.note') . ':') !!}
    <b>{{ $package->note }}</b>
</div>


<!-- Description Field -->
<div class="form-group show">
    {!! Form::label('description', __('models/packages.fields.description') . ':') !!}
    <b>{!! $package->description !!}</b>
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
