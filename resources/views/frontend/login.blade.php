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
    <!-- .bg-level-1 -->
    <div id="kids_middle_container">
        <!-- .content -->
        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="container l-page-width" style="text-align-last: center;">
                            <div class="entry-container">
                                <main>
                                    <div class="woocommerce" style="padding:11%; text-align: -webkit-center;" >
                                        <h2 class="widget-title" style="text-align: center">{{$data['title']}}</h2>
                                        <form method="post" action="{{url('user-login')}}" class="login"
                                              style="text-align-last: center;">
                                            @csrf
                                            <p class="form-row form-row">
                                                <label for="phone"
                                                       style="color: black"><b>{{trans('lang.phone')}}</b></label>
                                                <input type="text" class="input-text" name="phone" id="phone"
                                                       value=""/>
                                            </p>
                                            <p class="form-row form-row">
                                                <label for="password"
                                                       style="color: black"><b>{{trans('lang.password')}}</b></label>
                                                <input class="input-text" type="password" name="password"
                                                       id="password"/>
                                            </p>
                                            <p class="form-row" style="text-align: center;">

                                                <input type="submit" class="button btn btn-lg" name="login"
                                                       value="{{trans('lang.login')}}"/>
                                                {{--                                                <a href="#" class="btn btn-dark">Lost your password?</a>--}}
                                            </p>
                                            <p style="text-align-last: center;"> {{trans('lang.dont_have_account')}}<a
                                                    href="{{url('/user-register')}}"> &nbsp; {{trans('lang.register')}}</a></p>

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
