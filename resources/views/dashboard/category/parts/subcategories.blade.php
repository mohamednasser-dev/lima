@if($parent_id == null || $parent_id == 1 || $parent_id == 2)
    <a href="{{route('categories.show',$id)}}"  class="btn btn-icon btn-light-warning btn-circle mr-2">
        <i class="flaticon-eye"></i>
    </a>
@endif
