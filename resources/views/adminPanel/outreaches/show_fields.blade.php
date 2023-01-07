<div class="row">
    <!-- Created At Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('created_at', __('models/outreaches.fields.created_at') . ':') !!}
        <div>{{ $outreach->created_at }}</div>
    </div>


    <!-- Updated At Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('updated_at', __('models/outreaches.fields.updated_at') . ':') !!}
        <div>{{ $outreach->updated_at }}</div>
    </div>

    <!-- Attachment Pdf Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('attachment_pdf', __('models/outreaches.fields.attachment_pdf') . ':') !!}
        @if (isset($outreach))
            <p>
                <a href="{{ $outreach->attachment_pdf_path }}" target="_blank">
                    File
                </a>
            </p>
        @endif
    </div>

    <!-- Type Field -->
    <div class="form-group show col-lg-2 col-sm-12">
        {!! Form::label('type', __('models/outreaches.fields.type') . ':') !!}
        <div>{{ $outreach->type == 1 ? __('lang.page') : __('lang.attachment_pdf') }}</div>
    </div>

    <!-- Photo Field -->
    <div class="form-group show col-lg-12 col-sm-12">
        {!! Form::label('photo', __('models/outreaches.fields.photo') . ':') !!}
        <div>
            <img src="{{ $outreach->photo }}" width="308" height="80">
        </div>
    </div>



    @foreach (config('langs') as $locale => $name)
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger">{{ $name }}</h2>
            <!-- Title Field -->
            <div class="form-group show ">
                {!! Form::label('title', __('models/outreaches.fields.title') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->title ?? '' }}</div>
            </div>

            <!-- Brief Field -->
            <div class="form-group show ">
                {!! Form::label('btn_name', __('models/outreaches.fields.btn_name') . ' ' . $name . ':') !!}
                <div>
                    <a href="{{ $outreach->btn_link ?? '' }}" class="btn btn-primary" target="_blank">
                        {{ $outreach->translate($locale)->btn_name ?? '' }}
                    </a>
                </div>

            </div>

            <!-- Brief Field -->
            <div class="form-group show ">
                {!! Form::label('brief', __('models/outreaches.fields.brief') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->brief ?? '' }}</div>
            </div>

            <!-- Name Field -->
            <div class="form-group show ">
                {!! Form::label('name', __('models/outreaches.fields.name') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->name ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_title', __('models/outreaches.fields.meta_title') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->meta_title ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_description', __('models/outreaches.fields.meta_description') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->meta_description ?? '' }}</div>
            </div>
            <!-- Meta Title Field -->
            <div class="form-group show ">
                {!! Form::label('meta_keywords', __('models/outreaches.fields.meta_keywords') . ' ' . $name . ':') !!}
                <div>{{ $outreach->translate($locale)->meta_keywords ?? '' }}</div>
            </div>

            <!-- Description Field -->
            <div class="form-group show ">
                {!! Form::label('description', __('models/outreaches.fields.description') . ' ' . $name . ':') !!}
                <div>{!! $outreach->translate($locale)->description ?? '' !!}</div>
            </div>
        </div>
    @endforeach

</div>
