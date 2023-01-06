@extends('website.layout.app')

@section('title', 'Events')

@push('css_stack')
    <link href="{{ asset('metronic') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
@include('website.layout._header_page', [
'title' => 'Our Events',
'pageName' => 'events',
])

{{-- https://calendar.google.com/calendar/u/0/r/eventedit?dates=20210528T065000Z/20210528T070000Z&text=cool+event --}}


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
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->

    <script>
        var allEvents = [];
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('website.events') }}",
                success: function(response) {
                    console.log(response.events);
                    KTCalendarBasic.init(response.events);
                }
            });

        });

        var KTCalendarBasic = function() {

            return {
                //main function to initiate the module
                init: function(allEvents) {
                    var todayDate = moment().startOf('day');
                    var YM = todayDate.format('YYYY-MM');
                    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                    var TODAY = todayDate.format('YYYY-MM-DD');
                    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list'],
                        themeSystem: 'bootstrap',

                        isRTL: KTUtil.isRTL(),

                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3, // see: https://fullcalendar.io/docs/aspectRatio

                        nowIndicator: true,
                        now: TODAY + 'T09:25:00', // just for demo

                        views: {
                            dayGridMonth: {
                                buttonText: 'month'
                            },
                            timeGridWeek: {
                                buttonText: 'week'
                            },
                            timeGridDay: {
                                buttonText: 'day'
                            }
                        },

                        defaultView: 'dayGridMonth',
                        defaultDate: TODAY,

                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        navLinks: true,
                        events: allEvents,


                        eventRender: function(info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' +
                                        info.event.extendedProps.description + '</div>');
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append(
                                        '<div class="fc-description">' + info.event.extendedProps
                                        .description + '</div>');
                                }
                            }
                        }
                    });

                    calendar.render();
                }
            };
        }();

        // jQuery(document).ready(function() {
        //     KTCalendarBasic.init();
        // });
    </script>
@endpush
