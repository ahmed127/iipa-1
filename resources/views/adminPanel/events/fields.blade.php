<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/events.fields.title').':') !!}
    {!! Form::text('title', isset($event)? $event->title ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Brief Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brief', __('models/events.fields.brief').':') !!}
    {!! Form::text('brief', isset($event)? $event->brief ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/events.fields.description').':') !!}
    {!! Form::text('description', isset($event)? $event->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', __('models/events.fields.date').':') !!}
    {!! Form::text('date', isset($event)? $event->date ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.events.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
