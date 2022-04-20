@php($title='إضافة العلامات التجاريه')
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
    <?php
    $lat = '24.748464971408364';
    $lng = '39.64293670654296';
    ?>
    @can('create-brands')
        <div class="card">
            <div class="card-body">
                <form method="post" id="form" action="{{route('brands.store')}}" enctype="multipart/form-data">
                    @csrf
                    @include('dashboard.brand.form')
                </form>
            </div>
        </div>
    @endcan
@endsection
@section('script')
    <script>
        // tagging support
        $('#kt_select2_1_modal').select2({
            placeholder: "اختر المدينة",
            tags: true
        });
    </script>
    <script !src="">
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
    <script !src="">
        var avatar2 = new KTImageInput('kt_image_2');
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('submit', 'form', function () {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng({{$lat}},{{$lng}}),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("us1"), mapProp);
        }
    </script>
    <script
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDPN_XufKy-QTSCB68xFJlqtUjHQ8m6uUY&callback=myMap"></script>
    <script src="{{url('/')}}/assets/js/locationpicker.jquery.js"></script>
    <script>
        $('#us1').locationpicker({
            location: {
                latitude: {{$lat}},
                longitude: {{$lng}}
            },
            radius: 300,
            markerIcon: "{{url('/assets/media/map-marker.png')}}",
            inputBinding: {
                latitudeInput: $('#lat'),
                longitudeInput: $('#lng')
            }
        });
    </script>
    <script type="text/javascript">
        $('#kt_dropzone_car').dropzone({
            paramName: "dzfile", // The name that will be used to transfer the file
            // autoProcessQueue: false,
            maxFilesize: 10, // MB
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
            dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
            dictCancelUpload: "الغاء الرفع ",
            dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
            dictRemoveFile: "حذف الصوره",
            dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
            headers: {
                'X-CSRF-TOKEN':
                    "{{ csrf_token() }}"
            }
            ,
            url: "{{ route('brands.upload.images') }}", // Set the url
            success:
                function (file, response) {
                    $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
                },

        });
    </script>

@endsection

