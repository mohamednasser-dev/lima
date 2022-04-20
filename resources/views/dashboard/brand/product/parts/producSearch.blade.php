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
