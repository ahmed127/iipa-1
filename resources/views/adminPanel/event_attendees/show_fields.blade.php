<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/eventAttendees.fields.id').':') !!}
    <b>{{ $eventAttendee->id }}</b>
</div>


<!-- Event Id Field -->
<div class="form-group show">
    {!! Form::label('event_id', __('models/eventAttendees.fields.event_id').':') !!}
    <b>{{ $eventAttendee->event_id }}</b>
</div>


<!-- User Id Field -->
<div class="form-group show">
    {!! Form::label('user_id', __('models/eventAttendees.fields.user_id').':') !!}
    <b>{{ $eventAttendee->user_id }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/eventAttendees.fields.created_at').':') !!}
    <b>{{ $eventAttendee->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/eventAttendees.fields.updated_at').':') !!}
    <b>{{ $eventAttendee->updated_at }}</b>
</div>


