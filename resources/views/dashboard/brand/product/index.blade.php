@php($title='المنتجات')
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
        <div class="card-body">
            <form action="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="la la-search icon-lg"></i></span>
                    </div>
                    <input type="text" id="Search" class="form-control" name="Search" placeholder="البحث">
                </div>
            </form>
        </div>
    </div>


    <div class="card">
        <div class="text-right">
            <div class="card-header">
                @can('create-brands')

                    <a href="{{route('brand_products.create',$id)}}"
                       class="btn btn-sm btn-light-success font-weight-bolder mr-2">
                        <i class="fa fa-plus"></i>اضـافـه</a>
                @endcan
            </div>
        </div>
        <div class="card-body row">
            <div class="flex-row-fluid ml-lg-12">
                <div class="mb-11">
                    <!--begin::Products-->
                    <div class="row" id="productSearch" style="justify-content: center;">
                        <!--begin::Product-->
                        @if(count($data)>0)
                            @foreach($data as $row)
                                <div class="col-md-3 col-xxl-3 col-lg-12">
                                    <!--begin::Card-->
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <!--begin::Image-->
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    <img src="{{$row->image}}" style="height: 140px;" alt=""
                                                         class="mw-100 w-200px"/>
                                                </div>
                                                <div class="overlay-layer">
                                                    @can('update-brand_products')
                                                        <a href="{{route('brand_products.edit',$row->id)}}"
                                                           title="تعديل"
                                                           class="btn btn-icon btn-light-primary btn-circle mr-2">
                                                            <i class="flaticon-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('delete-brand_products')
                                                        <a href="{{route('brand_products.edit',$row->id)}}" title="حذف"
                                                           onclick=" return confirm('هل متاكد من الحذف ؟ ')"
                                                           class="btn btn-icon btn-light-danger btn-circle mr-2">
                                                            <i class="flaticon2-rubbish-bin-delete-button"></i>
                                                        </a>
                                                    @endcan
                                                    @can('read-brand_products')
                                                        <a href="{{route('brand_products.details',$row->id)}}"
                                                           title="تعديل"
                                                           class="btn btn-icon btn-light-warning btn-circle mr-2">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endcan
                                                </div>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Details-->
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <a href="javascript:void($this);"
                                                   class="font-size-h5 font-weight-bolder text-success mb-1">

                                                    {{ \Illuminate\Support\Str::limit($row->title, 33, $end='...') }}
                                                </a>
                                                <span class="font-size-lg">
                                                {{ \Illuminate\Support\Str::limit($row->count, 37, $end='...') }}
                                            </span>
                                                <span class="font-size-lg">
                                               الكمية : {{ $row->quantity }} &nbsp; &nbsp; السعر :  {{ $row->price }} @if($row->discount > 0)
                                                        &nbsp; &nbsp; الخصم : {{$row->discount}} @endif
                                            </span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            @endforeach
                            <div class="col-md-12 col-xxl-12 col-lg-12">
                                <div class="d-flex flex-wrap py-2 mr-3" style="justify-content: center;">
                                    {{$data->links()}}
                                </div>
                            </div>
                        @else
                            <div class="text-center p-4" style="text-align: center;">
                                <img class="mb-3" src="{{asset('/uploads/sorry.svg')}}" alt="Image Description"
                                     style="width: 7rem;">
                                <p class="mb-0">لا يوجد منتجات لعرضها</p>
                            </div>
                    @endif
                    {{--                    {{$data->links()}}--}}
                    <!--end::Product-->
                    </div>

                    <div class="row">

                    </div>
                    <!--end::Products-->
                </div>

            </div>

        </div>

        {{--        <form action="{{ route('brands.deletes') }}" method="post" id="delete-form">--}}
        {{--            @csrf--}}
        {{--            @can('delete-brands')--}}
        {{--                <button type="submit" style="display:none; margin-right: 10px;" class="btn btn-danger delete-selected-btn"><i class="fa fa-trash"></i> حذف المحدد  </button>--}}
        {{--            @endcan--}}
        {{--            <div class="card-body">--}}
        {{--            {!! $dataTable->table() !!}--}}
        {{--        </form>--}}
    </div>

@endsection
@section('script')
    <script src="assets/js/work.js"></script>
    <script>
        $(document).ready(function () {
            $('#Search').on('keyup', function () {
                var text = $('#Search').val();
                $.ajax({

                    type: "POST",
                    url: '{{url('/')}}/brand_products/search',
                    data: {
                        'text': text,
                        'id':{{$id}},
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (data) {
                        $('#productSearch').html(data);
                    }
                });
            });
        });
    </script>
@endsection

