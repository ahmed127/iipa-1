<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/recruitments.fields.id') . ':') !!}
    <b>{{ $recruitment->id }}</b>
</div>


<!-- user Field -->
<div class="form-group show">
    {!! Form::label('user', __('lang.user') . ':') !!}
    <b>
        @if ($recruitment->user)
            <a href="{{ route('adminPanel.users.show', $recruitment->user->id) }}">
                {{ $recruitment->user->full_name }}
            </a>
        @else
            {{ __('lang.guest') }}
        @endif
    </b>
</div>

<!-- Full Name Field -->
<div class="form-group show">
    {!! Form::label('full_name', __('models/recruitments.fields.full_name') . ':') !!}
    <b>{{ $recruitment->full_name }}</b>
</div>


<!-- Email Field -->
<div class="form-group show">
    {!! Form::label('email', __('models/recruitments.fields.email') . ':') !!}
    <b>{{ $recruitment->email }}</b>
</div>


<!-- Country Code Field -->
<div class="form-group show">
    {!! Form::label('country_code', __('models/recruitments.fields.country_code') . ':') !!}
    <b>{{ $recruitment->country_code }}</b>
</div>


<!-- Phone Field -->
<div class="form-group show">
    {!! Form::label('phone', __('models/recruitments.fields.phone') . ':') !!}
    <b>{{ $recruitment->phone }}</b>
</div>


<!-- Attachment Cv Field -->
<div class="form-group show">
    {!! Form::label('attachment_cv', __('models/recruitments.fields.attachment_cv') . ':') !!}
    <a href="{{ $recruitment->attachment_cv }}" target="_blank" class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/recruitments.fields.created_at') . ':') !!}
    <b>{{ $recruitment->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/recruitments.fields.updated_at') . ':') !!}
    <b>{{ $recruitment->updated_at }}</b>
</div>
