@can('update-coupons')
    <a href="{{route('coupons.edit',$id)}}" title="تعديل" class="btn btn-icon btn-light-primary btn-circle mr-2">
        <i class="flaticon-edit"></i>
    </a>
@endcan
@can('delete-coupons')
    <a href="{{route('coupons.delete',$id)}}" title="حذف" onclick=" return confirm('هل متاكد من الحذف ؟ ')"
       class="btn btn-icon btn-light-danger btn-circle mr-2">
        <i class="flaticon2-rubbish-bin-delete-button"></i>
    </a>
@endcan
