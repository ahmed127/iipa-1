<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/outreaches.fields.title').':') !!}
    {!! Form::text('title', isset($outreach)? $outreach->title ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Brief Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brief', __('models/outreaches.fields.brief').':') !!}
    {!! Form::text('brief', isset($outreach)? $outreach->brief ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/outreaches.fields.description').':') !!}
    {!! Form::text('description', isset($outreach)? $outreach->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', __('models/outreaches.fields.photo').':') !!}
    {!! Form::text('photo', isset($outreach)? $outreach->photo ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Attachment Pdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment_pdf', __('models/outreaches.fields.attachment_pdf').':') !!}
    {!! Form::text('attachment_pdf', isset($outreach)? $outreach->attachment_pdf ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/outreaches.fields.type').':') !!}
    {!! Form::text('type', isset($outreach)? $outreach->type ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.outreaches.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
