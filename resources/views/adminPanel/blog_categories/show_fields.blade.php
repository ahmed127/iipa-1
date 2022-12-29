<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/blogCategories.fields.id').':') !!}
    <b>{{ $blogCategory->id }}</b>
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/blogCategories.fields.title').':') !!}
    <b>{{ $blogCategory->title }}</b>
</div>


<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', __('models/blogCategories.fields.photo').':') !!}
    <b>{{ $blogCategory->photo }}</b>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/blogCategories.fields.created_at').':') !!}
    <b>{{ $blogCategory->created_at }}</b>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/blogCategories.fields.updated_at').':') !!}
    <b>{{ $blogCategory->updated_at }}</b>
</div>


