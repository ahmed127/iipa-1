@extends('website.layout.app')

@section('title', __('lang.help'))

@section('content')
@include('website.layout._header_page', [
'title' => __('lang.help'),
'pageName' => __('lang.help'),
])
<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        @forelse ($faqCategories as $faqCategory)
        <h3 class="my-3">{{ $faqCategory->name }}</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample-{{ $faqCategory->id }}">
            @forelse ($faqCategory->faqs as $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne-{{ $faq->id }}">
                    <button style="background-color: #eee" class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{ $faq->id }}"
                        aria-expanded="false" aria-controls="flush-collapseOne-{{ $faq->id }}">
                        {{ $faq->question }}
                    </button>
                </h2>
                <div id="flush-collapseOne-{{ $faq->id }}" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne-{{ $faq->id }}"
                    data-bs-parent="#accordionFlushExample-{{ $faqCategory->id }}">
                    <div class="accordion-body">
                        {{ $faq->answer }}
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
        <br>
        <hr>
        <br>
        @empty
        @endforelse
    </div>
</section>
@endsection
