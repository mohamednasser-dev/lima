
@extends('adminLayouts.app')
@if($data->type == 'video')
    @php($title='تعديل بيانات الفيديو')
    @php($parent_title='الفيديوهات')
@else
    @php($title='تعديل بيانات المقال')
    @php($parent_title='المقالات')
@endif
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
                <a href="{{route('posts.index',['type'=>$data->type])}}"
                   class="text-muted">{{$parent_title}}</a>
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
            <form method="post" id="form" action="{{route('posts.update',$data->id)}}" enctype="multipart/form-data">
                <input type="hidden" name="type" value="{{$data->type}}" id="txt_type">
                @csrf
                @include('dashboard.post.form')
            </form>
        </div>
    </div>
@endsection


