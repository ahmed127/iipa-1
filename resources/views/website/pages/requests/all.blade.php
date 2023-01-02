@extends('website.layout.app')

@section('title', 'My Requests')

@section('content')
@include('website.layout._header_page', [
'title' => 'My Requests',
'pageName' => 'My Requests',
])

<section class="bg-content-custom">
    <div class="container-fluid p-0">
        <div class="bg-light shadow-custom">
            <div class="row p-3 gx-1">
                <div class="col-lg-6 col-sm-3 my-lg-0 my-2">
                    <div class="input-group">
                        <input type="text" class="form-control border border-end-0" type="search" placeholder="Search"
                            aria-label="Search">
                        <span class="input-group-text bg-white border border-start-0" id="basic-addon1">
                            <i class="fa-solid fa-magnifying-glass fa-sm text-primary"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 my-lg-0 my-2">
                    <select class="form-select rounded-4" aria-label="Default select example">
                        <option selected> حالة الطلب </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 col-sm-3 my-lg-0 my-2">
                    <select class="form-select rounded-4" aria-label="Default select example">
                        <option selected>قسم الطلب</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 col-sm-3 my-lg-0 my-2">
                    <select class="form-select rounded-4" aria-label="Default select example">
                        <option selected>عرض بـ الأحدث</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="shadow-custom bg-white h-100">
                <div style="overflow-x: scroll;">
                    <table class="table table-bordered table-hover rounded-4 m-0">
                        <thead class="text-white" style="background: #00113D">
                            <tr>
                                <th>#</th>
                                <th>حالة الطلب</th>
                                <th>مقدم الطلب</th>
                                <th>القسم</th>
                                <th>تاريخ الطلب</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>#1</th>
                                <td>تحت المراجعة</td>
                                <td>Abdalla</td>
                                <td>التوعية</td>
                                <td>30 ديسمبر 2022</td>
                                <td>
                                    <a href="#">
                                        <i class="fa-solid fa-eye shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-ban shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>#2</th>
                                <td>تحت المراجعة</td>
                                <td>Abdalla</td>
                                <td>التوعية</td>
                                <td>30 ديسمبر 2022</td>
                                <td>
                                    <a href="#">
                                        <i class="fa-solid fa-eye shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-ban shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>#3</th>
                                <td>مرفوض</td>
                                <td>Abdalla</td>
                                <td>التوعية</td>
                                <td>30 ديسمبر 2022</td>
                                <td>
                                    <a href="#">
                                        <i class="fa-solid fa-eye shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-ban shadow-custom text-black-50 p-1 rounded-5"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination p-3">
                        <!-- <li class="page-item px-1"><a class="page-link bg-opacity-50 bg-secondary text-white" href="#">Previous</a></li> -->
                        <li class="page-item">
                            <a class="page-link bg-opacity-50 bg-secondary text-white rounded-2" href="#"
                                aria-label="Previous">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item px-1"><a class="page-link bg-primary text-white rounded-2" href="#">1</a>
                        </li>
                        <li class="page-item px-1"><a class="page-link bg-opacity-50 bg-secondary text-white rounded-2"
                                href="#">2</a></li>
                        <li class="page-item px-1"><a class="page-link bg-opacity-50 bg-secondary text-white rounded-2"
                                href="#">3</a></li>
                        <li class="page-item px-1"><a class="page-link bg-opacity-50 bg-secondary text-white rounded-2"
                                href="#">...</a></li>
                        <li class="page-item px-1">
                            <a class="page-link bg-opacity-50 bg-secondary text-white rounded-2" href="#"
                                aria-label="Next">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
