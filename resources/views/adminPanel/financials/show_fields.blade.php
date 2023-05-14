<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/financials.fields.id') . ':') !!}
    <b>{{ $financial->id }}</b>
</div>

<!-- Photo Field -->
<div class="form-group show">
    {!! Form::label('photo', __('models/financials.fields.photo') . ':') !!}
    <img onError="this.onerror=null;this.src='{{ asset('uploads/images/original/default.png') }}';"
        src="{{ $financial->photo_thumbnail_path }}" alt="{{ $financial->name }}" width="300">
</div>
<div class="row w-100">
    @foreach (config('langs') as $locale => $name)
        <div class="inner flex-column col-6">
            <!-- Title Field -->
            <div class="form-group col-12 show">
                {!! Form::label('title', $name . ' ' . __('models/financials.fields.title') . ':') !!}
                <b>{{ $financial->title }}</b>
            </div>
            <!-- Brief Field -->
            <div class="form-group col-12 show">
                {!! Form::label('brief', $name . ' ' . __('models/financials.fields.brief') . ':') !!}
                <b>{{ $financial->brief }}</b>
            </div>


            <!-- Description Field -->
            <div class="form-group col-12 show">
                {!! Form::label('description', $name . ' ' . __('models/financials.fields.description') . ':') !!}
                <b>{{ $financial->description }}</b>
            </div>
        </div>
    @endforeach

</div>




<!-- Type Field -->
<div class="form-group show">
    {!! Form::label('type', __('models/financials.fields.type') . ':') !!}
    <b>{{ $financial->type_text }}</b>
</div>

@if ($financial->type == 1)
    <!-- Attachment Pdf Field -->
    <div class="form-group show">
        {!! Form::label('attachment_pdf', __('models/financials.fields.attachment_pdf') . ':') !!}
        <a href="{{ $financial->attachment_cv }}" target="_blank" class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
    </div>
@else
    <!-- Link Field -->
    <div class="form-group show">
        {!! Form::label('link', __('models/financials.fields.link') . ':') !!}
        <b>{{ $financial->link }}</b>
    </div>
@endif


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/financials.fields.created_at') . ':') !!}
    <b>{{ $financial->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/financials.fields.updated_at') . ':') !!}
    <b>{{ $financial->updated_at }}</b>
</div>
