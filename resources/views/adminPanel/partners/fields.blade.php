<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', __('models/partners.fields.logo') . ':') !!}
    <br>
    <div class="image-input image-input-outline" id="kt_image_4"
        style="background-image: url({{ asset('uploads/images/original/default.png') }})">
        <div class="image-input-wrapper" style="background-image: url('{{ $partner->logo ?? '' }}')"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change"
            data-toggle="tooltip" title="" data-original-title="Change logo">
            <i class="fa fa-pen icon-sm text-muted"></i>
            <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
            <input type="hidden" name="logo_remove" />
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel"
            data-toggle="tooltip" title="Cancel logo">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove"
            data-toggle="tooltip" title="Remove logo">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
    </div>

</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', __('models/partners.fields.link') . ':') !!}
    {!! Form::text('link', isset($partner) ? $partner->link ?? '' : '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.partners.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
