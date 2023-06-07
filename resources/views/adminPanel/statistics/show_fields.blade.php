<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/statistics.fields.id') . ':') !!}
    <b>{{ $statistic->id }}</b>
</div>


<!-- Name Field -->
<div class="form-group show">
    {!! Form::label('name', __('models/statistics.fields.name') . ':') !!}
    <b>{{ $statistic->name }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/statistics.fields.created_at') . ':') !!}
    <b>{{ $statistic->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/statistics.fields.updated_at') . ':') !!}
    <b>{{ $statistic->updated_at }}</b>
</div>
