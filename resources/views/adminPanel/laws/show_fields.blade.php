<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/laws.fields.id').':') !!}
    <b>{{ $law->id }}</b>
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/laws.fields.title').':') !!}
    <b>{{ $law->title }}</b>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/laws.fields.description').':') !!}
    <b>{{ $law->description }}</b>
</div>


<!-- Attachment Pdf Field -->
<div class="form-group">
    {!! Form::label('attachment_pdf', __('models/laws.fields.attachment_pdf').':') !!}
    <b>{{ $law->attachment_pdf }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/laws.fields.created_at').':') !!}
    <b>{{ $law->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/laws.fields.updated_at').':') !!}
    <b>{{ $law->updated_at }}</b>
</div>


