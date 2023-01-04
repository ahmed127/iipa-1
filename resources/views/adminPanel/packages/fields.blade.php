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
                {!! Form::label('name', __('models/packages.fields.name') . ':') !!}
                {!! Form::text($locale . '[name]', isset($package) ? $package->translate($locale)->name : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' name',
                ]) !!}
            </div>

            <!-- note Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('note', __('models/packages.fields.note') . ':') !!}
                {!! Form::text($locale . '[note]', isset($package) ? $package->translate($locale)->note : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' note',
                ]) !!}
            </div>

            <!-- description Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('description', __('models/packages.fields.description') . ':') !!}
                {!! Form::textarea($locale . '[description]', isset($package) ? $package->translate($locale)->description : '', [
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
    @endforeach



    <!-- Fees Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fees', __('models/packages.fields.fees') . ':') !!}
        {!! Form::number('fees', isset($package) ? $package->fees ?? '' : '', ['class' => 'form-control']) !!}
    </div>

    <!-- Office Fees Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('office_fees', __('models/packages.fields.office_fees') . ':') !!}
        {!! Form::number('office_fees', isset($package) ? $package->office_fees ?? '' : '', ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.packages.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>
