<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/jobs.fields.id') . ':') !!}
    <b>{{ $job->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/jobs.fields.name') . ':') !!}
    <b>{{ $job->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/jobs.fields.created_at') . ':') !!}
    <b>{{ $job->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/jobs.fields.updated_at') . ':') !!}
    <b>{{ $job->updated_at }}</b>
</div>
