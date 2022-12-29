<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/contacts.fields.name') . ':') !!}
    <p>{{ $contact->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group show">
    {!! Form::label('email', __('models/contacts.fields.email') . ':') !!}
    <p>{{ $contact->email }}</p>
</div>

<!-- phone Field -->
<div class="form-group show">
    {!! Form::label('phone', __('models/contacts.fields.phone') . ':') !!}
    <p>{{ $contact->phone }}</p>
</div>

<!-- country_code Field -->
<div class="form-group show">
    {!! Form::label('country_code', __('models/contacts.fields.country_code') . ':') !!}
    <p>{{ $contact->country_code }}</p>
</div>

<!-- Message Field -->
<div class="form-group show">
    {!! Form::label('message', __('models/contacts.fields.message') . ':') !!}
    <p>{{ $contact->message }}</p>
</div>

<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/contacts.fields.created_at') . ':') !!}
    <p>{{ $contact->created_at }}</p>
</div>
