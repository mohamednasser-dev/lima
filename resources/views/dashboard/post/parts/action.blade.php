@can('update-posts')
<a href="{{route('posts.edit',$id)}}"  title="تعديل" class="btn btn-icon btn-light-primary btn-circle mr-2">
    <i class="flaticon-edit"></i>
</a>
@endcan
@can('delete-posts')
<a href="{{route('posts.delete',$id)}}" title="حذف" onclick=" return confirm('هل متاكد من الحذف ؟ ')" class="btn btn-icon btn-light-danger btn-circle mr-2">
    <i class="flaticon2-rubbish-bin-delete-button"></i>
</a>
@endcan

