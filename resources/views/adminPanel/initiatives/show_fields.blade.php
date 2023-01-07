<div class="row">
    <!-- Created At Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('created_at', __('models/initiatives.fields.created_at') . ':') !!}
        <div>{{ $initiative->created_at }}</div>
    </div>


    <!-- Updated At Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('updated_at', __('models/initiatives.fields.updated_at') . ':') !!}
        <div>{{ $initiative->updated_at }}</div>
    </div>
    <!-- Attachment Pdf Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('attachment_pdf', __('models/initiatives.fields.attachment_pdf') . ':') !!}
        @if (isset($initiative))
            <p>
                <a href="{{ $initiative->attachment_pdf_path }}" target="_blank">
                    File
                </a>
            </p>
        @endif
    </div>

    <!-- Photo Field -->
    <div class="form-group show col-lg-4 col-sm-12">
        {!! Form::label('photo', __('models/initiatives.fields.photo') . ':') !!}
        <div>
            <img src="{{ $initiative->photo }}" width="308" height="80">
        </div>
    </div>

    <!-- Type Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('type', __('models/initiatives.fields.type') . ':') !!}
        <div>{{ $initiative->type == 1 ? __('lang.page') : __('lang.attachment_pdf') }}</div>
    </div>

    @foreach (config('langs') as $locale => $name)
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger">{{ $name }}</h2>
            <!-- Title Field -->
            <div class="form-group show ">
                {!! Form::label('title', __('models/initiatives.fields.title') . ' ' . $name . ':') !!}
                <div>{{ $initiative->title ?? '' }}</div>
            </div>

            <!-- Brief Field -->
            <div class="form-group show ">
                {!! Form::label('brief', __('models/initiatives.fields.brief') . ' ' . $name . ':') !!}
                <div>{{ $initiative->brief ?? '' }}</div>
            </div>

            <!-- Name Field -->
            <div class="form-group show ">
                {!! Form::label('name', __('models/initiatives.fields.name') . ' ' . $name . ':') !!}
                <div>{{ $initiative->name ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_title', __('models/initiatives.fields.meta_title') . ' ' . $name . ':') !!}
                <div>{{ $initiative->meta_title ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_description', __('models/initiatives.fields.meta_description') . ' ' . $name . ':') !!}
                <div>{{ $initiative->meta_description ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_keywords', __('models/initiatives.fields.meta_keywords') . ' ' . $name . ':') !!}
                <div>{{ $initiative->meta_keywords ?? '' }}</div>
            </div>

            <!-- Description Field -->
            <div class="form-group show ">
                {!! Form::label('description', __('models/initiatives.fields.description') . ' ' . $name . ':') !!}
                <div>{!! $initiative->description ?? '' !!}</div>
            </div>

            <!-- Strategic Goal Field -->
            <div class="form-group show ">
                {!! Form::label('strategic_goal', __('models/initiatives.fields.strategic_goal') . ' ' . $name . ':') !!}
                <div>{!! $initiative->strategic_goal ?? '' !!}</div>
            </div>

            <!-- Target Group Field -->
            <div class="form-group show ">
                {!! Form::label('target_group', __('models/initiatives.fields.target_group') . ' ' . $name . ':') !!}
                <div>{!! $initiative->target_group ?? '' !!}</div>
            </div>
        </div>
    @endforeach

</div>
