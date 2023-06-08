@extends('website.layout.app')

@section('title', __('lang.statistics'))

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.statistic'),
        'pageName' => __('lang.statistics'),
        'size' => 'small',
    ])

    <div class="bg-content-memberships">
        <div class="row gx-0 p-lg-5 p-3">

            @forelse ($statistics as $statistic)
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 text-center">
                    <div>
                        <span style="font-size:40px; color: {{ $statistic->color ?? '#0245FB' }}">
                            {{ $statistic->symbol }} <span class="statistic" value="{{ $statistic->value }}">0</span>
                        </span>
                        <span style="font-size:25px;">{{ $statistic->title }}</span>
                    </div>
                    <div>{{ $statistic->description }}</div>
                </div>

            @empty
            @endforelse

        </div>
    </div>

    <script>
        const counters = document.querySelectorAll('.statistic');
        const speed = 200;

        counters.forEach(counter => {
            const animate = () => {
                const value = +counter.getAttribute('value');
                const data = +counter.innerText;

                const time = value / speed;
                if (data < value) {
                    counter.innerText = Math.ceil(data + time);
                    setTimeout(animate, 1);
                } else {
                    counter.innerText = value;
                }

            }

            animate();
        });
    </script>

@endsection
