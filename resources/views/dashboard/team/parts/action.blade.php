@can('update-teams')
<a href="{{route('teams.edit',$id)}}" title="تعديل" class="btn btn-icon btn-light-primary btn-circle mr-2">
    <i class="flaticon-edit"></i>
</a>
@endcan
@can('delete-teams')
<a href="{{route('teams.delete',$id)}}" title="حذف" onclick=" return confirm('هل متاكد من الحذف ؟ ')" class="btn btn-icon btn-light-danger btn-circle mr-2">
    <i class="flaticon2-rubbish-bin-delete-button"></i>
</a>
@endcan
