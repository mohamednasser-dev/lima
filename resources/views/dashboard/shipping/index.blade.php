@php($title=__('lang.shipments'))
@extends('adminLayouts.app')
@section('title')
{{$title}}
@endsection
@section('header')

@endsection
@section('breadcrumb')
<div class="d-flex align-items-baseline flex-wrap mr-5">
    <!--begin::Breadcrumb-->
    <h5 class="text-warning font-weight-bold my-1 mr-5">{{$title}}</h5>
    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item">
            <a href="{{route('admin')}}" class="text-muted">الصفحة الرئيسية</a>
        </li>

    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection
@section('content')

<div class="card">
    <form action="{{ route('orders.deletes') }}" method="post" id="delete-form">
        @csrf
        @can('delete-orders')
        <button type="submit" style="display:none; margin-right: 10px;" class="btn btn-danger delete-selected-btn"><i
                class="fa fa-trash"></i> حذف المحدد </button>
        @endcan
        <div class="card-body">
            {!! $dataTable->table() !!}
    </form>
</div>
</div>
@include('dashboard.shipping.parts.show-modal')
@endsection
@section('script')
{!! $dataTable->scripts() !!}
<script src="assets/js/work.js"></script>
<script type="text/javascript">

    // Update shipping status
    $(document).on('click', '.update-status', function(){
        if(!confirm(ARE_YOU_SURE))
            return false;
        
        let id = $(this).data('id');
        let actionUrl = "{{ route('shippings.approve', ':ID') }}".replace(':ID', id);
        
        // Call ajax request
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: {_token: "{{ csrf_token() }}"},
            beforeSend: function(){
            },
            success: function(response){
                if(response.status){
                    Swal.fire({text: response.message, icon: 'success'});
                    $("#ordershippingdatatable-table").DataTable().draw();
                }
                else
                    Swal.fire({text: response.message, icon: 'error'});
            }
        })
    });

    // Show shipping details
    $(document).on('click', '.get-shipping-data', function(){
        let id = $(this).data('id');
        let actionUrl = "{{ route('shippings.show', ':ID') }}".replace(':ID', id);
        
        $.ajax({
            url: actionUrl,
            type: 'get',
            beforeSend: function(){

            },
            success: function(response){
                if(!response.status){
                    Swal.fire({text: response.message, icon: 'error'});
                    return;
                }
                
                for(let item of Object.keys(response.data)){
                    // console.log(item);
                    $('#item-data #'+item).html(response.data[item]);
                }

                $('#shippingDetailsModal').modal('show');
            }
        });
    });

    function update_active(el) {
            if (el.checked) {
                var status = '1';
            } else {
                var status = '0';
            }
            $.post('{{ route('orders.change_status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function (data) {
                if (data == 1) {
                    toastr.success("{{trans('lang.statuschanged')}}");
                } else {
                    toastr.error("{{trans('lang.statuschanged')}}");
                }
            });
        }
</script>
@endsection