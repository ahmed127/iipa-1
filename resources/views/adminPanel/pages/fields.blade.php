<div class="row">

    <!-- Type Field -->
    <div class="form-group col-lg-4 col-sm-12 d-none">
        {!! Form::label('type', __('models/pages.fields.type') . ':') !!}
        <div class="radio-inline radio_switch"
            type-active='{{ old(' type', @optional($page)->type) == 3 ? 'image' : 'page' }}'>
            <label class="radio type_switch" type-switch="page">
                {!! Form::radio('type', '1', 'Active') !!}
                <span></span>
                @lang('models/pages.fields.page')
            </label>

            {{-- <label class="radio type_switch" type-switch="pdf">
                {!! Form::radio('type', "2", null) !!}
                <span></span>
                @lang('models/pages.fields.attachment_pdf')
            </label> --}}

            <label class="radio type_switch" type-switch="image">
                {!! Form::radio('type', '3', null) !!}
                <span></span>
                @lang('models/pages.fields.image')
            </label>
        </div>
    </div>
    <!-- Photo Field -->
    <div class="form-group col-lg-12 col-sm-12">
        {!! Form::label('photo', __('models/pages.fields.photo') . ':') !!}

        <br>
        <div class="image-input image-input-outline" id="kt_image_4"
            style="background-image: url('{{ asset('uploads/images/original/default.png') }}')">
            <div class="image-input-wrapper"
                style="width: 371px; height: 80px;background-image: url('{{ isset($page) ? $page->photo : '' }}')">
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

    <!-- Image Field -->
    <div class="form-group col-lg-4 col-sm-12 type_image">
        {!! Form::label('image', __('models/pages.fields.image') . ':') !!}

        <br>
        <div class="image-input image-input-outline" id="kt_image_3"
            style="background-image: url({{ asset('uploads/images/original/default.png') }})">
            <div class="image-input-wrapper" style="background-image: url({{ isset($page) ? $page->image : '' }})">
            </div>

            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                data-action="change" data-toggle="tooltip" title="" data-original-title="Change image">
                <i class="fa fa-pen icon-sm text-muted"></i>
                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
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
    {{-- <div class="form-group col-lg-4 col-sm-12 type_pdf">
        {!! Form::label('attachment_pdf', __('models/pages.fields.attachment_pdf').':') !!}
        {!! Form::file('attachment_pdf', ['class' =>
        'form-control']) !!}
        @isset($page->attachment_pdf)
        <p>
            <a href="{{ $page->attachment_pdf??''}}" target="_blank">
                File
            </a>
        </p>
        @endisset
    </div> --}}

    @foreach (config('langs') as $locale => $name)
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger">{{ __('crud.' . $name) }}</h2>

            <!-- Title Field -->
            <div class="form-group">
                {!! Form::label('title', __('models/pages.fields.title') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[title]', isset($page) ? $page->translate($locale)->title ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Brief Field -->
            <div class="form-group">
                {!! Form::label('brief', __('models/pages.fields.brief') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[brief]', isset($page) ? $page->translate($locale)->brief ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Name Field -->
            <div class="form-group type_page">
                {!! Form::label('name', __('models/pages.fields.name') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::text($locale . '[name]', isset($page) ? $page->translate($locale)->name ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page ">
                {!! Form::label('meta_title', __('models/pages.fields.meta_title') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea($locale . '[meta_title]', isset($page) ? $page->translate($locale)->meta_title ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page ">
                {!! Form::label(
                    'meta_description',
                    __('models/pages.fields.meta_description') .
                        '
                                                                                                                                                                                                                            ' .
                        __('crud.' . $name) .
                        ':',
                ) !!}
                {!! Form::textarea(
                    $locale . '[meta_description]',
                    isset($page) ? $page->translate($locale)->meta_description ?? '' : '',
                    [
                        'class' => 'form-control',
                    ],
                ) !!}
            </div>
            <!-- Meta Title Field -->
            <div class="form-group type_page ">
                {!! Form::label('meta_keywords', __('models/pages.fields.meta_keywords') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea(
                    $locale . '[meta_keywords]',
                    isset($page) ? $page->translate($locale)->meta_keywords ?? '' : '',
                    [
                        'class' => 'form-control',
                    ],
                ) !!}
            </div>

            <!-- Description Field -->
            <div class="form-group type_page type_page_description">
                {!! Form::label(
                    'description',
                    __('models/pages.fields.description') . ' ' . __('crud.' . $name) . ' ' . '(' . __('lang.home') . ')' . ':',
                ) !!}
                {!! Form::textarea($locale . '[description]', isset($page) ? $page->translate($locale)->description ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[description]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>

        </div>
    @endforeach

</div>

<div class="sections d-flex">
    <a href="{{ route('adminPanel.pages.paragraphs.index', $page->id) }}"
        class="btn btn-primary m-auto">@lang('lang.page_sections')</a>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.pages.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
