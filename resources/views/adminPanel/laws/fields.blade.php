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

    <!-- Attachment Pdf Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('attachment_pdf', __('models/laws.fields.attachment_pdf') . ':') !!}
        {!! Form::file('attachment_pdf', ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.laws.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>
