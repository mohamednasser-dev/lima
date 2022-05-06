<option selected disabled >اختر القسم الفرعي</option>
@foreach($data as $row)
    <option value="{{$row->id}}">{{$row->name_ar}}</option>
@endforeach
