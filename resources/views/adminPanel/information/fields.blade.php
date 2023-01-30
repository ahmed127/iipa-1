<ul class="nav nav-light-success nav-pills" id="myTab" role="tablist">

    @foreach (config('langs') as $locale => $name)
    <li class="nav-item">
        <a class="nav-link {{ request('languages') == $locale ? 'active' : '' }}" id="{{ $name }}-tab"
            data-toggle="pill" href="#{{ $name }}" role="tab" aria-controls="{{ $name }}"
            aria-selected="{{ request('languages') == $locale ? 'true' : 'false' }}">{{ $name }}</a>
    </li>
    @endforeach
</ul>
<div class="tab-content mt-5" id="myTabContent">
    @foreach (config('langs') as $locale => $name)
    @php
    $i = 2;
    @endphp
    <div class="tab-pane fade {{ request('languages') == $locale ? 'show active' : '' }}" id="{{ $name }}"
        role="tabpanel" aria-labelledby="{{ $name }}-tab">
        <!-- Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('name', __('models/information.fields.name') . ':') !!}
            {!! Form::text($locale . '[name]', isset($information) ? $information->translate($locale)->name : '', [
            'class' => 'form-control',
            'placeholder' => $name . ' name',
            ]) !!}
        </div>

        <!-- address Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('address', __('models/information.fields.address') . ':') !!}
            {!! Form::text($locale . '[address]', isset($information) ? $information->translate($locale)->address : '',
            [
            'class' => 'form-control',
            'placeholder' => $name . ' value',
            ]) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::label('logo', __('models/information.fields.logo') . ':') !!}
            <br>
            <div class="image-input image-input-outline" id="kt_image_{{ $i }}"
                style="background-image: url({{ asset('uploads/images/original/default.png') }})">
                <div class="image-input-wrapper"
                    style="background-image: url('{{ $information->translate($locale)->logo_original_path ?? '' }}')">
                </div>

                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change logo">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="{{ $locale }}[logo]" accept=".png, .jpg, .jpeg, .svg" />
                    <input type="hidden" name="{{ $locale }}[logo_remove]" />
                </label>

                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="cancel" data-toggle="tooltip" title="Cancel logo">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>

                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="remove" data-toggle="tooltip" title="Remove logo">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>

        </div>

    </div>
    @php
    $i++;
    @endphp
    @endforeach



    <!-- Fav Icon Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('logo_fav_icon', __('models/information.fields.logo_fav_icon').':') !!}

        <br>
        <div class="image-input image-input-outline" id="kt_image_2"
            style="background-image: url({{asset('uploads/images/original/default.png')}})">
            <div class="image-input-wrapper"
                style="background-image: url('{{isset($information) ? asset('uploads/images/original/'. $information->logo_fav_icon) : ''}}')">
            </div>

            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="change" data-toggle="tooltip" title="" data-original-title="Change Fav Icon">
                <i class="fa fa-pen icon-sm text-muted"></i>
                <input type="file" name="logo_fav_icon" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="fav_icon_remove" />
            </label>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="cancel" data-toggle="tooltip" title="Cancel Fav Icon">
                <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="remove" data-toggle="tooltip" title="Remove Fav Icon">
                <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>
        </div>
    </div>

    {{-- 'phone',
    'email',
    'facebook_link',
    'twitter_link',
    'instagram_link',
    'linkedin_link',
    'youtube_link',
    'facebook_visible',
    'twitter_visible',
    'instagram_visible',
    'linkedin_visible',
    'youtube_visible',
    'location_lat',
    'location_long',
    'logo_fav_icon', --}}





    <!-- phone Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('phone', __('models/information.fields.phone') . ':') !!}
        {!! Form::text('phone', isset($information) ? $information->phone : '', ['class' => 'form-control']) !!}
    </div>

    <!-- email Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('email', __('models/information.fields.email') . ':') !!}
        {!! Form::text('email', isset($information) ? $information->email : '', ['class' => 'form-control']) !!}
    </div>

    <!-- location_lat Field -->
    <div class="form-group col-sm-12 col-lg-12 float-left">
        {!! Form::label('location_lat', __('models/information.fields.location_lat') . ':') !!}
        {!! Form::text('location_lat', isset($information) ? $information->location_lat : '', [
        'class' => 'form-control',
        ]) !!}
    </div>

    <!-- location_long Field -->
    <div class="form-group col-sm-12 col-lg-12 float-left">
        {!! Form::label('location_long', __('models/information.fields.location_long') . ':') !!}
        {!! Form::text('location_long', isset($information) ? $information->location_long : '', [
        'class' => 'form-control',
        ]) !!}
    </div>

    <!-- facebook_link Field -->
    <div class="form-group col-12 d-flex">
        {!! Form::label('facebook_link', __('models/information.fields.facebook_link') . ':', ['class' => 'col-2']) !!}
        {!! Form::text('facebook_link', isset($information) ? $information->facebook_link : '', [
        'class' => 'form-control',
        ]) !!}
        <div class="col-3 m-auto radio-inline">
            <label class="radio">
                {!! Form::radio('facebook_visible', 1, 'Active') !!}
                <span></span>
                @lang('lang.visible')
            </label>
            <label class="radio">
                {!! Form::radio('facebook_visible', 0, null) !!}
                <span></span>
                @lang('lang.hidden')
            </label>
        </div>

    </div>

    <!-- twitter_link Field -->
    <div class="form-group col-12 d-flex">
        {!! Form::label('twitter_link', __('models/information.fields.twitter_link') . ':', ['class' => 'col-2']) !!}
        {!! Form::text('twitter_link', isset($information) ? $information->twitter_link : '', [
        'class' => 'form-control',
        ]) !!}
        <div class="col-3 m-auto radio-inline">
            <label class="radio">
                {!! Form::radio('twitter_visible', 1, 'Active') !!}
                <span></span>
                @lang('lang.visible')
            </label>
            <label class="radio">
                {!! Form::radio('twitter_visible', 0, null) !!}
                <span></span>
                @lang('lang.hidden')
            </label>
        </div>
    </div>

    <!-- instagram_link Field -->
    <div class="form-group col-12 d-flex">
        {!! Form::label('instagram_link', __('models/information.fields.instagram_link') . ':', ['class' => 'col-2'])
        !!}
        {!! Form::text('instagram_link', isset($information) ? $information->instagram_link : '', [
        'class' => 'form-control',
        ]) !!}
        <div class="col-3 m-auto radio-inline">
            <label class="radio">
                {!! Form::radio('instagram_visible', 1, 'Active') !!}
                <span></span>
                @lang('lang.visible')
            </label>
            <label class="radio">
                {!! Form::radio('instagram_visible', 0, null) !!}
                <span></span>
                @lang('lang.hidden')
            </label>
        </div>
    </div>

    <!-- linkedin_link Field -->
    <div class="form-group col-12 d-flex">
        {!! Form::label('linkedin_link', __('models/information.fields.linkedin_link') . ':', ['class' => 'col-2']) !!}
        {!! Form::text('linkedin_link', isset($information) ? $information->linkedin_link : '', [
        'class' => 'form-control',
        ]) !!}
        <div class="col-3 m-auto radio-inline">
            <label class="radio">
                {!! Form::radio('linkedin_visible', 1, 'Active') !!}
                <span></span>
                @lang('lang.visible')
            </label>
            <label class="radio">
                {!! Form::radio('linkedin_visible', 0, null) !!}
                <span></span>
                @lang('lang.hidden')
            </label>
        </div>
    </div>

    <!-- youtube_link Field -->
    <div class="form-group col-12 d-flex">
        {!! Form::label('youtube_link', __('models/information.fields.youtube_link') . ':', ['class' => 'col-2']) !!}
        {!! Form::text('youtube_link', isset($information) ? $information->youtube_link : '', [
        'class' => 'form-control',
        ]) !!}
        <div class="col-3 m-auto radio-inline">
            <label class="radio">
                {!! Form::radio('youtube_visible', 1, 'Active') !!}
                <span></span>
                @lang('lang.visible')
            </label>
            <label class="radio">
                {!! Form::radio('youtube_visible', 0, null) !!}
                <span></span>
                @lang('lang.hidden')
            </label>
        </div>
    </div>












    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.information.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>