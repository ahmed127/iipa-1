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
                {!! Form::label('title', __('models/events.fields.title') . ':') !!}
                {!! Form::text($locale . '[title]', isset($event) ? $event->translate($locale)->title : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' title',
                ]) !!}
            </div>
            <!-- brief Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('brief', __('models/events.fields.brief') . ':') !!}
                {!! Form::textarea($locale . '[brief]', isset($event) ? $event->translate($locale)->brief : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' brief',
                ]) !!}
            </div>
            <!-- description Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('description', __('models/events.fields.description') . ':') !!}
                {!! Form::textarea($locale . '[description]', isset($event) ? $event->translate($locale)->description : '', [
                    'class' => 'form-control',
                    'placeholder' => $name . ' description',
                ]) !!}
            </div>
            {{-- <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[description]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script> --}}
        </div>
    @endforeach


    <!-- Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('date', __('models/events.fields.date') . ':') !!}
        {!! Form::date('date', isset($event) ? $event->date ?? '' : '', ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.events.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>


</div>
