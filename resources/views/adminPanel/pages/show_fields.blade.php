<div class="row">
    <!-- Created At Field -->
    <div class="form-group col-lg-2 col-sm-12">
        {!! Form::label('created_at', __('models/pages.fields.created_at').':') !!}
        <div>{{ $page->created_at }}</div>
    </div>


    <!-- Updated At Field -->
    <div class="form-group col-lg-2 col-sm-12">
        {!! Form::label('updated_at', __('models/pages.fields.updated_at').':') !!}
        <div>{{ $page->updated_at }}</div>
    </div>


    <!-- Photo Field -->
    <div class="form-group col-lg-4 col-sm-12">
        {!! Form::label('photo', __('models/pages.fields.photo').':') !!}
        <div>
            <img src="{{ $page->photo }}" width="308" height="80">
        </div>
    </div>

    <!-- Photo Field -->
    <div class="form-group col-lg-2 col-sm-12">
        {!! Form::label('image', __('models/pages.fields.image').':') !!}
        <div>
            <img src="{{ $page->image }}" width="100" height="100">
        </div>
    </div>

    <!-- Type Field -->
    <div class="form-group col-lg-2 col-sm-12">
        {!! Form::label('type', __('models/pages.fields.type').':') !!}
        <div>{{ $page->type == 1 ? __('lang.page') : __('lang.attachment_pdf')}}</div>
    </div>

    @foreach ( config('langs') as $locale => $name)
    <div class="col-lg-6 col-sm-12">
        <h2 class="text-center text-danger">{{ $name }}</h2>
        <!-- Title Field -->
        <div class="form-group ">
            {!! Form::label('title', __('models/pages.fields.title').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->title??''}}</div>
        </div>

        <!-- Brief Field -->
        <div class="form-group ">
            {!! Form::label('brief', __('models/pages.fields.brief').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->brief??''}}</div>
        </div>

        <!-- Name Field -->
        <div class="form-group ">
            {!! Form::label('name', __('models/pages.fields.name').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->name??''}}</div>
        </div>
        <!-- Meta Title Field -->
        <div class="form-group ">
            {!! Form::label('meta_title', __('models/pages.fields.meta_title').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->meta_title??''}}</div>
        </div>
        <!-- Meta Title Field -->
        <div class="form-group ">
            {!! Form::label('meta_description', __('models/pages.fields.meta_description').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->meta_description??''}}</div>
        </div>
        <!-- Meta Title Field -->
        <div class="form-group ">
            {!! Form::label('meta_keywords', __('models/pages.fields.meta_keywords').' '.$name.':') !!}
            <div>{{ $page->translate($locale)->meta_keywords??''}}</div>
        </div>

        <!-- Description Field -->
        <div class="form-group ">
            {!! Form::label('description', __('models/pages.fields.description').' '.$name.':') !!}
            <div>{!! $page->translate($locale)->description??''!!}</div>
        </div>
    </div>
    @endforeach

</div>
