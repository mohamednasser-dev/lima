


@php
$coupon_counts = \App\Models\CouponUser::where('coupon_id',$id)->where('used',1)->get()->count();
@endphp
{{$coupon_counts}}
