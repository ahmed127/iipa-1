@extends('website.layout.app')

@section('title', __('lang.media_center'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.media_center'),
        'pageName' => __('lang.media_center'),
        'heroImage' => asset('website/images/media_center.jpg'),
    ])
    <section class="bg-content-custom">
        <div class="row gx-0 ">

            @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3 rounded-4 shadow-custom p-0">
                        <a href="{{ route('website.media_center_single', $blog->id) }}">

                            <img src="{{ $blog->photo_sm_original_path }}" class=" card-img-top"
                                style="border-radius: 16px 16px 0 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($blog->title, 80, '...') }}</h5>
                                <p class="card-text fw-lighter text-truncate">{{ $blog->breif }}</p>
                                <p class="fw-bold m-0">
                                    <i class="fa-regular fa-calendar-days text-info"></i>
                                    {{ $blog->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
        <div class="pagination-container d-flex">
            {{ $blogs->links() }}
        </div>
    </section>
@endsection

<style>
    h5.card-title {
        height: 5rem;
    }

    img.card-img-top {
        height: 14rem;
    }
</style>
