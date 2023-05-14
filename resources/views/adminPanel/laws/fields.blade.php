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
            <!-- title Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('title', __('models/laws.fields.title') . ':') !!}
                {!! Form::text($locale . '[title]', isset($law) ? $law->translate($locale)->title : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' title',
                ]) !!}
            </div>

            <!-- description Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('description', __('models/laws.fields.description') . ':') !!}
                {!! Form::textarea($locale . '[description]', isset($law) ? $law->translate($locale)->description : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' description',
                ]) !!}
            </div>

        </div>
    @endforeach

    <!-- Type Field -->
    <div class="form-group col-lg-4 col-sm-12">
        {!! Form::label('type', __('models/outreaches.fields.type') . ':') !!}
        <div class="radio-inline radio_switch"
            type-active='{{ old(' type', @optional($law)->type) == 2 ? 'pdf' : 'page' }}'>
            <label class="radio type_switch" type-switch="page">
                {!! Form::radio('type', '1', 'Active') !!}
                <span></span>
                @lang('models/outreaches.fields.page')
            </label>

            <label class="radio type_switch" type-switch="pdf">
                {!! Form::radio('type', '2', null) !!}
                <span></span>
                @lang('models/outreaches.fields.attachment_pdf')
            </label>
        </div>
    </div>

    <!-- Attachment Pdf Field -->
    <div class="form-group col-lg-4 col-sm-12 type_pdf">
        {!! Form::label('attachment_pdf', __('models/outreaches.fields.attachment_pdf') . ':') !!}
        {!! Form::file('attachment_pdf', ['class' => 'form-control']) !!}
        @isset($law->attachment_pdf)
            <p>
                <a href="{{ $law->attachment_pdf ?? '' }}" target="_blank" class="btn btn-primary m-5">
                    File
                </a>
            </p>
        @endisset
    </div>

    <!-- Btn Name Field -->
    <div class="form-group col-lg-4 col-sm-12 type_page">
        {!! Form::label('btn_link', __('models/outreaches.fields.btn_link') . ' :') !!}
        {!! Form::text('btn_link', isset($law) ? $law->btn_link ?? '' : '', ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.laws.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>
