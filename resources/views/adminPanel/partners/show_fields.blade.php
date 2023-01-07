<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/partners.fields.id') . ':') !!}
    <b>{{ $partner->id }}</b>
</div>


<!-- Logo Field -->
<div class="form-group show">
    {!! Form::label('logo', __('models/partners.fields.logo') . ':') !!}
    <b>{{ $partner->logo }}</b>
</div>


<!-- Link Field -->
<div class="form-group show">
    {!! Form::label('link', __('models/partners.fields.link') . ':') !!}
    <b>{{ $partner->link }}</b>
</div>


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/partners.fields.created_at') . ':') !!}
    <b>{{ $partner->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/partners.fields.updated_at') . ':') !!}
    <b>{{ $partner->updated_at }}</b>
</div>
