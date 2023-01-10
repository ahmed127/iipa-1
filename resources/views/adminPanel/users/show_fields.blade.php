<!-- full_name Field -->
<div class=" form-group show">
    {!! Form::label('full_name', __('models/users.fields.full_name') . ':') !!}
    <b>{{ $user->full_name }}</b>
</div>

<!-- country_code Field -->
<div class=" form-group show">
    {!! Form::label('country_code', __('lang.country_code') . ':') !!}
    <b>{{ $user->country_code }}</b>
</div>

<!-- phone Field -->
<div class=" form-group show">
    {!! Form::label('phone', __('models/users.fields.phone') . ':') !!}
    <b>{{ $user->phone }}</b>
</div>

<!-- email Field -->
<div class=" form-group show">
    {!! Form::label('email', __('models/users.fields.email') . ':') !!}
    <b>{{ $user->email }}</b>
</div>



<!-- Created At Field -->
<div class=" form-group show">
    {!! Form::label('created_at', __('models/users.fields.created_at') . ':') !!}
    <b>{{ $user->created_at }}</b>
</div>
