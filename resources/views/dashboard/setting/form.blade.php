

<div class="row">
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="site_name_ar">أسم الموقع بالعربيه<span
                    class="text-danger">*</span></label>
            <input type="text" name="site_name_ar" id="site_name_ar"
                   value="{{ old('site_name_ar', $data->where('key', 'site_name_ar')->first()->val) }}"
                   class="form-control {{ $errors->has('site_name_ar') ? 'border-danger' : '' }}"
                   placeholder="أدخل أسم الموقع بالعربيه"/>
        </div>
    </div>

    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="site_name_en">أسم الموقع بالانجليزيه<span
                    class="text-danger">*</span></label>
            <input type="text" name="site_name_en" id="site_name_en" style="direction: ltr;"
                   value="{{ old('site_name_en', $data->where('key', 'site_name_en')->first()->val) }}"
                   class="form-control {{ $errors->has('site_name_en') ? 'border-danger' : '' }}"
                   placeholder="أدخل أسم الموقع بالعربيه"/>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="address_ar">العنوان بالعربيه<span
                    class="text-danger">*</span></label>
            <input type="text" name="address_ar" id="address_ar"
                   value="{{ old('address_ar', $data->where('key', 'address_ar')->first()->val) }}"
                   class="form-control {{ $errors->has('address_ar') ? 'border-danger' : '' }}"
                   placeholder="أدخل العنوان بالعربيه"/>
        </div>
    </div>

    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="address_en">العنوان بالانجليزيه<span
                    class="text-danger">*</span></label>
            <input type="text" name="address_en" id="address_en" style="direction: ltr;"
                   value="{{ old('address_en', $data->where('key', 'address_en')->first()->val) }}"
                   class="form-control {{ $errors->has('address_en') ? 'border-danger' : '' }}"
                   placeholder="أدخل العنوان بالانجليزيه"/>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="location">رابط العنوان <span
                    class="text-danger">*</span></label>
            <input type="url" name="location" id="location"
                   value="{{ old('location', $data->where('key', 'location')->first()->val) }}"
                   class="form-control {{ $errors->has('location') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط العنوان"/>
        </div>
    </div>

    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="phone">رقم الجوال <span
                    class="text-danger">*</span></label>
            <input type="number" name="phone" id="phone"
                   value="{{ old('phone', $data->where('key', 'phone')->first()->val) }}"
                   class="form-control {{ $errors->has('phone') ? 'border-danger' : '' }}"
                   placeholder="أدخل رقم الجوال"/>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="terms_ar">الأحكام والشروط بالعربيه<span class="text-danger">*</span></label>
            <textarea name="terms_ar" rows="10" cols="90" class="form-control" >
        {{ old('terms_ar', $data->where('key', 'terms_ar')->first()->val) }}
             </textarea>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="terms_en">الأحكام والشروط بالانجليزيه<span class="text-danger">*</span></label>
            <textarea name="terms_en" rows="10" cols="90" class="form-control" style="direction: ltr;" >
        {{ old('terms_en', $data->where('key', 'terms_en')->first()->val) }}
             </textarea>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="privacy_ar">الخصوصيه بالعربيه<span class="text-danger">*</span></label>
            <textarea name="privacy_ar" rows="10" cols="90" class="form-control" >
        {{ old('privacy_ar', $data->where('key', 'privacy_ar')->first()->val) }}
             </textarea>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="privacy_en">الخصوصيه بالانجليزيه<span class="text-danger">*</span></label>
            <textarea name="privacy_en" rows="10" cols="90" class="form-control" style="direction: ltr;" >
        {{ old('privacy_en', $data->where('key', 'privacy_en')->first()->val) }}
             </textarea>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="usage_ar">سياسيه الاستخدام بالعربيه<span class="text-danger">*</span></label>
            <textarea name="usage_ar" rows="10" cols="90" class="form-control">
        {{ old('usage_ar', $data->where('key', 'usage_ar')->first()->val) }}
             </textarea>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="usage_en">سياسيه الاستخدام بالانجليزيه<span class="text-danger">*</span></label>
            <textarea name="usage_en" rows="10" cols="90" class="form-control" style="direction: ltr;">
        {{ old('usage_en', $data->where('key', 'usage_en')->first()->val) }}
             </textarea>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="about_ar">ماذا عننا بالعربيه<span class="text-danger">*</span></label>
            <textarea name="about_ar" rows="10" cols="90" class="form-control">
        {{ old('about_ar', $data->where('key', 'about_ar')->first()->val) }}
             </textarea>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="about_en">ماذا عننا بالانجليزيه<span class="text-danger">*</span></label>
            <textarea name="about_en" rows="10" cols="90" class="form-control" style="direction: ltr;" >
        {{ old('about_en', $data->where('key', 'about_en')->first()->val) }}
             </textarea>
        </div>
    </div>


    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="email">البريد الالكتروني <span
                    class="text-danger">*</span></label>
            <input type="email" name="email" id="email"
                   value="{{ old('email', $data->where('key', 'email')->first()->val) }}"
                   class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}"
                   placeholder="أدخل البريد الالكتروني"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="facebook">رابط الفيس بوك <span
                    class="text-danger">*</span></label>
            <input type="url" name="facebook" id="facebook"
                   value="{{ old('facebook', $data->where('key', 'facebook')->first()->val) }}"
                   class="form-control {{ $errors->has('facebook') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط الفيس بوك"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="twitter">رابط تويتر <span
                    class="text-danger">*</span></label>
            <input type="url" name="twitter" id="twitter"
                   value="{{ old('twitter', $data->where('key', 'twitter')->first()->val) }}"
                   class="form-control {{ $errors->has('twitter') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط تويتر"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="instagram">رابط انستقرام <span
                    class="text-danger">*</span></label>
            <input type="url" name="instagram" id="instagram"
                   value="{{ old('instagram', $data->where('key', 'instagram')->first()->val) }}"
                   class="form-control {{ $errors->has('instagram') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط انستقرام"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="snapchat">رابط سنابشات <span
                    class="text-danger">*</span></label>
            <input type="url" name="snapchat" id="snapchat"
                   value="{{ old('snapchat', $data->where('key', 'snapchat')->first()->val) }}"
                   class="form-control {{ $errors->has('snapchat') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط سنابشات"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="pinterest">رابط بينتريست <span
                    class="text-danger">*</span></label>
            <input type="url" name="pinterest" id="snapchat"
                   value="{{ old('pinterest', $data->where('key', 'pinterest')->first()->val) }}"
                   class="form-control {{ $errors->has('pinterest') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط بينتريست"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="youtube">رابط يوتيوب <span
                    class="text-danger">*</span></label>
            <input type="url" name="youtube" id="youtube"
                   value="{{ old('youtube', $data->where('key', 'youtube')->first()->val) }}"
                   class="form-control {{ $errors->has('youtube') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط يوتيوب"/>
        </div>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="telegram">رابط تيليجرام <span
                    class="text-danger">*</span></label>
            <input type="url" name="telegram" id="telegram"
                   value="{{ old('telegram', $data->where('key', 'telegram')->first()->val) }}"
                   class="form-control {{ $errors->has('telegram') ? 'border-danger' : '' }}"
                   placeholder="أدخل رابط تيليجرام"/>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-4">
        <label for="">لوجو الموقع<span
                class="text-danger">*</span></label>
        <div class="col-lg-8">
            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper {{ $errors->has('logo') ? 'border-danger' : '' }}"
                     style="background-image: url({{$data->where('key', 'logo')->first()->val ?? ''}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{ old('youtube', $data->where('key', 'logo')->first()->val) }}"
                           name="logo" accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <label for="">خلفيه صفحه الدخول<span
                class="text-danger">*</span></label>
        <div class="col-lg-8">
            <div class="image-input image-input-outline" id="kt_image_2">
                <div class="image-input-wrapper {{ $errors->has('login_pg') ? 'border-danger' : '' }}"
                     style="background-image: url({{$data->where('key', 'login_pg')->first()->val ?? ''}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{ old('youtube', $data->where('key', 'login_pg')->first()->val) }}"
                           name="login_pg"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <label for="">لوجو صفحه الدخول<span
                class="text-danger">*</span></label>
        <div class="col-lg-8">
            <div class="image-input image-input-outline" id="kt_image_3">
                <div class="image-input-wrapper {{ $errors->has('logo_login') ? 'border-danger' : '' }}"
                     style="background-image: url({{$data->where('key', 'logo_login')->first()->val ?? ''}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{ old('youtube', $data->where('key', 'logo_login')->first()->val) }}"
                           name="logo_login"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@can('update-settings')
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>
@endcan
