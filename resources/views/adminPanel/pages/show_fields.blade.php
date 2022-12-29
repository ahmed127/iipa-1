<div class="row">
    @foreach ( config('langs') as $locale => $name)
    <div class="col-6">

        <h3><code> {{ $name }} </code></h3>

        <div class="form-group">
            <b>{!! Form::label('meta_title', __('models/pages.fields.meta_title').':') !!}</b>
            <b>{{ $page->translate($locale)->meta_title }}</b>
        </div>

        <div class="form-group">
            <b>{!! Form::label('meta_description', __('models/pages.fields.meta_description').':') !!}</b>
            <b>{{ $page->translate($locale)->meta_description }}</b>
        </div>

        <div class="form-group">
            <b>{!! Form::label('meta_keywords', __('models/pages.fields.meta_keywords').':') !!}</b>
            <b>{{ $page->translate($locale)->meta_keywords }}</b>
        </div>

        <div class="form-group">
            <b>{!! Form::label('name', __('models/pages.fields.name').':') !!}</b>
            <b>{{ $page->translate($locale)->name }}</b>
        </div>

        <div class="form-group">
            <b>{!! Form::label('content', __('models/pages.fields.content').':') !!}</b>
            <b>{!! $page->translate($locale)->content !!}</b>
        </div>

    </div>
    @endforeach
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', __('models/pages.fields.created_at').':') !!}</b>
    <b>{{ $page->created_at }}</b>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', __('models/pages.fields.updated_at').':') !!}</b>
    <b>{{ $page->updated_at }}</b>
</div>

