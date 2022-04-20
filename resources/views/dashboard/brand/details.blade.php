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
            <li class="breadcrumb-item">
                <a href="{{route('brands')}}"
                   class="text-muted">العلامات التجاريه</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">الصفحة الرئيسية</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body row">
            <div class="form-group  col-6">
                <label>اسم العلامه التجاريه بالعربيه</label>
                <input disabled name="title_ar" placeholder="اسم العلامه التجاريه بالعربيه"
                       value="{{  $data->title_ar ?? '' }}"
                       class="form-control" type="text"
                       maxlength="255"/>
            </div>
            <div class="form-group  col-6">
                <label>اسم العلامه التجاريه بالانجليزيه</label>
                <input disabled name="title_en" placeholder="اسم العلامه التجاريه بالعربيه"
                       value="{{ $data->title_en ?? '' }}"
                       class="form-control" type="text"
                       maxlength="255"/>
            </div>
            <div class="form-group col-6">
                <label>وصف الملحوظات بالعربيه</label>
                <div class="">
                <textarea disabled class="form-control "
                          placeholder="ادخل وصف الملحوظات بالعربيه" name="body_ar"
                          rows="5">{{  $data->body_ar ?? ''}}</textarea>
                </div>
            </div>
            <div class="form-group col-6">
                <label>وصف الملحوظات بالانجليزيه</label>
                <div class="">
                <textarea disabled class="form-control"
                          placeholder="ادخل وصف الملحوظات بالانجليزيه" name="body_en"
                          rows="5">{{  $data->body_en ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group col-6">
                <label>الرؤيه بالعربيه</label>
                <div class="">
                <textarea disabled class="form-control "
                          placeholder="ادخل الرؤيه بالعربيه" name="vision_ar"
                          rows="5">{{ $data->vision_ar ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group col-6">
                <label>الرؤيه بالانجليزيه</label>
                <div class="">
                <textarea disabled class="form-control"
                          placeholder="ادخل الرؤيه بالانجليزيه" name="vision_en"
                          rows="5">{{  $data->vision_en ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group col-6">
                <label>الرساله بالعربيه</label>
                <div class="">
                <textarea disabled class="form-control "
                          placeholder="ادخل الرؤيه بالعربيه" name="message_ar"
                          rows="5">{{ $data->message_ar ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group col-6">
                <label>الرساله بالانجليزيه</label>
                <div class="">
                <textarea disabled class="form-control  "
                          placeholder="ادخل الرساله بالانجليزيه" name="message_en"
                          rows="5">{{  $data->message_en ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group  col-6">
                <label>اقل سعر للطلب</label>
                <input disabled name="min_order" placeholder="اقل سعر للطلب" value="{{ $data->min_order ?? '' }}"
                       class="form-control " step="any" type="number"/>
            </div>
            <div class="form-group col-6">
                <label>المدينه</label>
                <input disabled name="city_id"  value="{{$data->city->name_ar}}"
                       class="form-control"  type="text"/>
            </div>
            <div class="form-group col-md-6">
                <label> الصوره الاساسيه

                </label>
                <div class="col-lg-8">

                    <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper"
                             style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                              data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                     </span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label> صورة الخلفيه

                </label>
                <div class="col-lg-8">
                    <div class="image-input image-input-outline" id="kt_image_2">
                        <div class="image-input-wrapper"
                             style="background-image: url({{old('cover', $data->cover ?? 'default-image.png' )}})"></div>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                              data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                     </span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
                <br>
                <h6 class="text-dark"> شهادات العلامه التجاريه </h6>
                <div class="card-body col-12">
                    <div class="form-group ">

                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="carousel-item active">

                                        <div class="col-12">
                                            @foreach($data->Images as $c)
                                                <img class="p-2 img-thumbnail" style="height: 150px; width: 150px;"
                                                     src="{{$c->image}}">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <?php
                $lat = $data->lng;
                $lng = $data->lat;
                ?>

                <label>مكان الشركة على الخريطة</label>
                <div class="form-group col-12">
                    <div class="card-body parent" style='text-align:right' id="parent">
                        <div id="" class="form-group row">
                            <div class="col-sm-12 ">
                                <div id="us1" style="width:100%;height:400px;"></div>
                            </div>
                            <input disabled required type="hidden" name="lat" id="lat" value="{{$lat}}" >
                            <input disabled required type="hidden" name="lng" id="lng" value="{{$lng}}" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDPN_XufKy-QTSCB68xFJlqtUjHQ8m6uUY&callback=myMap"></script>
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
