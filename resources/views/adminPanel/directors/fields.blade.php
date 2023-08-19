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
        <div class="tab-pane fade {{ request('languages') == $locale ? 'show active' : '' }}" id="{{ $name }}"
            role="tabpanel" aria-labelledby="{{ $name }}-tab">
            <!-- Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('name', __('models/directors.fields.name') . ':') !!}
                {!! Form::text($locale . '[name]', isset($director) ? $director->translate($locale)->name : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' name',
                ]) !!}
            </div>

            <!-- Nickname Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nickname', __('models/directors.fields.nickname') . ':') !!}
                {!! Form::text($locale . '[nickname]', isset($director) ? $director->translate($locale)->nickname : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' nickname',
                ]) !!}
            </div>

            <!-- Job Title Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('job_title', __('models/directors.fields.job_title') . ':') !!}
                {!! Form::text($locale . '[job_title]', isset($director) ? $director->translate($locale)->job_title : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' job title',
                ]) !!}
            </div>
        </div>
    @endforeach


    <!-- Period Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('period', __('models/directors.fields.period') . ':') !!}
        {!! Form::text('period', isset($director) ? $director->period ?? '' : '', [
            'class' => 'form-control',
            'minlength' => 3,
            'maxlength' => 191,
        ]) !!}
    </div>

    <!-- Photo Field -->
    <div class="form-group col-sm-6">

        {!! Form::label('photo', __('models/directors.fields.photo') . ':') !!}

        <br>

        <div class="image-input image-input-outline" id="kt_image_4"
            style="background-image: url({{ asset('uploads/images/original/default.png') }})">
            <div class="image-input-wrapper"
                style="background-image: url('{{ $director->photo_original_path ?? '' }}')">
            </div>

            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="change" data-toggle="tooltip" title="" data-original-title="Change photo">
                <i class="fa fa-pen icon-sm text-muted"></i>
                <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="photo_remove" />
            </label>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="cancel" data-toggle="tooltip" title="Cancel photo">
                <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="remove" data-toggle="tooltip" title="Remove photo">
                <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>
        </div>


    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.directors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>


</div>
