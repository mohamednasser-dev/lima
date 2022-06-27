@if($type == 'video')
    @php($title='اضافة فيديو جديد')
    @php($parent_title='الفيديوهات')
@else
    @php($title='اضافة مقال جديد')
    @php($parent_title='المقالات')
@endif
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')
    <style>

        .progress {
            position: relative;
            width: 100%;
            border: 1px solid #7F98B2;
            padding: 1px;
            border-radius: 3px;
        }

        .bar {
            background-color: #B4F5B4;
            width: 0%;
            height: 25px;
            border-radius: 3px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            top: 3px;
            left: 48%;
            color: #7F98B2;
        }

    </style>
@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-warning font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('posts.index',['type'=>$type])}}"
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
            <form method="post" id="form" action="{{route('posts.store')}}" enctype="multipart/form-data">
                <input type="hidden" name="type" value="{{$type}}" id="txt_type">
                @csrf
                {{--                <input type="hidden" name="parent_id" required value="{{$parent_id}}">--}}
                @include('dashboard.post.form')
            </form>
        </div>
    </div>


    <div class="modal fade" id="progressDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Please wait while we update your topic. You will be redirected automatically!</p>

                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100" style="width: 0%">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@push('script')
    <script>
        $("#saveButton").click(function () {
            $('#progressDialog').modal('show');

            var updateForm = document.querySelector('#form');
            var request = new XMLHttpRequest();

            request.upload.addEventListener('progress', function (e) {
                var percent = Math.round((e.loaded / e.total) * 100);

                $('.progress-bar').css('width', percent + '%');
                $('.sr-only').html(percent + '%');


            }, false);

            request.addEventListener('load', function (e) {
                var jsonResponse = JSON.parse(e.target.responseText);
                if (jsonResponse.errors) {
                    console.log(jsonResponse.errors);
                } else {
                    $('#progressDialog').modal('hide');
                    window.location.href = '{{url()->previous()}}';
                }
            }, false);

            updateForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(updateForm);
                request.open('post', updateForm['action']);
                request.send(formData);
            }, false);
        });


    </script>
@endpush
