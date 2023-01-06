<ul class="nav nav-light-success nav-pills" id="myTab" role="tablist">
    @php $i = 1; @endphp
    @foreach (config('langs') as $locale => $name)
        <li class="nav-item">
            <a class="nav-link {{ $i ? 'active' : '' }}" id="{{ $name }}-tab" data-toggle="pill"
                href="#{{ $name }}" role="tab" aria-controls="{{ $name }}"
                aria-selected="{{ $i ? 'true' : 'false' }}">{{ $name }}</a>
        </li>

        @php $i = 0; @endphp
    @endforeach
</ul>


<div class="tab-content mt-5" id="myTabContent">
    @php $i = 1; @endphp
    @foreach (config('langs') as $locale => $name)
        <div class="tab-pane fade {{ $i ? 'show active' : '' }}" id="{{ $name }}" role="tabpanel"
            aria-labelledby="{{ $name }}-tab">
            <!-- Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('title', __('models/sliders.fields.title') . ':') !!}
                {!! Form::text($locale . '[title]', isset($slider) ? $slider->translate($locale)->title : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' title',
                ]) !!}
            </div>

            <!-- brief Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('brief', __('models/sliders.fields.brief') . ':') !!}
                {!! Form::text($locale . '[brief]', isset($slider) ? $slider->translate($locale)->brief : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' brief',
                ]) !!}
            </div>

            <!-- description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('description', __('models/sliders.fields.description') . ':') !!}

                {!! Form::textarea($locale . '[description]', isset($slider) ? $slider->translate($locale)->description : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' description',
                ]) !!}
            </div>
            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[description]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>

        </div>

        @php $i = 0; @endphp
    @endforeach

    <!-- type Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('type', __('models/sliders.fields.type') . ':') !!}
        <div class="radio-inline">
            <label class="radio">
                {!! Form::radio('type', 1, 'Active', ['id' => 'type1']) !!}
                <span></span>
                @lang('lang.pdf')
            </label>

            <label class="radio">
                {!! Form::radio('type', 2, null, ['id' => 'type2']) !!}
                <span></span>
                @lang('lang.page')
            </label>
        </div>
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('photo', __('models/sliders.fields.photo') . ':') !!}
        <br>
        <div class="image-input image-input-outline" id="kt_image_4"
            style="background-image: url({{ asset('uploads/images/original/default.png') }})">
            <div class="image-input-wrapper"
                style="background-image: url('{{ $slider->photo_original_path ?? '' }}'); width:800px;height:300px">
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

    <!-- Link Field -->
    <div class="form-group col-sm-6 d-none" id="link">
        {!! Form::label('link', __('models/sliders.fields.link') . ':') !!}
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
    </div>

    <!-- attachment_pdf Field -->
    <div class="form-group col-sm-6 d-none" id="pdf">
        {!! Form::label('attachment_pdf', __('models/sliders.fields.attachment_pdf') . ':') !!}
        {!! Form::file('attachment_pdf', ['class' => 'form-control']) !!}
    </div>

    <!-- Sort Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('sort', __('models/sliders.fields.sort') . ':') !!}
        {!! Form::number('in_order_to', 1, ['class' => 'form-control']) !!}
    </div>



    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.sliders.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            if ($('#type1').prop("checked")) {
                $('#pdf').addClass('d-block').removeClass('d-none');
                $('#link').addClass('d-none').removeClass('d-block');

                console.log('1');
            }
            if ($('#type2').prop("checked")) {
                $('#link').removeClass('d-none').addClass('d-block');
                $('#pdf').addClass('d-none').removeClass('d-block');
                console.log('2');
            }
        });

        $('input[name=type]').on('change', function(e) {
            e.preventDefault();
            if ($('#type1').prop("checked")) {
                $('#pdf').addClass('d-block').removeClass('d-none');
                $('#link').addClass('d-none').removeClass('d-block');

                console.log('1');
            }
            if ($('#type2').prop("checked")) {
                $('#link').removeClass('d-none').addClass('d-block');
                $('#pdf').addClass('d-none').removeClass('d-block');
                console.log('2');
            }

        });
    </script>
@endsection
