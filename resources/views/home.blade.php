@php($title='الصفحه الرئيسيه')
@extends('adminLayouts.app')
@section('title')
    {{settings('site_name_en')}} | {{$title}}
@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <h5 class="text-success font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
    </div>
@endsection
@section('content')
    <h3>المحتوى</h3>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-custom gutter-b" style="height: 150px">
                <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Globe.svg-->
                   <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Video-camera.svg--><svg
                           xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                           height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <rect fill="#000000" x="2" y="6" width="13" height="12" rx="2"/>
                        <path
                            d="M22,8.4142119 L22,15.5857848 C22,16.1380695 21.5522847,16.5857848 21,16.5857848 C20.7347833,16.5857848 20.4804293,16.4804278 20.2928929,16.2928912 L16.7071064,12.7071013 C16.3165823,12.3165768 16.3165826,11.6834118 16.7071071,11.2928877 L20.2928936,7.70710477 C20.683418,7.31658067 21.316583,7.31658098 21.7071071,7.70710546 C21.8946433,7.89464181 22,8.14899558 22,8.4142119 Z"
                            fill="#000000" opacity="0.3"/>
                    </g>
                </svg><!--end::Svg Icon-->
                   </span>
                </span>
                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['post_videos']}}</div>
                    <a class="text-muted font-weight-bold font-size-lg mt-1">الفيديوهات</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-custom gutter-b" style="height: 150px">
                <div class="card-body">
                 <span class="svg-icon menu-icon">
                                    </span>
                    <span class="svg-icon svg-icon-success svg-icon-3x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Globe.svg-->
                                                       <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Clipboard-list.svg--><svg
                                                               xmlns="http://www.w3.org/2000/svg"
                                                               xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                               height="24px"
                                                               viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path
                                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                    fill="#000000" opacity="0.3"/>
                                                <path
                                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                    fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2"
                                                      rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2"
                                                      rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2"
                                                      rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2"
                                                      rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2"
                                                      rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2"
                                                      rx="1"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->

                </span>
                </span>
                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['post_articles']}}</div>
                    <a class="text-muted font-weight-bold font-size-lg mt-1">المقالات</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-custom gutter-b" style="height: 150px">
                <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Dial-numbers.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
        <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
    </g>
