<div class="card-body row">
    <div class="form-group  col-6">
        <label>اسم المدينة بالعربيه<span
                class="text-danger">*</span></label>
        <input required name="name_ar" placeholder="اسم المدينة بالعربيه"  value="{{ old('name_ar', $data->name_ar ?? '') }}" class="form-control  {{ $errors->has('name_ar') ? 'border-danger' : '' }}" type="text"
               maxlength="255" />
    </div>
    <div class="form-group  col-6">
        <label>اسم المدينة بالانجليزيه<span
                class="text-danger">*</span></label>
        <input required name="name_en" placeholder="اسم المدينة بالانجليزيه" style="direction: ltr;"  value="{{ old('name_en', $data->name_en ?? '') }}" class="form-control  {{ $errors->has('name_en') ? 'border-danger' : '' }}" type="text"
               maxlength="255" />
    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

