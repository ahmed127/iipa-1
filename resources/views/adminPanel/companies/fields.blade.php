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
            <!-- name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('name', __('models/companies.fields.name') . ':') !!}
                {!! Form::text($locale . '[name]', isset($company) ? $company->translate($locale)->name : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' name',
                ]) !!}
            </div>

            <!-- location Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('location', __('models/companies.fields.location') . ':') !!}
                {!! Form::text($locale . '[location]', isset($company) ? $company->translate($locale)->location : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' location',
                ]) !!}
            </div>

        </div>
    @endforeach

    <!-- Website Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('website', __('models/companies.fields.website') . ':') !!}
        {!! Form::text('website', isset($company) ? $company->website ?? '' : '', ['class' => 'form-control']) !!}
    </div>


    <!-- Type Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('type', __('models/companies.fields.type') . ':') !!}
        <div class="radio-inline">
            <label class="radio">
                {!! Form::radio('type', '1', 'Active') !!}
                <span></span>
                @lang('lang.authorized')
            </label>

            <label class="radio">
                {!! Form::radio('type', '2', null) !!}
                <span></span>
                @lang('lang.not_authorized')
            </label>
        </div>
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.companies.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>


</div>
