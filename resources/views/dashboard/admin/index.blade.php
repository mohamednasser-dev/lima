@php($title='المديرين')
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
                <a href="{{route('admin')}}"
                   class="text-muted">الصفحة الرئيسية</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')
    <div class="card">
        <form action="{{ route('admins.deletes') }}" method="post" id="delete-form">
            @csrf
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 text-left">
                        @can('delete-admins')
                            <button type="submit" style="display:none; margin-right: 10px;"
                                    class="btn btn-sm btn-light-danger font-weight-bolder mr-2 delete-selected-btn"><i
                                    class="fa fa-trash"></i> حذف المحدد
                            </button>
                        @endcan
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create-admins')
                            <a href="{{route('admins.create')}}"
                               class="btn btn-sm btn-light-success font-weight-bolder mr-2">
                                <i class="fa fa-plus"></i>اضـافـه</a>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="card-body">
            {!! $dataTable->table() !!}
        </form>
    </div>
@endsection
@section('script')
    {!! $dataTable->scripts() !!}
    <script src="assets/js/work.js"></script>
@endsection
