@php($title='التفاصيل')
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')
@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-success font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            @can('read-users')
                <li class="breadcrumb-item">
                    <a href="{{route('users')}}"
                       class="text-muted">العملاء</a>
                </li>
            @endcan
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
        <div class="card-header">
            <div class="card-title">
                <h3>بيانات العميل</h3>
            </div>
        </div>
        <div class="card-body">
{{--            <div class="row" style="text-align: center;">--}}
{{--                <div class="form-group col-md-12">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="image-input image-input-outline" id="kt_image_1">--}}
{{--                            <div class="image-input-wrapper"--}}
{{--                                 style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>--}}
{{--                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"--}}
{{--                                  data-action="cancel" data-toggle="tooltip" title="Cancel avatar">--}}
{{--                      <i class="ki ki-bold-close icon-xs text-muted"></i>--}}
{{--                     </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="form-group  col-3">
                    <label>الاسم</label>
                    <input name="name" value="{{  $data->name ?? ''}}" class="form-control "
                           type="text"
                           maxlength="255" disabled/>
                </div>
{{--                <div class="form-group  col-3">--}}
{{--                    <label>البريد الالكتروني</label>--}}
{{--                    <input name="email" value="{{ $data->email ?? ''}}"--}}
{{--                           class="form-control  " type="email"--}}
{{--                           maxlength="255" disabled/>--}}
{{--                </div>--}}
                <div class="form-group  col-3">
                    <label>رقم الهاتف</label>
                    <input name="phone" value="{{  $data->phone ?? '' }}"
                           class="form-control  " type="tel"
                           maxlength="255" disabled/>
                </div>
                <div class="form-group  col-3">
                    <label>الدولة</label>
                    <input name="phone" value="{{  $data->City->name ?? '' }}"
                           class="form-control  " type="tel"
                           maxlength="255" disabled/>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h3>اشتراك العميل</h3>
            </div>
        </div>
        <div class="card-body row">
            @if($data->subscriber == 1)
                <div class="form-group  col-3">
                    <label>تاريخ نهاية الاشتراك</label>
                    <input name="name" value="{{  $data->subscription_ended_at ?? ''}}" class="form-control "
                           type="text" disabled/>
                </div>
            @else
                <div class="form-group  col-3">
                    <span class="label label-lg label-light-danger label-inline">لا يوجد اشتراك </span>
                </div>
            @endif
            <div class="form-group  col-9">
                <label>سجل الاشتراكات</label>
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">نوع الاشتراك</th>
                        <th title="Field #2">يبدأ في</th>
                        <th title="Field #2">ينتهي في</th>
                        <th title="Field #2">مبلغ الاشتراك</th>
                        <th title="Field #3">طريقة الدفع</th>
                        <th title="Field #7">حالة الاشتراك</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscriptions as $key => $row)
                        <tr>
                            <td>{{$row->name_ar}}</td>
                            <td>{{$row->started_at}}</td>
                            <td>{{$row->ended_at}}</td>
                            <td>{{$row->cost}}</td>
                            <td>{{$row->type_name}}</td>
                            <td>{{$row->status_text}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$subscriptions->links()}}
                <!--end: Datatable-->
            </div>

        </div>
    </div>
@endsection
@section('script')

@endsection
