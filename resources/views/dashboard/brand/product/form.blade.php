<div class="card-body">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="form-group  col-5">
                    <label>اسم المنتج بالعربيه<span
                            class="text-danger">*</span></label>
                    <input name="title_ar" placeholder="مثال: مياة بيرين 200 مل" required
                           value="{{ old('title_ar', $data->title_ar ?? '') }}"
                           class="form-control  {{ $errors->has('title_ar') ? 'border-danger' : '' }}" type="text"
                           maxlength="255"/>
                </div>
                <div class="form-group  col-5">
                    <label>اسم المنتج بالانجليزيه<span
                            class="text-danger">*</span></label>
                    <input name="title_en" placeholder="ex: Berain Water 200 ml" required style="direction: ltr;"
                           value="{{ old('title_en', $data->title_en ?? '') }}"
                           class="form-control  {{ $errors->has('title_en') ? 'border-danger' : '' }}" type="text"
                           maxlength="255"/>
                </div>
                <div class="form-group col-5">
                    <label>نص العدد بالكرتونة بالعربية<span
                            class="text-danger">*</span></label>
                    <div class="">
                        <input name="count_ar" placeholder="مثال: عبوة / كرتونة" required
                               value="{{ old('count_ar', $data->count_ar ?? '') }}"
                               class="form-control  {{ $errors->has('count_ar') ? 'border-danger' : '' }}" type="text"
                               maxlength="255"/>
                    </div>
                </div>
                <div class="form-group col-5">
                    <label>نص العدد بالكرتونة بالانجليزيه<span
                            class="text-danger">*</span></label>
                    <div class="">
                        <input name="count_en" placeholder="ex: package/carton " required style="direction: ltr;"
                               value="{{ old('count_en', $data->count_en ?? '') }}"
                               class="form-control  {{ $errors->has('count_en') ? 'border-danger' : '' }}" type="text"
                               maxlength="255"/>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <label>
                الصوره الاساسيه
                <span class="text-danger">*</span>
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
    <div class="row">
        <div class="form-group  col-4">
            <label>الكمية<span
                    class="text-danger">*</span></label>
            <input name="quantity" placeholder="ex: 1500" value="{{ old('quantity', $data->quantity ?? '') }}" required
                   class="form-control {{ $errors->has('quantity') ? 'border-danger' : '' }}" type="number"/>
        </div>
        <div class="form-group  col-4">
            <label>سعر المنتج ( ر.س )<span
                    class="text-danger">*</span></label>
            <input name="price" id="txt_price" placeholder="ex: 200" value="{{ old('price', $data->price ?? '') }}"
                   required
                   class="form-control {{ $errors->has('price') ? 'border-danger' : '' }}" type="number" step="any"/>
        </div>
        <div class="form-group  col-4">
            <label>الخصم ( بالنسبة المئوية % )</label>
            <input name="discount" id="txt_discount" min="0" max="100" placeholder="ex: 10"
                   value="{{ old('discount', $data->discount ?? '') }}"
                   class="form-control {{ $errors->has('discount') ? 'border-danger' : '' }}" type="number" step="any"/>
        </div>
    </div>
    <h4>التفاصيل (أختياري)</h4>
    <div class="row">
        <div class="form-group  col-6">
            <label>تفاصيل المنتج بالعربية</label>
            <textarea name="body_ar" class="form-control  {{ $errors->has('body_ar') ? 'border-danger' : '' }}">
        {{ old('body_ar', $data->body_ar ?? '') }}
             </textarea>
        </div>
        <div class="form-group  col-6">
            <label>تفاصيل المنتج بالانجليزية</label>
            <textarea name="body_en" style="direction: ltr;" class="form-control  {{ $errors->has('body_en') ? 'border-danger' : '' }}">
        {{ old('body_en', $data->body_en ?? '') }}
             </textarea>
        </div>
    </div>
    <h4>المواصفات (أختياري)</h4>
    <div class="card-body parent" style='text-align:right' id="parent">
        <div class="row">
            <a id="addButton" class="btn btn-icon btn-success">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <br>
        <div class="panel" style='text-align:right'>
            {{--            get data in edit page--}}
            @if(request()->segment(2) == 'edit')
                @foreach($data->Details as $key => $content)
                    <div id="rowid{{$key}}" class="form-group row">
                        <div class="form-group  col-3">
                            <label>الوصف بالعربية<span class="text-danger">*</span></label>
                            <input name="rows[{{$key}}][title_ar]" placeholder="مثال: الحديد"
                                   value="{{$content->title_ar}}"

                                   class="form-control" type="text" maxlength="255"/>
                        </div>
                        <div class="form-group  col-3">
                            <label>الوصف بالانجليزية<span class="text-danger">*</span></label>
                            <input name="rows[{{$key}}][title_en]" placeholder="ex: iron" style="direction: ltr;"
                                   value="{{$content->title_en}}"

                                   class="form-control" type="text" maxlength="255"/>
                        </div>
                        <div class="form-group  col-2">
                            <label>محتوى الوصف بالعربية<span class="text-danger">*</span></label>
                            <input name="rows[{{$key}}][content_ar]" placeholder="مثال: 12 جرام"
                                   value="{{$content->content_ar}}"

                                   class="form-control" type="text" maxlength="255"/>
                        </div>
                        <div class="form-group  col-2">
                            <label>محتوى الوصف بالانجليزية<span class="text-danger">*</span></label>
                            <input name="rows[{{$key}}][content_en]" placeholder="ex: 12g" style="direction: ltr;"
                                   value="{{$content->content_en}}"
                                   class="form-control" type="text" maxlength="255"/>
                        </div>
                        <div class="form-group  col-2">
                            <label> &nbsp; </label>
                            <br>
                            <a id="delete_button" onclick="delete_row({{$key}})" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>
