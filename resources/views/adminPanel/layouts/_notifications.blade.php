@php
    $volunteers = \App\Models\Volunteer::where('status', 1)->get();

    $notifications = [];
    foreach ($volunteers as $volunteer) {
        $notifications[] = [
            'message' => 'طلب تطوع جديد من ' . $volunteer->full_name,
            'url' => route('adminPanel.volunteers.show', $volunteer->id),
            'created_at' => $volunteer->created_at,
        ];
    }
@endphp
{{-- @dump($notifications) --}}

<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
            <span class="svg-icon svg-icon-xl svg-icon-primary">
                <i class="fa fa-bell text-danger"></i>
            </span>
            <span class="pulse-ring"></span>
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <!--begin::Content-->
        <div class="tab-content">
            <!--begin::Tabpane-->
            <div class="tab-pane active show p-8" id="topbar_notifications_events" role="tabpanel">
                <!--begin::Nav-->
                <div class="navi navi-hover scroll my-4 ps" data-scroll="true" data-height="300"
                    data-mobile-height="200" style="height: 300px; overflow: hidden;">
                    @foreach ($notifications as $notification)
                        <!--begin::Item-->
                        <a href="{{ $notification['url'] }}" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="fa fa-bell text-danger"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">{{ $notification['message'] }}</div>
                                    <div class="text-muted">{{ $notification['created_at'] }}</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    @endforeach
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Tabpane-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Dropdown-->
</div>
