<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/regulations.fields.title').':') !!}
    {!! Form::text('title', isset($regulation)? $regulation->title ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Brief Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brief', __('models/regulations.fields.brief').':') !!}
    {!! Form::text('brief', isset($regulation)? $regulation->brief ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/regulations.fields.description').':') !!}
    {!! Form::text('description', isset($regulation)? $regulation->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', __('models/regulations.fields.photo').':') !!}
    {!! Form::text('photo', isset($regulation)? $regulation->photo ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Pdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_pdf', __('models/regulations.fields.attachment_pdf').':') !!}
    {!! Form::text('attachment_pdf', isset($regulation)? $regulation->attachment_pdf ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/regulations.fields.type').':') !!}
    {!! Form::text('type', isset($regulation)? $regulation->type ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.regulations.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
