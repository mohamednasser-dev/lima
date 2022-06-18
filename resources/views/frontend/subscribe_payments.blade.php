@extends('frontend.layout.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div id="kids_middle_container">
        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="bg-level-2 first-part"></div>
                        <div class="container l-page-width">
                            <div class="entry-container" style="margin-bottom: 100px;">

                                <form method="post" action="{{route('make.subscription')}}">
                                    @csrf
                                    <input type="hidden" name="subscribe_type_id" value="{{$subscribe_type_id}}" required>
                                <main>
                                    <h2 class="widget-title" style="text-align: center"> {{$title}}</h2>
                                    <div id="payment" class="woocommerce-checkout-payment">

                                        <ul class="payment_methods methods" style="text-align: center;">
{{--                                            this is for delivery go to your hme--}}
{{--                                            <li class="payment_method_paypal">--}}
{{--                                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" checked--}}
{{--                                                       value="0" />--}}
{{--                                                <label for="payment_method_paypal">--}}
{{--                                                    <img style="width: 7%;" src="{{url('/')}}/express-delivery.png" alt="PayPal Acceptance Mark" />--}}
{{--                                                    <a class="about_paypal" title="{{trans('lang.delivery_reach_you')}}" style="font-weight: 900;">--}}
{{--                                                      {{trans('lang.with_delivery')}}--}}
{{--                                                    </a> </label>--}}
{{--                                            </li>--}}
                                            @foreach($payment_methods->data as $type)
                                            <li class="payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method_id"
                                                       value="{{$type->paymentId}}"  checked/>
                                                <label for="payment_method_paypal">
                                                     <img style="width: 18%;" src="{{$type->logo}}" alt="PayPal Acceptance Mark" />
                                                  </label>
                                            </li>
                                            @endforeach
                                        </ul>

                                        <p class="form-row">
                                            <input type="submit" class="button btn btn-lg" name="login"
                                                   value="{{trans('lang.save')}}"/>
                                        </p>
                                    </div>
                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>
                                </form>
                                <div class="kids_clear"></div>
                            </div>
                            <!-- .entry-container -->
                        </div>
                        <div class="bg-level-2 second-part"></div>
                    </div>
                    <!-- ***************** - END Image floating - *************** -->
                </section>
                <!-- .bottom_content_container -->
            </div>
            <div class="content_bottom_bg"></div>
        </div>
    </div>
@endsection
@section('js')
@endsection
