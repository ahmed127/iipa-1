@extends('website.layout.app')

@section('title', $initiative->name)

@section('meta')
<meta name="title" content="{{ $initiative->meta_title??'' }}">
<meta name="description" content="{{ $initiative->meta_description??'' }}">
<meta name="keywords" content="{{ $initiative->meta_keywords??'' }}">
@endsection

@section('content')
@include('website.layout._header_page', [
'title' => $initiative->title,
'pageName' => $initiative->name,
'heroImage' => $initiative->photo,
])

<div class=" ">
    <div class="container ">
        <div class="p-5">
            @isset ($initiative->strategic_goal)

            <div class="bg-white shadow-custom border-4 border-start border-end-0 border-info rounded-3 p-2 my-4">
                <h2 class="py-2 col-12 text-start">
                    @lang('models/initiatives.fields.strategic_goal')
                </h2>
                <p>
                    {!! $initiative->strategic_goal??'' !!}
                </p>
            </div>
            @endisset
            @isset ($initiative->description)

            <div class="bg-white shadow-custom border-4 border-start border-end-0 border-info rounded-3 p-2 my-4">
                <h2 class="py-2 col-12 text-start">
                    @lang('models/initiatives.fields.description')
                </h2>
                <p>
                    {!! $initiative->description??'' !!}
                </p>
            </div>
            @endisset
            @isset ($initiative->target_group)

            <div class="bg-white shadow-custom border-4 border-start border-end-0 border-info rounded-3 p-2 my-4">
                <h2 class="py-2 col-12 text-start">
                    @lang('models/initiatives.fields.target_group')
                </h2>
                <p>
                    {!! $initiative->target_group??'' !!}
                </p>
            </div>
            @endisset
        </div>
    </div>
</div>
@endsection
