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
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/select2.css" />
    @endpush
    @section('title')
    {{$title}}
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
                                    <div class="woocommerce" style="padding:11%;text-align: -webkit-center;">
                                        <h2 class="widget-title" style="text-align: center">{{$title}}</h2>
                                        <p>code for pay by aman is : </p> <b>{{$aman_code}}</b>
                                        @if($payment_method_id == 4)
                                            <img style="width: 100px; height: 100px;" src="{{asset('storage/app/public/')}}/{{$expire_date}}">
                                        @else
                                         <b>{{$expire_date}}</b>
                                        @endif
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
    <script src='{{url('front')}}/js/select2.js'></script>
@endsection
