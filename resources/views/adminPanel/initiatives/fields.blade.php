<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/initiatives.fields.name').':') !!}
    {!! Form::text('name', isset($initiative)? $initiative->name ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/initiatives.fields.description').':') !!}
    {!! Form::text('description', isset($initiative)? $initiative->description ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.initiatives.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
