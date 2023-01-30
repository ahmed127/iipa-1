@extends('website.layout.app')

@section('title', $page->name)

@section('meta')
    <meta name="title" content="{{ $page->meta_title ?? '' }}">
    <meta name="description" content="{{ $page->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $page->meta_keywords ?? '' }}">
@endsection

@section('content')

    @include('website.layout._header_page', [
        'title' => $page->title,
        'pageName' => $page->name,
        'heroImage' => $page->photo,
    ])


    <section class="bg-content-custom p-custom">
        <div class="container-fluid p-0">
            <div class="bg-content-complaint">
                <div class="p-5">
                    @forelse ($page->paragraphs as $paragraph)
                        <div
                            class="bg-white shadow-custom border-4 border-start border-end-0 border-info rounded-3 p-2 my-4">
                            <h2 class="py-2 col-12 text-start">
                                {{ $paragraph->title }}
                            </h2>
                            <p>
                                {!! $paragraph->text !!}
                            </p>
                        </div>

                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
