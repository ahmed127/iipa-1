@extends('website.layout.app')

@section('title', 'Events')

@push('css_stack')
<link href="{{ asset('metronic') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css" />
{{--
<link href="{{ asset('metronic') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet"
    type="text/css" /> --}}
@endpush

@section('content')
@include('website.layout._header_page', [
'title' => 'Our Events',
'pageName' => 'events',
])
<section class="bg-content-custom p-custom">
    <div class="container-fluid p-0">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-body">
                <div id="kt_calendar"></div>
            </div>
        </div>
        <!--end::Card-->
    </div>
</section>
@endsection

@push('js_stack')
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('metronic') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('metronic') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{ asset('metronic') }}/assets/js/scripts.bundle.js"></script>
<script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script>
<!--end::Global Theme Bundle-->
{{-- <script src="{{ asset('metronic') }}/js/calander.js"></script> --}}
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('metronic') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('metronic') }}/assets/js/pages/features/calendar/google.js"></script>
<!--end::Page Scripts-->
@endpush
