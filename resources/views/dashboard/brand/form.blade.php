<div class="card-body">
    <div class="row">
        <div class="form-group  col-6">
            <label>اسم العلامه التجاريه بالعربيه<span
                    class="text-danger">*</span></label>
            <input name="title_ar" placeholder="اسم العلامه التجاريه بالعربيه"
                   value="{{ old('title_ar', $data->title_ar ?? '') }}"
                   class="form-control  {{ $errors->has('title_ar') ? 'border-danger' : '' }}" type="text"
                   maxlength="255"/>
        </div>
        <div class="form-group  col-6">
            <label>اسم العلامه التجاريه بالانجليزيه<span
                    class="text-danger">*</span></label>
            <input name="title_en" placeholder="اسم العلامه التجاريه بالعربيه" style="direction: ltr;"
                   value="{{ old('title_en', $data->title_en ?? '') }}"
                   class="form-control  {{ $errors->has('title_en') ? 'border-danger' : '' }}" type="text"
                   maxlength="255"/>
        </div>
        <div class="form-group col-6">
            <label>وصف الملحوظات بالعربيه<span class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('body_ar') ? 'border-danger' : '' }} "
                          placeholder="ادخل وصف الملحوظات بالعربيه" name="body_ar"
                          rows="5">{{ old('body_ar', $data->body_ar ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group col-6">
            <label>وصف الملحوظات بالانجليزيه<span
                    class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('body_en') ? 'border-danger' : '' }} " style="direction: ltr;"
                          placeholder="ادخل وصف الملحوظات بالانجليزيه" name="body_en"
                          rows="5">{{ old('body_en', $data->body_en ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group col-6">
            <label>الرؤيه بالعربيه<span
                    class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('vision_ar') ? 'border-danger' : '' }} "
                          placeholder="ادخل الرؤيه بالعربيه" name="vision_ar"
                          rows="5">{{ old('vision_ar', $data->vision_ar ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group col-6">
            <label>الرؤيه بالانجليزيه<span
                    class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('vision_en') ? 'border-danger' : '' }} " style="direction: ltr;"
                          placeholder="ادخل الرؤيه بالانجليزيه" name="vision_en"
                          rows="5">{{ old('vision_en', $data->vision_en ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group col-6">
            <label>الرساله بالعربيه<span
                    class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('message_ar') ? 'border-danger' : '' }} "
                          placeholder="ادخل الرؤيه بالعربيه" name="message_ar"
                          rows="5">{{ old('message_ar', $data->message_ar ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group col-6">
            <label>الرساله بالانجليزيه<span
                    class="text-danger">*</span></label>
            <div class="">
                <textarea class="form-control {{ $errors->has('message_en') ? 'border-danger' : '' }} " style="direction: ltr;"
                          placeholder="ادخل الرساله بالانجليزيه" name="message_en"
                          rows="5">{{ old('message_en', $data->message_en ?? '') }}</textarea>
            </div>
        </div>
        <div class="form-group  col-6">
            <label>اقل سعر للطلب<span
                    class="text-danger">*</span></label>
            <input name="min_order" placeholder="اقل سعر للطلب" value="{{ old('min_order', $data->min_order ?? '') }}"
                   class="form-control   {{ $errors->has('min_order') ? 'border-danger' : '' }}" step="any" type="number"/>
        </div>
        <div class="form-group col-6">
            <label>المدينه<span class="text-danger">*</span></label>
            <select name="city_id" class="form-control select2 {{ $errors->has('city_id') ? 'border-danger' : '' }}"
                    id="kt_select2_1_modal">
                @foreach($cities as $row)
                    <option
                        @if(Request::segment(1)== 'brands' && Request::segment(2)== 'edit')
                        {{ $row->id == old('city_id',  $data->city_id)  ? 'selected' : '' }}
                        @else
                        {{ $row->id == old('city_id') ? 'selected' : '' }}
                        @endif
                        value="{{ $row->id }}">{{ $row->name_ar }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label> الصوره الاساسيه
                            <span class="text-danger">  * يجب ان يكون ابعاد الصوره 1 : 1</span>
            </label>
            <div class="col-lg-8">
                <div class="image-input image-input-outline" id="kt_image_1">
                    <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"
                         style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                           data-action="change" data-toggle="tooltip" title=""
                           data-original-title="اختر صوره">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" value="{{old('image', $data->image ?? '')}}" name="image"
                               accept=".png, .jpg, .jpeg"/>
                    </label>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                          data-action="cancel" data-toggle="tooltip" title="حذف الصورة">
                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                     </span>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label> صورة الخلفيه
                {{--            <span class="text-danger">  * يجب ان يكون ابعاد الصوره 2 : 1</span>--}}
            </label>
            <div class="col-lg-8">
                <div class="image-input image-input-outline" id="kt_image_2">
                    <div class="image-input-wrapper {{ $errors->has('cover') ? 'border-danger' : '' }}"
                         style="background-image: url({{old('cover', $data->cover ?? 'default-image.png' )}})"></div>
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                           data-action="change" data-toggle="tooltip" title=""
                           data-original-title="اختر صوره">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" value="{{old('cover', $data->cover ?? '')}}" name="cover"
                               accept=".png, .jpg, .jpeg"/>
                    </label>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                          data-action="cancel" data-toggle="tooltip" title="حذف الصورة">
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
                    @if(Request::segment(1)== 'brands' && Request::segment(2)== 'edit')
                        <div class="row">
                            <div class="card-body col-12">
                                <div class="carousel-item active">

                                    <div class="col-12">
                                        @foreach($data->Images as $c)
                                            <a style="position: absolute;"
                                               class="btn btn-icon btn-danger btn-circle btn-sm"
                                               onclick="confirm('هل متاكد من الحذف؟')"
                                               href="{{route('brands.image.delete',$c->id)}}">
                                                <i class="icon-nm fas far fa-trash"
                                                   aria-hidden='true'></i>
                                            </a>
                                            <img class="p-2 img-thumbnail" style="height: 150px; width: 150px;"
                                                 src="{{$c->image}}">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div
                        class="dropzone dropzone-default dropzone-warning {{ $errors->has('image') ? 'border-danger' : '' }}"
                        id="kt_dropzone_car">
                        <div class="dropzone-msg dz-message needsclick ">
                            <h3 class="dropzone-msg-title">يمكنك اضافه اكثر من صوره</h3>
                        </div>
                    </div>
                </div>
            </div>
            <label>مكان الشركة على الخريطة</label>
            <div class="form-group col-12">
                <div class="card-body parent" style='text-align:right' id="parent">
                    <div id="" class="form-group row">
                        <div class="col-sm-12 ">
                            <div id="us1" style="width:100%;height:400px;"></div>
                        </div>
                        <input required type="hidden" name="lat" id="lat" value="{{$lat}}">
                        <input required type="hidden" name="lng" id="lng" value="{{$lng}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>
