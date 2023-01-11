<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/regulations.fields.id') . ':') !!}
    <b>{{ $regulation->id }}</b>
</div>

<!-- Photo Field -->
<div class="form-group show">
    {!! Form::label('photo', __('models/regulations.fields.photo') . ':') !!}
    <img onError="this.onerror=null;this.src='{{ asset('uploads/images/original/default.png') }}';"
        src="{{ $regulation->photo_thumbnail_path }}" alt="{{ $regulation->name }}" width="300">
</div>
<div class="row w-100">
    @foreach (config('langs') as $locale => $name)
        <div class="inner flex-column col-6">
            <!-- Title Field -->
            <div class="form-group col-12 show">
                {!! Form::label('title', $name . ' ' . __('models/regulations.fields.title') . ':') !!}
                <b>{{ $regulation->title }}</b>
            </div>
            <!-- Brief Field -->
            <div class="form-group col-12 show">
                {!! Form::label('brief', $name . ' ' . __('models/regulations.fields.brief') . ':') !!}
                <b>{{ $regulation->brief }}</b>
            </div>


            <!-- Description Field -->
            <div class="form-group col-12 show">
                {!! Form::label('description', $name . ' ' . __('models/regulations.fields.description') . ':') !!}
                <b>{{ $regulation->description }}</b>
            </div>
        </div>
    @endforeach

</div>




<!-- Type Field -->
<div class="form-group show">
    {!! Form::label('type', __('models/regulations.fields.type') . ':') !!}
    <b>{{ $regulation->type_text }}</b>
</div>

@if ($regulation->type == 1)
    <!-- Attachment Pdf Field -->
    <div class="form-group show">
        {!! Form::label('attachment_pdf', __('models/regulations.fields.attachment_pdf') . ':') !!}
        <a href="{{ $regulation->attachment_cv }}" target="_blank" class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
    </div>
@else
    <!-- Link Field -->
    <div class="form-group show">
        {!! Form::label('link', __('models/regulations.fields.link') . ':') !!}
        <b>{{ $regulation->link }}</b>
    </div>
@endif


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/regulations.fields.created_at') . ':') !!}
    <b>{{ $regulation->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/regulations.fields.updated_at') . ':') !!}
    <b>{{ $regulation->updated_at }}</b>
</div>
