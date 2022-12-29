<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/regulations.fields.id').':') !!}
    <b>{{ $regulation->id }}</b>
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/regulations.fields.title').':') !!}
    <b>{{ $regulation->title }}</b>
</div>


<!-- Brief Field -->
<div class="form-group">
    {!! Form::label('brief', __('models/regulations.fields.brief').':') !!}
    <b>{{ $regulation->brief }}</b>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/regulations.fields.description').':') !!}
    <b>{{ $regulation->description }}</b>
</div>


<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', __('models/regulations.fields.photo').':') !!}
    <b>{{ $regulation->photo }}</b>
</div>


<!-- Attachment Pdf Field -->
<div class="form-group">
    {!! Form::label('attachment_pdf', __('models/regulations.fields.attachment_pdf').':') !!}
    <b>{{ $regulation->attachment_pdf }}</b>
</div>


<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/regulations.fields.type').':') !!}
    <b>{{ $regulation->type }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/regulations.fields.created_at').':') !!}
    <b>{{ $regulation->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/regulations.fields.updated_at').':') !!}
    <b>{{ $regulation->updated_at }}</b>
</div>


