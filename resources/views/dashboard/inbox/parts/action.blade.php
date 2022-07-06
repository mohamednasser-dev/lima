{{--@can('update-cities')--}}
{{--    <a href="{{route('current.inbox.edit',$id)}}" title="التفاصيل" class="btn btn-icon btn-light-warning btn-circle mr-2">--}}
{{--        <i class="flaticon-eye"></i>--}}
{{--    </a>--}}
{{--@endcan--}}
@can('delete-inbox')
    <a href="{{route('inbox.delete',$id)}}" title="حذف" onclick=" return confirm('هل متاكد من الحذف ؟ ')"
       class="btn btn-icon btn-light-danger btn-circle mr-2">
        <i class="flaticon2-rubbish-bin-delete-button"></i>
    </a>
@endcan
