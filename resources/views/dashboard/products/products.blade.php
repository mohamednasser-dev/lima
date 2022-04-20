@php($title='المنتجات')
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-warning font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('brands')}}"
                   class="text-muted">العلامات التجاريه</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">الصفحة الرئيسية</a>
            </li>

        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="text-right">
            <div class="card-header">
                @can('create-brands')

                    <a href="{{route('brand_products.create')}}" class="btn btn-sm btn-light-success font-weight-bolder mr-2">
                        <i class="fa fa-plus"></i>اضـافـه</a>
                @endcan
            </div>
        </div>
        <div class="card-body row">
            <div class="flex-row-fluid ml-lg-12">
                <div class="mb-11">
                    <!--begin::Heading-->
                    <div class="d-flex justify-content-between align-items-center mb-12">
                        <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Smart Devices</h2>
                        <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder">View All</a>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Products-->
                    <div class="row">
                        <!--begin::Product-->
                        <div class="col-md-3 col-xxl-3 col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless">
                                <div class="card-body p-0">
                                    <!--begin::Image-->
                                    <div class="overlay">
                                        <div class="overlay-wrapper rounded bg-light text-center">
                                            <img src="assets/media/products/1.png" alt="" class="mw-100 w-200px"/>
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                View</a>
                                            <a href="#"
                                               class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                        </div>
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Details-->
                                    <div
                                        class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                        <a href="#"
                                           class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Smart
                                            Watches</a>
                                        <span class="font-size-lg">Outlines keep poorly thought</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Product-->
                        <!--begin::Product-->
                        <div class="col-md-3 col-lg-12 col-xxl-3">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless">
                                <div class="card-body p-0">
                                    <!--begin::Image-->
                                    <div class="overlay">
                                        <div class="overlay-wrapper rounded bg-light text-center">
                                            <img src="assets/media/products/2.png" alt="" class="mw-100 w-200px"/>
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                View</a>
                                            <a href="#"
                                               class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                        </div>
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Details-->
                                    <div
                                        class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                        <a href="#"
                                           class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Headphones</a>
                                        <span class="font-size-lg">Outlines keep poorly thought</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Product-->
                        <!--begin::Product-->
                        <div class="col-md-3 col-lg-12 col-xxl-3">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless">
                                <div class="card-body p-0">
                                    <!--begin::Image-->
                                    <div class="overlay">
                                        <div class="overlay-wrapper rounded bg-light text-center">
                                            <img src="assets/media/products/3.png" alt="" class="mw-100 w-200px"/>
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                View</a>
                                            <a href="#"
                                               class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                        </div>
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Details-->
                                    <div
                                        class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                        <a href="#"
                                           class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Smart
                                            Drones</a>
                                        <span class="font-size-lg">Outlines keep poorly thought</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-md-3 col-lg-12 col-xxl-3">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless">
                                <div class="card-body p-0">
                                    <!--begin::Image-->
                                    <div class="overlay">
                                        <div class="overlay-wrapper rounded bg-light text-center">
                                            <img src="assets/media/products/3.png" alt="" class="mw-100 w-200px"/>
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                View</a>
                                            <a href="#"
                                               class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                        </div>
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Details-->
                                    <div
                                        class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                        <a href="#"
                                           class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Smart
                                            Drones</a>
                                        <span class="font-size-lg">Outlines keep poorly thought</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Product-->
                    </div>
                    <!--end::Products-->
                </div>
            </div>
        </div>
        {{--        <form action="{{ route('brands.deletes') }}" method="post" id="delete-form">--}}
        {{--            @csrf--}}
        {{--            @can('delete-brands')--}}
        {{--                <button type="submit" style="display:none; margin-right: 10px;" class="btn btn-danger delete-selected-btn"><i class="fa fa-trash"></i> حذف المحدد  </button>--}}
        {{--            @endcan--}}
        {{--            <div class="card-body">--}}
        {{--            {!! $dataTable->table() !!}--}}
        {{--        </form>--}}
    </div>

@endsection
@section('script')
    <script src="assets/js/work.js"></script>
@endsection

