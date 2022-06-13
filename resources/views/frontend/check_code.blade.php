@extends('frontend.layout.master')
@push('css')
    <style>
        #headerPopup {
            width: 75%;
            margin: 0 auto;
        }

        #headerPopup iframe {
            width: 100%;
            margin: 0 auto;
        }
    </style>
    @endpush
    @section('title')
    {{$data['title']}}
    @endsection
    @section('content')


    </div>
    <!-- .bg-level-1 -->
    <div id="kids_middle_container">
        <!-- .content -->

        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="bg-level-2 first-part"></div>
                        <div class="container l-page-width" style="">
                            <div class="entry-container">
                                <main>
                                    <div class="woocommerce" style="padding:11%;">
                                        <h2 class="widget-title" style="text-align: center">{{$data['title']}}</h2>


                                        <form method="post" action="{{url('check_otp')}}" class="login">
                                            @csrf
                                            <p class="form-row form-row">
                                                <label for="otp"
                                                       style="color: black"><b>{{trans('lang.otp')}}</b> <span
                                                        class="required">*</span></label>
                                                <input type="number" class="input-text" name="otp" id="otp"
                                                       value="{{old('otp')}}"/>
                                            </p>
                                            <p class="form-row form-row">

                                                <input type="hidden" class="input-text" name="name" id="name"
                                                       value="{{$data['name']}}"/>
                                            </p>
                                            <p class="form-row form-row">

                                                <input type="hidden" class="input-text" name="phone" id="phone"
                                                       value="{{$data['phone']}}"/>
                                            </p>
                                            <p class="form-row  address-field update_totals_on_change validate-required"
                                               id="billing_country_field">

                                                <input type="hidden" name="city_id" id="city_id" class="form-control"
                                                       value="{{$data['city_id']}}" required/>


                                            </p>
                                            <p class="form-row form-row">

                                                <input class="input-text" type="hidden" name="password"
                                                       id="password" value="{{$data['password']}}"/>
                                            </p>

                                            <p class="form-row">

                                                <input type="submit" class="button btn btn-lg" name="login"
                                                       value="{{trans('lang.check')}}"/>
                                                {{--                                                <a href="#" class="btn btn-dark">Lost your password?</a>--}}
                                            </p>

                                        </form>

                                    </div>
                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>

                                <div class="kids_clear"></div>
                            </div>
                            <!-- .entry-container -->
                        </div>
                        {{--                        <div style="padding-top: 250px "></div>--}}
                        <div class="bg-level-2 second-part"></div>
                    </div>
                    <!-- ***************** - END Image floating - *************** -->
                </section>
                <!-- .bottom_content_container -->
            </div>
            <div class="content_bottom_bg"></div>
        </div>

    </div>
    <!-- .end_content -->

    @endsection

@section('js')



@endsection
