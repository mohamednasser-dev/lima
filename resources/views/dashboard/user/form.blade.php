<div class="card-body row">
    <div class="form-group  col-3">
        <label>الاسم<span
                class="text-danger">*</span></label>
        <input name="name" placeholder="ادخل الاسم"  value="{{ old('name', $data->name ?? '') }}" class="form-control  {{ $errors->has('name') ? 'border-danger' : '' }}" type="text"
               maxlength="255" />
    </div>
{{--    <div class="form-group  col-3">--}}
{{--        <label>البريد الالكتروني<span--}}
{{--                class="text-danger">*</span></label>--}}
{{--        <input name="email" placeholder="ادخل البريد الالكتروني"  value="{{ old('email', $data->email ?? '') }}" class="form-control  {{ $errors->has('email') ? 'border-danger' : '' }}" type="email"--}}
{{--               maxlength="255" />--}}
{{--    </div>--}}
    <div class="form-group  col-3">
        <label>رقم الهاتف<span
                class="text-danger">*</span></label>
        <input name="phone" placeholder="ادخل رقم الهاتف"  value="{{ old('phone', $data->phone ?? '') }}" class="form-control  {{ $errors->has('phone') ? 'border-danger' : '' }}" type="tel"
               maxlength="255" />
    </div>
    <div class="form-group  col-3">
        <label>الدولة<span
                class="text-danger">*</span></label>
        <select required name="city_id" class="form-control select2" id="kt_select2_1" style="width: 100%">
            <option selected disabled>اختر الدولة</option>
            @foreach($cities as $row)
                <option value="{{$row->id}}"
                        @if(Request::segment(2)== 'edit') @if($data->city_id == $row->id) selected @endif @endif >{{$row->name_ar}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group  col-6">
        <label>كلمة المرور
                @if(request()->segment(2) == 'create') <span class="text-danger">*</span>@endif
        </label>
        <input name="password" placeholder="ادخل الرقم السري"  value="{{ old('password') }}" class="form-control  {{ $errors->has('password') ? 'border-danger' : '' }}" type="password"
               maxlength="255" />
    </div>
    <div class="form-group  col-6">
        <label>الرقم كلمة المرور
            @if(request()->segment(2) == 'create') <span class="text-danger">*</span> @endif
        </label>
        <input name="password_confirmation" placeholder="ادخل تاكيد الرقم السري"  value="{{ old('password_confirmation') }}" class="form-control  {{ $errors->has('password_confirmation') ? 'border-danger' : '' }}" type="password"
               maxlength="255" />
    </div>
{{--    <div class="form-group col-md-6">--}}
{{--        <label> صورة العميل--}}
{{--        </label>--}}
{{--        <div class="col-lg-8">--}}

{{--            <div class="image-input image-input-outline" id="kt_image_1">--}}
{{--                <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"--}}
{{--                     style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>--}}
{{--                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"--}}
{{--                       data-action="change" data-toggle="tooltip" title=""--}}
{{--                       data-original-title="اختر صوره">--}}
{{--                    <i class="fa fa-pen icon-sm text-muted"></i>--}}
{{--                    <input type="file" value="{{old('image', $data->image ?? '')}}" name="image"--}}
{{--                           accept=".png, .jpg, .jpeg"/>--}}
{{--                </label>--}}
{{--                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"--}}
{{--                      data-action="cancel" data-toggle="tooltip" title="حذف الصورة">--}}

{{--                      <i class="ki ki-bold-close icon-xs text-muted"></i>--}}
{{--                     </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

@push('script')
    <script !src="">
        var avatar1 = new KTImageInput('kt_image_1');
        var avatar2 = new KTImageInput('kt_image_2');
    </script>

    <script>
        // basic
        $('#kt_select2_5').select2({});
    </script>
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
@endpush
