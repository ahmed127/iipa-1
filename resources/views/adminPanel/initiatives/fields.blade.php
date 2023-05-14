<div class="row">

    <!-- Type Field -->
    <div class="form-group col-lg-4 col-sm-12">
        {!! Form::label('type', __('models/initiatives.fields.type') . ':') !!}
        <div class="radio-inline radio_switch"
            type-active='{{ old(' type', @optional($initiative)->type) == 2 ? 'pdf' : 'page' }}'>
            <label class="radio type_switch" type-switch="page">
                {!! Form::radio('type', '1', 'Active') !!}
                <span></span>
                @lang('models/initiatives.fields.page')
            </label>

            <label class="radio type_switch" type-switch="pdf">
                {!! Form::radio('type', '2', null) !!}
                <span></span>
                @lang('models/initiatives.fields.attachment_pdf')
            </label>
        </div>
    </div>
    <!-- Photo Field -->
    <div class="form-group col-lg-4 col-sm-12">
        {!! Form::label('photo', __('models/initiatives.fields.photo') . ':') !!}

        <br>
        <div class="image-input image-input-outline" id="kt_image_4"
            style="background-image: url({{ asset('uploads/images/original/default.png') }})">
            <div class="image-input-wrapper"
                style="width: 371px; height: 80px;background-image: url({{ isset($initiative) ? $initiative->photo : '' }})">
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
    <!-- Attachment Pdf Field -->
    <div class="form-group col-lg-4 col-sm-12 type_pdf">
        {!! Form::label('attachment_pdf', __('models/initiatives.fields.attachment_pdf') . ':') !!}
        {!! Form::file('attachment_pdf', ['class' => 'form-control']) !!}
        @isset($initiative->attachment_pdf)
            <p>
                <a href="{{ $initiative->attachment_pdf ?? '' }}" target="_blank">
                    File
                </a>
            </p>
        @endisset
    </div>


    @foreach (config('langs') as $locale => $name)
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger">{{ __('crud.' . $name) }}</h2>
            <!-- Title Field -->
            <div class="form-group">
                {!! Form::label('title', __('models/initiatives.fields.title') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[title]', isset($initiative) ? $initiative->translate($locale)->title ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Brief Field -->
            <div class="form-group ">
                {!! Form::label('brief', __('models/initiatives.fields.brief') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[brief]', isset($initiative) ? $initiative->translate($locale)->brief ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Name Field -->
            <div class="form-group type_page">
                {!! Form::label('name', __('models/initiatives.fields.name') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[name]', isset($initiative) ? $initiative->translate($locale)->name ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page">
                {!! Form::label('meta_title', __('models/initiatives.fields.meta_title') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea(
                    $locale . '[meta_title]',
                    isset($initiative) ? $initiative->translate($locale)->meta_title ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page">
                {!! Form::label(
                    'meta_description',
                    __('models/initiatives.fields.meta_description') .
                        '
                            ' .
                        __('crud.' . $name) .
                        ':',
                ) !!}
                {!! Form::textarea(
                    $locale . '[meta_description]',
                    isset($initiative) ? $initiative->translate($locale)->meta_description ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page">
                {!! Form::label(
                    'meta_keywords',
                    __('models/initiatives.fields.meta_keywords') . ' ' . __('crud.' . $name) . ':',
                ) !!}
                {!! Form::textarea(
                    $locale . '[meta_keywords]',
                    isset($initiative) ? $initiative->translate($locale)->meta_keywords ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>

            <!-- Description Field -->
            <div class="form-group type_page">
                {!! Form::label('description', __('models/initiatives.fields.description') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea(
                    $locale . '[description]',
                    isset($initiative) ? $initiative->translate($locale)->description ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>

            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[description]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>

            <!-- Strategic Goal Field -->
            <div class="form-group type_page">
                {!! Form::label(
                    'strategic_goal',
                    __('models/initiatives.fields.strategic_goal') . ' ' . __('crud.' . $name) . ':',
                ) !!}
                {!! Form::textarea(
                    $locale . '[strategic_goal]',
                    isset($initiative) ? $initiative->translate($locale)->strategic_goal ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>

            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[strategic_goal]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>

            <!-- Target Group Field -->
            <div class="form-group type_page">
                {!! Form::label('target_group', __('models/initiatives.fields.target_group') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea(
                    $locale . '[target_group]',
                    isset($initiative) ? $initiative->translate($locale)->target_group ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>

            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[target_group]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>
        </div>
    @endforeach

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.initiatives.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
