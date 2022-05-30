@can('update-subscriptions')
    @if($type =='cash')
        @if($status == 'pending')
            <a href="{{route('subscriptions.change_status',['status'=> 'accepted', 'id'=> $id])}}"
               title="موافقة"
               class="btn btn-icon btn-light-success btn-circle mr-2">
                <i class="flaticon2-check-mark"></i>
            </a>
            <a href="{{route('subscriptions.change_status',['status'=> 'rejected', 'id'=> $id])}}"
               title="رفض" class="btn btn-icon btn-light-danger btn-circle mr-2 ">
                <i class="flaticon2-cancel-music"></i>
            </a>
        @elseif($status == 'accepted')
            <a href="{{route('subscriptions.change_status',['status'=> 'rejected', 'id'=> $id])}}"
               title="رفض" class="btn btn-icon btn-light-danger btn-circle mr-2 ">
                <i class="flaticon2-cancel-music"></i>
            </a>
        @elseif($status == 'rejected')
            <a href="{{route('subscriptions.change_status',['status'=> 'accepted', 'id'=> $id])}}"
               title="موافقة"
               class="btn btn-icon btn-light-success btn-circle mr-2">
                <i class="flaticon2-check-mark"></i>
            </a>
        @endif
    @endif
@endcan
