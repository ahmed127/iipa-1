<div class="row">

    @foreach (config('langs') as $locale => $name)
        <!-- title Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('title', $name . ' ' . __('models/paragraphs.fields.title') . ':') !!}
            {!! Form::text($locale . '[title]', isset($paragraph) ? $paragraph->translateOrNew($locale)->title : '', [
                'class' => 'form-control',
                'placeholder' => $name . ' title',
            ]) !!}
        </div>

        <!-- Text Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('text', $name . ' ' . __('models/paragraphs.fields.text') . ':') !!}
            {!! Form::textarea($locale . '[text]', isset($paragraph) ? $paragraph->translateOrNew($locale)->text : '', [
                'class' => 'form-control',
                'placeholder' => $name . ' text',
            ]) !!}
            <script type="text/javascript">
                CKEDITOR.replace("{{ $locale . '[text]' }}", {
                    filebrowserUploadUrl: "{{ route('adminPanel.ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            </script>
        </div>
    @endforeach

    <!-- Submit Field -->
    <div class="form-group col-sm-6">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('adminPanel.pages.paragraphs.index', isset($paragraph) ? $paragraph->page_id : $page->id) }}"
            class="btn btn-default">@lang('crud.cancel')</a>
    </div>
</div>
