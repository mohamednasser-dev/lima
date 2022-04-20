@php($title='تعديل العلامات التجاريه')
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
            @can('read-brands')
            <li class="breadcrumb-item">
                <a href="{{route('brands')}}"
                   class="text-muted">العلامات التجاريه</a>
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
    <?php
    $lat = $data->lat;
    $lng = $data->lng;
    ?>
    @can('update-brands')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('brands.update',$data->id)}}" enctype="multipart/form-data">
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
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
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
@endsection

