<div class="form-group col-sm-6">
    {!! Form::label('photo', __('models/generals.fields.photo') . ':') !!}
    <br>
    <div class="image-input image-input-outline" id="kt_image_4"
        style="background-image: url({{ asset('uploads/images/original/default.png') }})">
        <div class="image-input-wrapper" style="background-image: url('{{ $general->photo ?? '' }}')"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change"
            data-toggle="tooltip" title="" data-original-title="Change photo">
            <i class="fa fa-pen icon-sm text-muted"></i>
            <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
            <input type="hidden" name="photo_remove" />
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel"
            data-toggle="tooltip" title="Cancel photo">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove"
            data-toggle="tooltip" title="Remove photo">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
    </div>

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/generals.fields.name') . ':') !!}
    {!! Form::text('name', isset($general) ? $general->name ?? '' : '', [
        'class' => 'form-control',
        'minlength' => 3,
        'maxlength' => 191,
    ]) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nickname', __('models/generals.fields.nickname') . ':') !!}
    {!! Form::text('nickname', isset($general) ? $general->nickname ?? '' : '', [
        'class' => 'form-control',
        'minlength' => 3,
        'maxlength' => 191,
    ]) !!}
</div>

<!-- Job Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_title', __('models/generals.fields.job_title') . ':') !!}
    {!! Form::text('job_title', isset($general) ? $general->job_title ?? '' : '', [
        'class' => 'form-control',
        'minlength' => 3,
        'maxlength' => 191,
    ]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.generals.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
