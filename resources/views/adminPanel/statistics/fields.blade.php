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
            <!-- Title Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('title', __('models/statistics.fields.title') . ':') !!}
                {!! Form::text($locale . '[title]', isset($statistic) ? $statistic->translate($locale)->title : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' title',
                ]) !!}
            </div>

            <!-- Description Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('description', __('models/statistics.fields.description') . ' ' . __('crud.' . $name) . ':') !!}
                {!! Form::textarea(
                    $locale . '[description]',
                    isset($statistic) ? $statistic->translate($locale)->description ?? '' : '',
                    ['class' => 'form-control'],
                ) !!}
            </div>
        </div>
    @endforeach



    <!-- value Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('value', __('models/statistics.fields.value') . ':') !!}
        {!! Form::text('value', null, ['class' => 'form-control']) !!}
    </div>

    <!-- symbol Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('symbol', __('models/statistics.fields.symbol') . ':') !!}
        {!! Form::text('symbol', null, ['class' => 'form-control']) !!}
    </div>

    <!-- color Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('color', __('models/statistics.fields.color') . ':') !!}
        {!! Form::color('color', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.statistics.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>


</div>
