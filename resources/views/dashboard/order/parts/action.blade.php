
<a  href="{{ route('orders.show', $id) }}"> <i class="fa la-eye text-info mr-5"></i></a>

<a  href="printOrder/{{$id}}"><i class="fa la-print text-primary mr-5"></i></a>

{{-- @can('update-orders')
<a href="{{route('orders.edit',$id)}}" class="btn btn-icon btn-light-primary btn-circle mr-2">
    <i class="flaticon-edit"></i>
</a>
@endcan
@can('delete-orders')
<a href="{{route('orders.delete',$id)}}" onclick=" return confirm('هل متاكد من الحذف ؟ ')" class="btn btn-icon btn-light-danger btn-circle mr-2">
    <i class="flaticon2-rubbish-bin-delete-button"></i>
</a>
@endcan --}}
