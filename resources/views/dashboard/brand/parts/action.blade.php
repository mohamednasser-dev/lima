@can('read-brands')
    <a href="{{route('brands.show',$id)}}" title="مشاهده"
       class="btn btn-icon btn-light-warning btn-circle mr-2">
        <i class="fas fa-eye"></i>
    </a>
@endcan
@can('update-brands')
<a href="{{route('brands.edit',$id)}}" class="btn btn-icon btn-light-primary btn-circle mr-2">
    <i class="flaticon-edit"></i>
</a>
@endcan
@can('delete-brands')
<a href="{{route('brands.delete',$id)}}" onclick=" return confirm('هل متاكد من الحذف ؟ ')" class="btn btn-icon btn-light-danger btn-circle mr-2">
    <i class="flaticon2-rubbish-bin-delete-button"></i>
</a>
@endcan
