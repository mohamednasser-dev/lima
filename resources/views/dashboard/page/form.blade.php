<div class="card-body row">
    <div class="form-group  col-6">
        <label>العنوان بالعربيه<span
                class="text-danger">*</span></label>
        <textarea name="title_ar" rows="10" cols="90" class="form-control">{{$data->title_ar}}</textarea>
    </div>
    <div class="form-group  col-6">
        <label>العنوان بالانجليزيه<span
                class="text-danger">*</span></label>
        <textarea name="title_en" rows="10" cols="90" class="form-control">{{$data->title_ar}}</textarea>
    </div>
    <div class="form-group col-md-6">
        <label> صورة الصفحة
        </label>
        <div class="col-lg-8">
            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"
                     style="background-image: url({{ $data->image}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{ $data->image}}" name="image"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="حذف الصورة">
                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                 </span>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

