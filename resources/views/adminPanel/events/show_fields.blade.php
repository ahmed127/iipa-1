<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/events.fields.id').':') !!}
    <b>{{ $event->id }}</b>
</div>


<!-- Title Field -->
<div class="form-group show">
    {!! Form::label('title', __('models/events.fields.title').':') !!}
    <b>{{ $event->title }}</b>
</div>


<!-- Brief Field -->
<div class="form-group show">
    {!! Form::label('brief', __('models/events.fields.brief').':') !!}
    <b>{{ $event->brief }}</b>
</div>


<!-- Description Field -->
<div class="form-group show">
    {!! Form::label('description', __('models/events.fields.description').':') !!}
    <b>{{ $event->description }}</b>
</div>


<!-- Date Field -->
<div class="form-group show">
    {!! Form::label('date', __('models/events.fields.date').':') !!}
    <b>{{ $event->date }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/events.fields.created_at').':') !!}
    <b>{{ $event->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/events.fields.updated_at').':') !!}
    <b>{{ $event->updated_at }}</b>
</div>


