@php($title=__('lang.show').' '.__('lang.order'))
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
            <a href="{{route('coupons')}}" class="text-muted">{{ $title }}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{route('admin')}}" class="text-muted">الصفحة الرئيسية</a>
        </li>

    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection
@section('content')
<div class="d-flex flex-row">
    <!--begin::Layout-->
    <div class="flex-row-fluid mr-lg-8">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body p-0">
                <!-- begin: Invoice-->
                <!-- begin: Invoice header-->
                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                    <div class="col-md-10">
                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                            <h1 class="display-4 font-weight-boldest mb-10">{{ __('lang.order_details') }}</h1>
                            <div class="d-flex flex-column align-items-md-end px-0">
                                <!--begin::Logo-->
                                <a href="#" class="mb-5 bg-dark p-5">
                                    <img src="{{ settings('logo') }}" alt="" style="width: 150px;">
                                </a>
                                <!--end::Logo-->
                                <span class="d-flex flex-column align-items-md-end opacity-70">
                                    <span>{{ settings('address_ar') }}</span>
                                    <span>{{ settings('address_en') }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="border-bottom w-100"></div>
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root col-2">
                                <span class="font-weight-bolder mb-2">@lang('lang.order_date')</span>
                                <span class="opacity-70">{{ $data->order_date->toDateString() }}</span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">@lang('lang.order_no')</span>
                                <span class="opacity-70">{{ $data->uicode }}</span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">@lang('lang.address')</span>
                                <span class="opacity-70">{{$data->address->full_address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice header-->
                <!-- begin: Invoice body-->
                <div class="row justify-content-center py-5 px-8 py-md-5 px-md-0">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">
                                            @lang('lang.ordered_items')</th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase">
                                            @lang('lang.quantity')</th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase">
                                            @lang('lang.price')
                                        </th>
                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">
                                            @lang('lang.total')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data->items as $item)
                                    <tr class="font-weight-boldest">
                                        <td class="border-0 pl-0 pt-7 d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                <div class="symbol-label"
                                                    style="background-image: url('{{ $item->product->image }}')"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            {{ $item->product->title }}
                                        </td>
                                        <td class="text-right pt-7 align-middle">{{ $item->quantity }}</td>
                                        <td class="text-right pt-7 align-middle">{{ $item->price }} </td>
                                        <td class="text-primary pr-0 pt-7 text-right align-middle">{{ $item->total }}
                                            @lang('lang.currency')</td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice body-->
                
                <!-- begin: Invoice footer-->
                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted text-uppercase">
                                            @lang('lang.payment_type')</th>
                                        <th class="font-weight-bold text-muted text-uppercase">
                                            @lang('lang.payment_status')</th>
                                        <th class="font-weight-bold text-muted text-uppercase">@lang('lang.delivery_price')</th>
                                        <th class="font-weight-bold text-muted text-uppercase">@lang('lang.shipping_cost')</th>
                                        <th class="font-weight-bold text-muted text-uppercase">
                                            @lang('lang.total_shipping_cost')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-bolder">
                                        <td>{{ __('lang.payment_types.'.$data->payment) }}</td>
                                        <td>{{ __('lang.payment_status_list.'.$data->payment_status) }}</td>
                                        <td>{{ $data->delivery_price }} @lang('lang.currency')</td>
                                        <td class="text-primary font-size-h5">{{
                                            $data->price }} @lang('lang.currency')
                                        <td class="text-primary font-size-h5">{{
                                            $data->total }} @lang('lang.currency')
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice footer-->

                <!-- begin: Invoice action-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-10">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary font-weight-bold"
                                onclick="window.print();">@lang('lang.print_order_details')</button>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
                <!-- end: Invoice-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Layout-->
    <!--begin::Aside-->
    <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
        <!--begin::List Widget 18-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title">
                    <span class="card-label font-weight-bolder text-dark">@lang('lang.details')</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                <!--begin::Container-->
                <div>
                    <div class="d-block mb-3 pt-0">
                        <div class="d-block mb-3">
                            <span class="font-weight-bolder mb-2">@lang('lang.shipping_type')</span>
                            <span class="opacity-70">{{ __('lang.shipping_types.'.$data->shipping_type) }}</span>
                        </div>
                        @if (!$data->isShippingOnce())
                        <div class="d-block mb-3">
                            <span class="font-weight-bolder mb-2">@lang('lang.shipping_count')</span>
                            <span class="opacity-70">{{ $data->shipping_count }}</span>
                        </div>
                        @if ($data->isShippingWeekly())
                        <div class="d-block mb-3">
                            <span class="font-weight-bolder mb-2">@lang('lang.week_day')</span>
                            <span class="opacity-70">{{ strtoupper($data->week_day) }}</span>
                        </div>
                        @endif
                        <div class="d-block mb-3">
                            <span class="font-weight-bolder mb-2">@lang('lang.start_date')</span>
                            <span class="opacity-70">{{$data->start_date->toDateString() }}</span>
                        </div>
                        <div class="d-block mb-3">
                            <span class="font-weight-bolder mb-2">@lang('lang.end_date')</span>
                            <span class="opacity-70">{{$data->end_date->toDateString() }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 18-->

        <!--begin::List Widget 17-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">@lang('lang.shipments')</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ __('lang.shipping_count_msg', ['no'
                        => $data->shipping_count]) }}</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-4">
                <!--begin::Container-->
                <div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold text-muted text-uppercase">@lang('lang.shipping_date')
                                    </th>
                                    <th class="font-weight-bold text-muted text-uppercase">@lang('lang.status')</th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->isShippingOnce())
                                <tr class="font-weight-bolder">
                                    <td>{{ $data->start_date->toDateString() }}</td>
                                    <td>{{ $data->status }}</td>
                                    </td>
                                </tr>
                                @else
                                @forelse ($data->shipments as $shipment)
                                <tr class="font-weight-bolder">
                                    <td>{{ $shipment->date->toDateString() }}</td>
                                    <td>
                                        @if ($shipment->isPending())
                                        <span class="badge badge-warning">{{
                                            __('lang.shipping_status_list.'.$shipment->status) }}</span>
                                        @else
                                        <span class="badge badge-success">{{
                                            __('lang.shipping_status_list.'.$shipment->status) }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                @lang('lang.no_data')
                                @endforelse
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 17-->
    </div>
    <!--end::Aside-->
</div>

@endsection
@section('script')
@endsection