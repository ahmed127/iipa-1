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

    {{-- https://calendar.google.com/calendar/u/0/r/eventedit?dates=20210528T065000Z/20210528T070000Z&text=cool+event --}}

    @foreach ($events as $event)
        {{-- {{ dd($event->date_from_timestamp) }} --}}
        <a target="_blank"
            href="https://calendar.google.com/calendar/u/0/r/eventedit?dates={{ $event->date_from_timestamp }}T065000Z/{{ $event->date_to_timestamp }}T070000Z&text={{ $event->title }}">{{ $event->title }}</a>
        <br>
    @endforeach


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
    {{-- <script src="{{ asset('metronic') }}/assets/js/pages/features/calendar/google.js"></script> --}}
    <!--end::Page Scripts-->


    <script>
        var KTCalendarBasic = function() {

            return {
                //main function to initiate the module
                init: function() {
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
                        events: [{
                                title: 'All Day test',
                                // start: YM + '-01',
                                url: 'https://calendar.google.com/calendar/u/0/r/eventedit?dates=20210528T065000Z/20210528T070000Z&text=cool+event',
                                start: '2023-01-05T20:22:00',
                                description: 'Toto lorem ipsum dolor sit incid idunt ut',
                                className: "fc-event-danger fc-event-solid-warning"
                            },
                            {
                                title: 'Reporting',
                                start: YM + '-14T13:30:00',
                                description: 'Lorem ipsum dolor incid idunt ut labore',
                                end: YM + '-14',
                                className: "fc-event-success"
                            },
                            {
                                title: 'Company Trip',
                                start: YM + '-02',
                                description: 'Lorem ipsum dolor sit tempor incid',
                                end: YM + '-03',
                                className: "fc-event-primary"
                            },
                            {
                                title: 'ICT Expo 2017 - Product Release',
                                start: YM + '-03',
                                description: 'Lorem ipsum dolor sit tempor inci',
                                end: YM + '-05',
                                className: "fc-event-light fc-event-solid-primary"
                            },
                            {
                                title: 'Dinner',
                                start: YM + '-12',
                                description: 'Lorem ipsum dolor sit amet, conse ctetur',
                                end: YM + '-10'
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: YM + '-09T16:00:00',
                                description: 'Lorem ipsum dolor sit ncididunt ut labore',
                                className: "fc-event-danger"
                            },
                            {
                                id: 1000,
                                title: 'Repeating Event',
                                description: 'Lorem ipsum dolor sit amet, labore',
                                start: YM + '-16T16:00:00'
                            },
                            {
                                title: 'Conference',
                                start: YESTERDAY,
                                end: TOMORROW,
                                description: 'Lorem ipsum dolor eius mod tempor labore',
                                className: "fc-event-primary"
                            },
                            {
                                title: 'Meeting',
                                start: TODAY + 'T10:30:00',
                                end: TODAY + 'T12:30:00',
                                description: 'Lorem ipsum dolor eiu idunt ut labore'
                            },
                            {
                                title: 'Lunch',
                                start: TODAY + 'T12:00:00',
                                className: "fc-event-info",
                                description: 'Lorem ipsum dolor sit amet, ut labore'
                            },
                            {
                                title: 'Meeting',
                                start: TODAY + 'T14:30:00',
                                className: "fc-event-warning",
                                description: 'Lorem ipsum conse ctetur adipi scing'
                            },
                            {
                                title: 'Happy Hour',
                                start: TODAY + 'T17:30:00',
                                className: "fc-event-info",
                                description: 'Lorem ipsum dolor sit amet, conse ctetur'
                            },
                            {
                                title: 'Dinner',
                                start: TOMORROW + 'T05:00:00',
                                className: "fc-event-solid-danger fc-event-light",
                                description: 'Lorem ipsum dolor sit ctetur adipi scing'
                            },
                            {
                                title: 'Birthday Party',
                                start: TOMORROW + 'T07:00:00',
                                className: "fc-event-primary",
                                description: 'Lorem ipsum dolor sit amet, scing'
                            },
                            {
                                title: 'Click for Google',
                                url: 'http://google.com/',
                                start: YM + '-28',
                                className: "fc-event-solid-info fc-event-light",
                                description: 'Lorem ipsum dolor sit amet, labore'
                            }
                        ],

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

        jQuery(document).ready(function() {
            KTCalendarBasic.init();
        });
    </script>
@endpush
