@if ($records->hasPages())
@php
$currentRequest = '';
foreach (request()->except('page') as $key => $value) {$currentRequest .= '&'.$key.'='.$value;}
@endphp
<div class="datatable datatable-default datatable-primary datatable-loaded">
    <div class="datatable-pager datatable-paging-loaded">
        <ul class="mb-5 datatable-pager-nav mb-sm-0">
            <li>
                <a title="First" class="datatable-pager-link datatable-pager-link-first"
                    href="{{$records->path().'?page=1'.$currentRequest}}" data-page="1" disabled="disabled">
                    @lang('pagination.first_page')
                </a>
            </li>
            <li>
                <a title="Previous" class="datatable-pager-link datatable-pager-link-prev"
                    href="{{$records->previousPageUrl().$currentRequest}}" data-page="1" disabled="disabled">
                    @lang('pagination.previous_page')
                </a>
            </li>
            <li style=""></li>

            <li style="display: none;">
                <input type="text" class="datatable-pager-input form-control" title="Page number">
            </li>
            @foreach ($records->links()->elements as $array)

            @if ($array != '...')

            @foreach ($array as $key => $url)
            <li>
                <a class="datatable-pager-link datatable-pager-link-number {{request('page',1)==$key?'datatable-pager-link-active':''}}"
                    href="{{ $url . $currentRequest }}" data-page="{{$key}}" title="{{$key}}">{{$key}}</a>
            </li>
            @endforeach

            @else
            <li><b>...</b></li>

            @endif
            @endforeach

            <li style=""></li>
            <li>
                <a title="Next" class="datatable-pager-link datatable-pager-link-next"
                    href="{{$records->nextPageUrl().$currentRequest}}" data-page="1" disabled="disabled">
                    @lang('pagination.next_page')
                </a>
            </li>
            <li>
                <a title="Last" class="datatable-pager-link datatable-pager-link-last"
                    href="{{$records->path().'?page='.$records->lastPage().$currentRequest}}" data-page="1"
                    disabled="disabled">
                    @lang('pagination.last_page')
                </a>
            </li>
        </ul>
        <div class="datatable-pager-info">
            {{-- <div>
                <select class="form-control" name="sort" onchange="window.location=this.value" title="Select page size"
                    data-width="60px" data-container="body" data-selected="30">
                    <option value="{{$records->path()}}?sort=5" {{$records->perPage() == 5 ?'selected':''}}>5</option>
                    <option value="{{$records->path()}}?sort=10" {{$records->perPage() == 10 ?'selected':''}}>10
                    </option>
                    <option value="{{$records->path()}}?sort=20" {{$records->perPage() == 20 ?'selected':''}}>20
                    </option>
                    <option value="{{$records->path()}}?sort=30" {{$records->perPage() == 30 ?'selected':''}}>30
                    </option>
                    <option value="{{$records->path()}}?sort=50" {{$records->perPage() == 50 ?'selected':''}}>50
                    </option>
                    <option value="{{$records->path()}}?sort=100" {{$records->perPage() == 100 ?'selected':''}}>100
                    </option>
                </select>
                <div class="mx-1 dropdown-menu">
                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                    </div>
                </div>
            </div> --}}
            {{-- <span class="datatable-pager-detail">{{$records->currentPage() }} - {{$records->lastPage() }}</span>
            --}}
        </div>
    </div>
</div>
@endif
