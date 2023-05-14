<div class="row">
    @foreach (config('langs') as $locale => $name)
        <div class="inner flex-column col-6">
            <h3 class="text-center text-danger">{{ $name }}</h3>
            <!-- Title Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('title', __('models/financials.fields.title') . ':') !!}
                {!! Form::text($locale . '[title]', isset($financial) ? $financial->title ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Brief Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('brief', __('models/financials.fields.brief') . ':') !!}
                {!! Form::text($locale . '[brief]', isset($financial) ? $financial->brief ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <!-- Description Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('description', __('models/financials.fields.description') . ':') !!}
                {!! Form::text($locale . '[description]', isset($financial) ? $financial->description ?? '' : '', [
                    'class' => 'form-control',
                ]) !!}
            </div>

        </div>
    @endforeach
</div>


<!-- photo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('photo', __('models/financials.fields.photo') . ':') !!}
    <br>
    <div class="image-input image-input-outline" id="kt_image_4"
        style="background-image: url({{ asset('uploads/images/original/default.png') }})">
        <div class="image-input-wrapper"
            style="background-image: url('{{ $financial->photo_original_path ?? '' }}'); width:800px;height:300px">
        </div>

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

<!-- type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('type', __('models/financials.fields.type') . ':') !!}
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



<!-- Link Field -->
<div class="form-group col-sm-6 d-none" id="link">
    {!! Form::label('link', __('models/sliders.fields.link') . ':') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- attachment_pdf Field -->
<div class="form-group col-sm-6 d-none" id="pdf">
    {!! Form::label('attachment_pdf', __('models/financials.fields.attachment_pdf') . ':') !!}
    {!! Form::file('attachment_pdf', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adminPanel.financials.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>






@section('scripts')
    <script>
        $(document).ready(function() {
            if ($('#type1').prop("checked")) {
                $('#pdf').addClass('d-block').removeClass('d-none');
                $('#link').addClass('d-none').removeClass('d-block');
            }
            if ($('#type2').prop("checked")) {
                $('#link').removeClass('d-none').addClass('d-block');
                $('#pdf').addClass('d-none').removeClass('d-block')
            }
        });

        $('input[name=type]').on('change', function(e) {
            e.preventDefault();
            if ($('#type1').prop("checked")) {
                $('#pdf').addClass('d-block').removeClass('d-none');
                $('#link').addClass('d-none').removeClass('d-block');
            }
            if ($('#type2').prop("checked")) {
                $('#link').removeClass('d-none').addClass('d-block');
                $('#pdf').addClass('d-none').removeClass('d-block');
            }

        });
    </script>
@endsection