</svg><!--end::Svg Icon--></span>
                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['categories']}}</div>
                    <a class="text-muted font-weight-bold font-size-lg mt-1"> الاقسام</a>
                </div>
            </div>
        </div>
    </div>
    <h3>العملاء</h3>
    <div class="row">
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
                <a class="text-muted  font-weight-bold font-size-lg mt-1"> العملاء الغير مشتركين</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom gutter-b" style="height: 150px">
            <div class="card-body">
                <span class="svg-icon svg-icon-success svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Shield-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                <div
                    class="text-dark font-weight-bolder font-size-h2 mt-3">{{$data['customers_subscription']}}</div>
                <a class="text-muted  font-weight-bold font-size-lg mt-1"> العملاء المشتركين</a>
            </div>
        </div>
    </div>
    </div>
    {{--<div class="row">--}}
    {{--    <div class="col-lg-8">--}}
    {{--        <!--begin::Advance Table Widget 4-->--}}
    {{--        <div class="card card-custom card-stretch gutter-b">--}}
    {{--            <!--begin::Header-->--}}
    {{--            <div class="card-header border-0 py-5">--}}
    {{--                <h3 class="card-title align-items-start flex-column">--}}
    {{--                    <span class="card-label font-weight-bolder text-dark">احدث الطلبات</span>--}}
    {{--                </h3>--}}
    {{--                <div class="card-toolbar">--}}
    {{--                    <a href="{{ route('orders') }}" class="btn btn-success font-weight-bolder font-size-sm mr-3">كل--}}
    {{--                        الطلبات</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card-body pt-0 pb-3">--}}
    {{--                <div class="tab-content">--}}
    {{--                    <!--begin::Table-->--}}
    {{--                    <div class="table-responsive">--}}
    {{--                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
    {{--                            <thead>--}}
    {{--                                <tr class="text-left text-uppercase">--}}
    {{--                                    <th style="min-width: 100px">--}}
    {{--                                        <span class="text-dark-75"> بيانات العميل</span>--}}
    {{--                                    </th>--}}
    {{--                                    <th style="min-width: 100px">--}}
    {{--                                        <span class="text-dark-75">رقم الطلب</span>--}}
    {{--                                    </th>--}}
    {{--                                    <th style="min-width: 100px">--}}
    {{--                                        <span class="text-dark-75">قيمة الطلب</span>--}}
    {{--                                    </th>--}}
    {{--                                    <th style="min-width: 130px">--}}
    {{--                                        <span class="text-dark-75">تاريخ الانشاء</span>--}}
    {{--                                    </th>--}}
    {{--                                    <th style="min-width: 100px">--}}
    {{--                                        <span class="text-dark-75">حالة الطلب</span>--}}
    {{--                                    </th>--}}
    {{--                                    <th class="text-center" style="min-width: 80px">--}}
    {{--                                        <span class="text-dark-75">@lang('lang.manage')</span>--}}
    {{--                                    </th>--}}
    {{--                                </tr>--}}
    {{--                            </thead>--}}
    {{--                            <tbody>--}}
    {{--                                @foreach($newest_orders as $order)--}}
    {{--                                <tr>--}}
    {{--                                    <td>{{ $order->user->name }}</td>--}}
    {{--                                    <td>{{ $order->uicode }}</td>--}}
    {{--                                    <td>{{ $order->total }}</td>--}}
    {{--                                    <td>{{ $order->created_at }}</td>--}}
    {{--                                    <td>--}}
    {{--                                        <span class="badge badge-primary">{{ __('lang.order_status.'.$order->status)--}}
    {{--                                            }}</span>--}}
    {{--                                    </td>--}}
    {{--                                    <td class="text-center">--}}
    {{--                                        <a href="{{ route('orders.show', $order->id) }}"> <i--}}
    {{--                                                class="fa la-eye text-info btn-icon"></i></a>--}}
    {{--                                    </td>--}}
    {{--                                </tr>--}}
    {{--                                @endforeach--}}
    {{--                            </tbody>--}}
    {{--                        </table>--}}
    {{--                    </div>--}}
    {{--                    <!--end::Table-->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!--end::Body-->--}}
    {{--        </div>--}}
    {{--        <!--end::Advance Table Widget 4-->--}}
    {{--    </div>--}}
    {{--    <div class="col-lg-4">--}}
    {{--        <div class="card card-custom card-stretch gutter-b">--}}
    {{--            <div class="card-header border-0">--}}
    {{--                <h3 class="card-title font-weight-bolder text-dark">احدث العملاء</h3>--}}
    {{--                <div class="card-toolbar">--}}
    {{--                    <div class="dropdown dropdown-inline">--}}
    {{--                        <a href="#" class="btn btn-success font-weight-bolder font-size-sm mr-3">كل العملاء</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card-body pt-2">--}}
    {{--                <div class="table-responsive">--}}
    {{--                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
    {{--                        <tbody>--}}
    {{--                            @if(count($newest_customers) >0)--}}
    {{--                            @foreach($newest_customers as $row)--}}
    {{--                            <tr>--}}
    {{--                                <td class="pl-0 py-8">--}}
    {{--                                    <div class="d-flex align-items-center">--}}
    {{--                                        <div class="symbol symbol-50 flex-shrink-0 mr-4">--}}
    {{--                                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">--}}
    {{--                                                <img class="" src="{{$row->image}}" alt="photo">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div>--}}
    {{--                                            <a href="javascript:void(this)"--}}
    {{--                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$row->name}}</a>--}}
    {{--                                            <span class="text-muted font-weight-bold d-block">{{$row->phone}}</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </td>--}}
    {{--                                <td>--}}
    {{--                                    <span--}}
    {{--                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$row->created_at->format('Y-m-d')}}</span>--}}
    {{--                                </td>--}}
    {{--                            </tr>--}}
    {{--                            @endforeach--}}
    {{--                            @endif--}}
    {{--                        </tbody>--}}
    {{--                    </table>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
