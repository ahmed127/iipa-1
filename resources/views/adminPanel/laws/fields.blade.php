<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/laws.fields.title').':') !!}
    {!! Form::text('title', isset($law)? $law->title ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/laws.fields.description').':') !!}
    {!! Form::text('description', isset($law)? $law->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Pdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_pdf', __('models/laws.fields.attachment_pdf').':') !!}
    {!! Form::text('attachment_pdf', isset($law)? $law->attachment_pdf ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.laws.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
