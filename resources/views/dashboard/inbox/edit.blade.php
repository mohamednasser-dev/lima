@php($title='محتوى الرسالة')
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
                <a href="{{route('inbox')}}"
                   class="text-muted">الرسائل</a>
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
        <div class="card-body">
            <form method="post" action="{{route('cities.update',$data->id)}}" enctype="multipart/form-data">
            @csrf
                <div class="card-body row">
                    <div class="form-group  col-6">
                        <label>الاسم<span
                                class="text-danger">*</span></label>
                        <input required name="name" value="{{ old('name', $data->name ?? '') }}"
                               class="form-control  {{ $errors->has('name') ? 'border-danger' : '' }}" type="text"
                               maxlength="255"/>
                    </div>
                    <div class="form-group  col-6">
                        <label>الاسم<span
                                class="text-danger">*</span></label>
                        <input required name="email" value="{{ old('email', $data->email ?? '') }}"
                               class="form-control  {{ $errors->has('email') ? 'border-danger' : '' }}" type="email"
                               maxlength="255"/>
                    </div>
                    <div class="form-group  col-6">
                        <label>الاسم<span
                                class="text-danger">*</span></label>
                        <input required name="phone" value="{{ old('phone', $data->phone ?? '') }}"
                               class="form-control  {{ $errors->has('phone') ? 'border-danger' : '' }}" type="tel"
                               maxlength="255"/>
                    </div>
                    <div class="form-group  col-6">
                        <label>الاسم<span
                                class="text-danger">*</span></label>
                        <textarea name="message">
            {{$data->message}}
        </textarea>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('submit', 'form', function () {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
@endsection

