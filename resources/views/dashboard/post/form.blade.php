<div class="card-body ">
    <div class="row">
        <div class="form-group  col-6">
            <label>الاسم بالعربيه<span class="text-danger">*</span></label>
            <textarea type="text" class="summernote" name="name_ar"  id="name_ar">{!! old('name_ar', $data->name_ar ?? '') !!}</textarea>
        </div>
        <div class="form-group  col-6">
            <label>الاسم بالانجليزيه<span class="text-danger">*</span></label>
            <textarea type="text" class="summernote" name="name_en" id="name_en">{!! old('name_en', $data->name_en ?? '') !!}</textarea>

            {{--            <textarea name="name_en" id="kt-ckeditor-2">{{ old('name_en', $data->name_en ?? '') }}</textarea>--}}
        </div>
    </div>
    @if($type == 'article')
        <div class="row">
            <div class="form-group  col-6">
                <label>تفاصيل المحتوى بالعربيه<span class="text-danger">*</span></label>
                <textarea class="summernote" name="body_ar" id="body_ar">{!! old('body_ar', $data->body_ar ?? '') !!}</textarea>
            </div>
            <div class="form-group  col-6">
                <label>تفاصيل المحتوى بالانجليزيه<span class="text-danger">*</span></label>
                <textarea class="summernote" name="body_en" id="body_en">{!! old('body_en', $data->body_en ?? '') !!}</textarea>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="form-group  col-4">
            <label>القسم الرئيسي<span class="text-danger">*</span></label>
            <select required name="category_id" class="form-control select2" id="kt_select2_1" style="width: 100%">
                <option selected disabled>اختر القسم الرئيسي</option>
                @foreach($category as $row)
                    <option value="{{$row->id}}"
                            @if(Request::segment(2)== 'edit') @if($first_cat_id != null && $first_cat_id == $row->id) selected @endif @endif >{{$row->name_ar}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group  col-4" @if(Request::segment(2) != 'edit') style="display: none;"
             @endif id="sub_category_container">
            <label>القسم الفرعي الاول<span class="text-danger">*</span></label>
            <select required name="sub_category_id" class="form-control select2" id="kt_select2_2" style="width: 100%">
                @if(Request::segment(2)== 'edit')
                    @foreach($sub_category as $row)
                        <option value="{{$row->id}}"
                                @if($second_cat_id == $row->id) selected @endif >{{$row->name_ar}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group  col-4"
             @if(Request::segment(2) == 'edit' ) @if($third_cat_id == null) style="display: none;"
             @endif  @else style="display: none;" @endif  id="sub_sub_category_container">
            <label>القسم الفرعي الثاني</label>
            <select name="sub_sub_category_id" class="form-control select2" id="kt_select2_3" style="width: 100%">
                @if(Request::segment(2)== 'edit')
                    @if($third_cat_id != null)
                        @foreach($sub_sub_category as $row)
                            <option value="{{$row->id}}"
                                    @if($third_cat_id == $row->id) selected @endif >{{$row->name_ar}}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label> الصورة الاساسية <span class="text-danger">*</span></label>
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
        @if($type == 'video')
            <div class="form-group col-md-6">
                @if(Request::segment(2)== 'edit')
                    <video width="400" height="400" controls>
                        <source src="{{$data->video}}" type="video/mp4">
                        <source src="{{$data->video}}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                @endif
            </div>
        @endif
    </div>
    @if($type == 'video')
        <div class="row">
            <div class="form-group col-md-6">
                <label>الفيديو<span class="text-danger">*</span></label>
                <div class="col-lg-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input {{ $errors->has('video') ? 'border-danger' : '' }}"
                               id="customFile" name="video"
                               accept=".mp4, .mov, .wmv, .flv, .avi, .mkv, .webm"/>
                        <label class="custom-file-label" for="customFile">اختر الفيديو</label>
                    </div>


                    {{--            <input type="file" name="video" value="{{old('video', $data->video ?? '')}}" accept=".mp4, .mov, .wmv, .flv, .avi, .mkv, .webm">--}}

                </div>
            </div>
        </div>
    @endif

</div>
<div class="card-footer text-left">
    @if($type == 'article')
        <button type="submit" class="btn btn-success btn-default ">حفظ
        </button>
    @else
        <button id="saveButton" class="btn btn-success btn-default " data-backdrop="static" data-keyboard="false">حفظ
        </button>
    @endif
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

@push('script')
    <script>
        $("#saveButton").click(function () {

            $('#progressDialog').modal('show');
            // $("#progressDialog").modal({backdrop: "static ", keyboard: false});
            var updateForm = document.querySelector('#form');
            var request = new XMLHttpRequest();

            request.upload.addEventListener('progress', function (e) {
                var percent = Math.round((e.loaded / e.total) * 100);

                $('.progress-bar').css('width', percent + '%');
                $('.sr-only').html(percent + '%');


            }, false);

            request.addEventListener('load', function (e) {
                var jsonResponse = JSON.parse(e.target.responseText);
                if (jsonResponse.errors) {
                    console.log(jsonResponse.errors);
                } else {
                    $('#progressDialog').modal('hide');
                    window.location.href = '{{url()->previous()}}';
                }
            }, false);

            updateForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(updateForm);
                request.open('post', updateForm['action']);
                request.send(formData);
            }, false);
        });
    </script>
    <script src="{{url('/')}}/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
    <script src="{{url('/')}}/assets/js/pages/crud/forms/editors/ckeditor-classic.js"></script>
    <script>
        $(document).ready(function () {

            var KTCkeditor = function () {
                // Private functions
                var demos = function () {
                    ClassicEditor
                        .create(document.querySelector('#kt-ckeditor-1'))
                        .then(editor = &gt; {
                        console.log(editor);
                    }
                )
                .
                    catch(error = &gt; {
                        console.error(error);
                    }
                )
                    ;
                }

                return {
                    // public functions
                    init: function () {
                        demos();
                    }
                };
            }();

            // Initialization
            jQuery(document).ready(function () {
                KTCkeditor.init();
            });
            $(document).on('submit', 'form', function (e) {
                e.preventDefault();
                var res = $('#name_ar').text();
                $('#txt_name_ar').val(res);
                alert(res);
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#kt_select2_1').change(function () {
                var category = $(this).val();
                var type = document.getElementById("txt_type").value;
                $.ajax({
                    url: "/posts/get_subcategory/" + category + "/" + type,
                    dataType: 'html',
                    type: 'get',
                    success: function (data) {
                        $('#sub_category_container').show();
                        $('#sub_sub_category_container').hide();
                        $('#kt_select2_2').html(data);
                    }
                });
            });
            $('#kt_select2_2').change(function () {
                var category = $(this).val();
                var type = document.getElementById("txt_type").value;
                $.ajax({
                    url: "/posts/get_subcategory/" + category + "/" + type,
                    dataType: 'html',
                    type: 'get',
                    success: function (data) {
                        if (data) {
                            $('#sub_sub_category_container').show();
                            $('#kt_select2_3').html(data);
                        } else {
                            $('#sub_sub_category_container').hide();
                        }

                    }
                });
            });
        });
    </script>
    <script !src="">
        var avatar1 = new KTImageInput('kt_image_1');
        var avatar2 = new KTImageInput('kt_image_2');
    </script>
    <script>
        // basic
        $('#kt_select2_5').select2({});
        // Class definition

        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('.summernote').summernote({
                    height: 150
                });
            }
            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();
        // Initialization
        jQuery(document).ready(function () {
            KTSummernoteDemo.init();
        });
    </script>
    <script src="{{ asset('assets/js/pages/crud/forms/editors/summernote.js')}}"></script>
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-document.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/pages/crud/forms/editors/ckeditor-document.js')}}"></script>


@endpush
