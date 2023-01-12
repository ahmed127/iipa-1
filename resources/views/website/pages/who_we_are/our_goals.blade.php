@extends('website.layout.app')

@section('title', __('lang.our_goals'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.our_goals'),
        'pageName' => __('lang.our_goals'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">

        </div>
    </section>
@endsection
