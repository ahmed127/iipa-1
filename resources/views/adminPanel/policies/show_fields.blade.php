<!-- Id Field -->
<div class="form-group show">
    {!! Form::label('id', __('models/policies.fields.id') . ':') !!}
    <b>{{ $policy->id }}</b>
</div>

<!-- Photo Field -->
<div class="form-group show">
    {!! Form::label('photo', __('models/policies.fields.photo') . ':') !!}
    <img onError="this.onerror=null;this.src='{{ asset('uploads/images/original/default.png') }}';"
        src="{{ $policy->photo_thumbnail_path }}" alt="{{ $policy->name }}" width="300">
</div>
<div class="row w-100">
    @foreach (config('langs') as $locale => $name)
        <div class="inner flex-column col-6">
            <!-- Title Field -->
            <div class="form-group col-12 show">
                {!! Form::label('title', $name . ' ' . __('models/policies.fields.title') . ':') !!}
                <b>{{ $policy->title }}</b>
            </div>
            <!-- Brief Field -->
            <div class="form-group col-12 show">
                {!! Form::label('brief', $name . ' ' . __('models/policies.fields.brief') . ':') !!}
                <b>{{ $policy->brief }}</b>
            </div>


            <!-- Description Field -->
            <div class="form-group col-12 show">
                {!! Form::label('description', $name . ' ' . __('models/policies.fields.description') . ':') !!}
                <b>{{ $policy->description }}</b>
            </div>
        </div>
    @endforeach

</div>




<!-- Type Field -->
<div class="form-group show">
    {!! Form::label('type', __('models/policies.fields.type') . ':') !!}
    <b>{{ $policy->type_text }}</b>
</div>

@if ($policy->type == 1)
    <!-- Attachment Pdf Field -->
    <div class="form-group show">
        {!! Form::label('attachment_pdf', __('models/policies.fields.attachment_pdf') . ':') !!}
        <a href="{{ $policy->attachment_cv }}" target="_blank" class="btn btn-sm btn-primary">@lang('lang.open_file')</a>
    </div>
@else
    <!-- Link Field -->
    <div class="form-group show">
        {!! Form::label('link', __('models/policies.fields.link') . ':') !!}
        <b>{{ $policy->link }}</b>
    </div>
@endif


<!-- Created At Field -->
<div class="form-group show">
    {!! Form::label('created_at', __('models/policies.fields.created_at') . ':') !!}
    <b>{{ $policy->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group show">
    {!! Form::label('updated_at', __('models/policies.fields.updated_at') . ':') !!}
    <b>{{ $policy->updated_at }}</b>
</div>
