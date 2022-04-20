@php($title='الصفحه الرئيسيه')
@extends('adminLayouts.app')
@section('title')
MyKom
@endsection
@section('breadcrumb')
<div class="d-flex align-items-baseline flex-wrap mr-5">
    <h5 class="text-success font-weight-bold my-1 mr-5">{{$title}}</h5>
    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card card-custom gutter-b" style="height: 150px">
            <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Globe.svg-->
                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Food\Bottle1.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M6.2,9.73333333 L8.7,6.4 C8.88885438,6.14819416 9.1852427,6 9.5,6 L14.5,6 C14.8147573,6 15.1111456,6.14819416 15.3,6.4 L17.8,9.73333333 C17.9298221,9.9064295 18,10.1169631 18,10.3333333 L18,21 C18,22.1045695 17.1045695,23 16,23 L8,23 C6.8954305,23 6,22.1045695 6,21 L6,10.3333333 C6,10.1169631 6.07017787,9.9064295 6.2,9.73333333 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,20 C8,20.5522847 8.44771525,21 9,21 L10,21 C10.5522847,21 11,20.5522847 11,20 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z"
                                    fill="#000000" />
                                <rect fill="#000000" opacity="0.3" x="9" y="1" width="6" height="3" rx="1" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['products']}}</div>
                <a class="text-muted font-weight-bold font-size-lg mt-1">عدد المنتجات</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom gutter-b" style="height: 150px">
            <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Color.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M12,21 C15.8659932,21 19,17.8659932 19,14 C19,11.4226712 16.6666667,8.08933783 12,4 C7.33333333,8.08933783 5,11.4226712 5,14 C5,17.8659932 8.13400675,21 12,21 Z"
                                fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['brands']}}</div>
                <a class="text-muted font-weight-bold font-size-lg mt-1">عدد العلامات التجارية</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom gutter-b" style="height: 150px">
            <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Book-open.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
                                fill="#000000" />
                            <path
                                d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['orders']}}</div>
                <a class="text-muted font-weight-bold font-size-lg mt-1">عدد الطلبات</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom gutter-b" style="height: 150px">
            <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['customers']}}</div>
                <a class="text-muted  font-weight-bold font-size-lg mt-1">عدد العملاء</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <!--begin::Advance Table Widget 4-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">احدث الطلبات</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('orders') }}" class="btn btn-success font-weight-bolder font-size-sm mr-3">كل
                        الطلبات</a>
                </div>
            </div>
            <div class="card-body pt-0 pb-3">
                <div class="tab-content">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                                <tr class="text-left text-uppercase">
                                    <th style="min-width: 100px">
                                        <span class="text-dark-75"> بيانات العميل</span>
                                    </th>
                                    <th style="min-width: 100px">
                                        <span class="text-dark-75">رقم الطلب</span>
                                    </th>
                                    <th style="min-width: 100px">
                                        <span class="text-dark-75">قيمة الطلب</span>
                                    </th>
                                    <th style="min-width: 130px">
                                        <span class="text-dark-75">تاريخ الانشاء</span>
                                    </th>
                                    <th style="min-width: 100px">
                                        <span class="text-dark-75">حالة الطلب</span>
                                    </th>
                                    <th class="text-center" style="min-width: 80px">
                                        <span class="text-dark-75">@lang('lang.manage')</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newest_orders as $order)
                                <tr>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->uicode }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <span class="badge badge-primary">{{ __('lang.order_status.'.$order->status)
                                            }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('orders.show', $order->id) }}"> <i
                                                class="fa la-eye text-info btn-icon"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 4-->
    </div>
    <div class="col-lg-4">
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">احدث العملاء</h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-success font-weight-bolder font-size-sm mr-3">كل العملاء</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-2">
                <div class="table-responsive">
                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <tbody>
                            @if(count($newest_customers) >0)
                            @foreach($newest_customers as $row)
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                                <img class="" src="{{$row->image}}" alt="photo">
                                            </div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(this)"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$row->name}}</a>
                                            <span class="text-muted font-weight-bold d-block">{{$row->phone}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$row->created_at->format('Y-m-d')}}</span>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
