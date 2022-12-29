<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', __('models/partners.fields.logo').':') !!}
    {!! Form::text('logo', isset($partner)? $partner->logo ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', __('models/partners.fields.link').':') !!}
    {!! Form::text('link', isset($partner)? $partner->link ??'' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.partners.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
