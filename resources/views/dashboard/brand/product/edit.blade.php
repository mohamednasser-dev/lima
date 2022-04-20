@php($title='تعديل المنتج')
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')
@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-warning font-weight-bold my-1 mr-5">{{$title}}</h5>
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
    @can('update-brands')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('brand_products.update',$data->id)}}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.brand.product.form')
            </form>
        </div>
    </div>
    @endcan
@endsection
@section('script')
    <script !src="">
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('submit', 'form', function () {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
    <script>
        $(document).on('keyup', '#txt_price', function () {
            $('#txt_discount').attr('max', $("#txt_price").val(product_id));
        });
    </script>
    {{--for make container scripts--}}
    <script>
        $(document).ready(function () {
            var i = {{count($data->Details)}};
            $("#addButton").click(function () {
                var html = '';
                html += ' <div id="rowid'+i+'" class="form-group row">';
                html += '      <div class="form-group  col-3">' ;
                html +=   '        <label>الوصف بالعربية<span class="text-danger">*</span></label>' ;
                html +=    '        <input name="rows[' + i + '][title_ar]" placeholder="مثال: الحديد" value=""   class="form-control" type="text"  maxlength="255" />' ;
                html +=   '    </div>' ;
                html +=    '    <div class="form-group  col-3">' ;
                html +=    '        <label>الوصف بالانجليزية<span class="text-danger">*</span></label>' ;
                html +=   '        <input name="rows[' + i + '][title_en]" placeholder="ex: iron" value=""   class="form-control" type="text"  maxlength="255" />' ;
                html +=   '    </div>' ;
                html +=    '    <div class="form-group  col-2">' ;
                html +=    '        <label>محتوى الوصق بالعربية<span class="text-danger">*</span></label>' ;
                html +=    '        <input name="rows[' + i + '][content_ar]" placeholder="مثال: 12 جرام" value=""  class="form-control" type="text"  maxlength="255" />' ;
                html +=   '    </div>' ;
                html +=   '    <div class="form-group  col-2">' ;
                html +=   '        <label>محتوى الوصف بالانجليزية<span class="text-danger">*</span></label>' ;
                html +=   '        <input name="rows[' + i + '][content_en]" placeholder="ex: 12g" value=""  class="form-control" type="text"  maxlength="255" />' ;
                html +=    '    </div>';
                html +=   '    <div class="form-group  col-2">' ;
                html +=   '        <label> &nbsp; </label>' ;
                html +=   '        <br>' ;
                html +=   '         <a id="delete_button" onclick="delete_row('+i+')"  class="btn btn-icon btn-danger">' ;
                html +=     '                <i class="fa fa-trash"></i>' ;
                html +=     '            </a>' ;
                html +=    '    </div>';
                html += '   </div>';
                $('#parent').append(html);
                i++;
            });
        });
    </script>
    <script type="text/javascript">
        function delete_row(i) {
            $('#rowid'+i).remove();
        }
    </script>
    {{--    for ckeditor in page --}}
    <script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>

    <script>
        var body_ar = function () {
            // Private functions
            var demos = function () {
                ClassicEditor
                    .create( document.querySelector( '#body_ar' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            body_ar.init();
        });
    </script>
    <script>
        var body_en = function () {
            // Private functions
            var demos = function () {
                ClassicEditor
                    .create( document.querySelector( '#body_en' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();
        // Initialization
        jQuery(document).ready(function() {
            body_en.init();
        });
    </script>
@endsection
