@can('update-cities')
    <a href="{{route('cities.edit',$id)}}" title="تعديل" class="btn btn-icon btn-light-primary btn-circle mr-2">
        <i class="flaticon-edit"></i>
    </a>
@endcan
@can('update-cities')
    <a href="{{route('cities.delete',$id)}}" title="حذف" onclick=" return confirm('هل متاكد من الحذف ؟ ')"
       class="btn btn-icon btn-light-danger btn-circle mr-2">
        <i class="flaticon2-rubbish-bin-delete-button"></i>
    </a>
@endcan
