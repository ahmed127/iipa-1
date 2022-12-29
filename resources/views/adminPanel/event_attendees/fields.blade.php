<!-- Event Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_id', __('models/eventAttendees.fields.event_id').':') !!}
    {!! Form::text('event_id', isset($eventAttendee)? $eventAttendee->event_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/eventAttendees.fields.user_id').':') !!}
    {!! Form::text('user_id', isset($eventAttendee)? $eventAttendee->user_id ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.eventAttendees.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
