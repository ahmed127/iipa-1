<div>
    <div class="container-fluid p-0">
        <div class="header-page row gx-0 align-items-center"
            @isset($heroImage) style="background:url('{{ $heroImage }}')" @endisset>
            <div class="col-12 text-white p-5 mt-5">
                <h1 class="py-2 firstWordInfo">{{ $title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fa-solid fa-link px-2 py-1"></i>
                        <li class="breadcrumb-item">
                            <a class="text-white" href="{{ route('website.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item px-0 text-white-50" aria-current="page">{{ $pageName }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
