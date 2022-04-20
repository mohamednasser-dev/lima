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
                <a href="{{route('brand_products',$data->brand_id)}}"
                   class="text-muted">المنتجات</a>
            </li>
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

        <div class="card">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="form-group  col-5">
                                <label>اسم المنتج بالعربيه</label>
                                <input disabled name="title_ar" placeholder="مثال: مياة بيرين 200 مل" required
                                       value="{{ old('title_ar', $data->title_ar ?? '') }}"
                                       class="form-control " type="text"
                                       maxlength="255"/>
                            </div>
                            <div class="form-group  col-5">
                                <label>اسم المنتج بالانجليزيه</label>
                                <input disabled name="title_en" placeholder="ex: Berain Water 200 ml" required
                                       value="{{ old('title_en', $data->title_en ?? '') }}"
                                       class="form-control " type="text"
                                       maxlength="255"/>
                            </div>
                            <div class="form-group col-5">
                                <label>نص العدد بالكرتونة بالعربية</label>
                                <div class="">
                                    <input disabled name="count_ar" placeholder="مثال: عبوة / كرتونة" required
                                           value="{{ old('count_ar', $data->count_ar ?? '') }}"
                                           class="form-control" type="text"
                                           maxlength="255"/>
                                </div>
                            </div>
                            <div class="form-group col-5">
                                <label>نص العدد بالكرتونة بالانجليزيه</label>
                                <div class="">
                                    <input disabled name="count_en" placeholder="ex: package/carton " required
                                           value="{{ old('count_en', $data->count_en ?? '') }}"
                                           class="form-control " type="text"
                                           maxlength="255"/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <label>
                            الصوره الاساسيه

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

                </div>
                <div class="row">
                    <div class="form-group  col-4">
                        <label>الكمية</label>
                        <input disabled name="quantity" placeholder="ex: 1500" value="{{ old('quantity', $data->quantity ?? '') }}" required
                               class="form-control" type="number"/>
                    </div>
                    <div class="form-group  col-4">
                        <label>سعر المنتج ( ر.س )</label>
                        <input disabled name="price" id="txt_price" placeholder="ex: 200" value="{{ old('price', $data->price ?? '') }}"
                               required
                               class="form-control" type="number" step="any"/>
                    </div>
                    <div class="form-group  col-4">
                        <label>الخصم ( بالنسبة المئوية % )</label>
                        <input disabled name="discount" id="txt_discount" min="0" max="100" placeholder="ex: 10"
                               value="{{ old('discount', $data->discount ?? '') }}"
                               class="form-control" type="number" step="any"/>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-6">
                        <label>تفاصيل المنتج بالعربية</label>
                        <textarea disabled name="body_ar" class="form-control">
        {{ old('body_ar', $data->body_ar ?? '') }}
             </textarea>
                    </div>
                    <div class="form-group  col-6">
                        <label>تفاصيل المنتج بالانجليزية</label>
                        <textarea disabled name="body_en" class="form-control" >
        {{ old('body_en', $data->body_en ?? '') }}
             </textarea>
                    </div>
                </div>
                <h4>المواصفات </h4>
                <div class="card-body parent" style='text-align:right' id="parent">

                    <div class="panel" style='text-align:right'>
                        {{--            get data in edit page--}}

                            @foreach($data->Details as $key => $content)
                                <div id="" class="form-group row">
                                    <div class="form-group  col-3">
                                        <label>الوصف بالعربية</label>
                                        <input disabled name="rows[{{$key}}][title_ar]" placeholder="مثال: الحديد"
                                               value="{{$content->title_ar}}"

                                               class="form-control" type="text" maxlength="255"/>
                                    </div>
                                    <div class="form-group  col-3">
                                        <label>الوصف بالانجليزية</label>
                                        <input disabled name="rows[{{$key}}][title_en]" placeholder="ex: iron"
                                               value="{{$content->title_en}}"

                                               class="form-control" type="text" maxlength="255"/>
                                    </div>
                                    <div class="form-group  col-3">
                                        <label>محتوى الوصف بالعربية</label>
                                        <input disabled name="rows[{{$key}}][content_ar]" placeholder="مثال: 12 جرام"
                                               value="{{$content->content_ar}}"

                                               class="form-control" type="text" maxlength="255"/>
                                    </div>
                                    <div class="form-group  col-3">
                                        <label>محتوى الوصف بالانجليزية</label>
                                        <input disabled name="rows[{{$key}}][content_en]" placeholder="ex: 12g"
                                               value="{{$content->content_en}}"
                                               class="form-control" type="text" maxlength="255"/>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>







@endsection
@section('script')
@endsection
