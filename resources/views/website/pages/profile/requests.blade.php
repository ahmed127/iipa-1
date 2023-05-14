@extends('website.layout.app')

@section('title', 'My Requests')

@section('content')
    @include('website.layout._header_page', [
        'title' => __('lang.my_requests'),
        'pageName' => __('lang.my_requests'),
    ])

    <section class="bg-content-custom p-custom">
        <div class="row">
            <div class="col-2 d-none d-sm-block">
                @include('website.pages.profile._aside')
            </div>
            <div class="col-xs-12 col-sm-10">
                @include('website.inc._error')
                @include('flash::message')
                <div class="container-fluid p-0">
                    <form action="{{ route('website.my_requests') }}" method="GET">
                        @csrf
                        <div class="bg-light shadow-custom">
                            <div class="row p-3 gx-1">
                                <div class="col-lg-4 col-sm-3 my-lg-0 my-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control border border-end-0" type="text"
                                            name="name" placeholder="Applicant" aria-label="Search"
                                            value="{{ request('name') }}">
                                        <button class="input-group-text bg-white border border-start-0" id="basic-addon1">
                                            <i class="fa-solid fa-magnifying-glass fa-sm text-primary"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 my-lg-0 my-2">
                                    <select class="form-select rounded-4" onchange="this.form.submit()" name="department">
                                        <option value="" selected> @lang('lang.department_request')</option>
                                        @forelse ($departments as $key => $item)
                                            <option value="{{ $key }}"
                                                {{ request('department') == $key ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-3 my-lg-0 my-2">
                                    <select class="form-select rounded-4" onchange="this.form.submit()" name="status">
                                        <option value="" selected> @lang('lang.status_request')</option>
                                        @forelse ($status_types as $key => $item)
                                            <option value="{{ $key }}"
                                                {{ request('status') == $key ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="col-lg-2 col-sm-3 my-lg-0 my-2">
                                    <select class="form-select rounded-4" onchange="this.form.submit()" name="sort">
                                        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : 'selected' }}>
                                            @lang('lang.sort_desc')</option>
                                        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>
                                            @lang('lang.sort_asc')</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 col-sm-3 my-lg-0 my-2 ">
                                    <a href="{{ route('website.my_requests') }}" class="btn btn-danger">
                                        <i class="fa-solid fa-ban shadow-custom  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="my-3">
                        <div class="shadow-custom bg-white h-100">
                            <div style="overflow-x: scroll;">
                                <table class="table table-bordered table-hover rounded-4 m-0">
                                    <thead class="text-white" style="background: #00113D">
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('lang.applicant')</th>
                                            <th>@lang('lang.department')</th>
                                            <th>@lang('lang.status')</th>
                                            <th>@lang('lang.created_at')</th>
                                            <th>@lang('crud.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($follow_requests as $follow)
                                            <tr>
                                                <th>{{ $follow->id ?? 0 }}</th>
                                                <td>{{ $follow->name ?? '' }}</td>
                                                <td>{{ $follow->department_name ?? '' }}</td>
                                                <td>{{ $follow->status_name ?? '' }}</td>
                                                <td>{{ $follow->user->created_at ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('website.my_request', $follow->id) }}">
                                                        <i
                                                            class="fa-solid fa-eye shadow-custom text-black-50 p-1 rounded-5"></i>
                                                    </a>
                                                    <a href="{{ route('website.my_request_delete', $follow->id) }}">
                                                        <i
                                                            class="fa-solid fa-ban shadow-custom text-black-50 p-1 rounded-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination-container d-flex">
                                {{ $follow_requests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
