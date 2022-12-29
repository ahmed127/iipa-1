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
                {!! Form::label('name', __('models/countries.fields.name') . ':') !!}
                {!! Form::text($locale . '[name]', isset($country) ? $country->translate($locale)->name : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' name',
                ]) !!}
            </div>
        </div>
    @endforeach



    <!-- code Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('code', __('models/countries.fields.code') . ':') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.countries.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>


</div>
