<div class="card-body row">
    <div class="form-group  col-4">
        <label>الاسم بالعربيه<span
                class="text-danger">*</span></label>
        <input name="name_ar" placeholder="الاسم بالعربيه" value="{{ old('name_ar', $data->name_ar ?? '') }}"
               class="form-control  {{ $errors->has('name_ar') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
    </div>
    <div class="form-group  col-4">
        <label>الاسم بالانجليزيه<span
                class="text-danger">*</span></label>
        <input name="name_en" placeholder="الاسم بالانجليزيه" style="direction: ltr;"
               value="{{ old('name_en', $data->name_en ?? '') }}"
               class="form-control  {{ $errors->has('name_en') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
    </div>
    @if(Request::segment(2) != 'edit')
    <div class="form-group  col-4">
        <label>نوع محتوى القسم<span
                class="text-danger">*</span></label>
        <select name="type" class="form-control {{ $errors->has('role_id') ? 'border-danger' : '' }}" id="kt_select2_1_modal">
                <option @if(Request::segment(2)== 'edit') {{ 'video' == old('role_id',  $data->type)  ? 'selected' : '' }} @endif
                    value="video">فيديوهات</option>
                <option @if(Request::segment(2)== 'edit') {{ 'article' == old('role_id',  $data->type)  ? 'selected' : '' }} @endif
                    value="article">مقالات</option>
        </select>
    </div>
    @endif
    <div class="form-group col-md-6">
        <label> صورة القسم
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
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

