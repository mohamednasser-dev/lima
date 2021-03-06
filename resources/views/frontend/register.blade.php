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
                        <div class="container l-page-width" style="text-align-last: center;">
                            <div class="entry-container">
                                <main>
                                    <div class="woocommerce" style="padding:11%;text-align: -webkit-center;">
                                        <h2 class="widget-title" style="text-align: center">{{$data['title']}}</h2>



                                        <form method="post" action="{{url('user-register')}}" class="login">
                                            @csrf
                                            <p class="form-row form-row">
                                                <label for="name"
                                                       style="color: black"><b>{{trans('lang.name')}}</b> <span
                                                        class="required" style="color:red;">*</span></label>
                                                <input type="text" class="input-text" name="name" id="name"
                                                       value="{{old('name')}}"/>
                                            </p>
                                            <p class="form-row form-row">
                                                <label for="phone"
                                                       style="color: black"><b>{{trans('lang.phone')}}</b> <span
                                                        class="required" style="color:red;" >*</span></label>
                                                <input type="text" class="input-text" name="phone" id="phone"
                                                       value="{{old('phone')}}"/>
                                            </p>
                                            <p class="form-row  address-field update_totals_on_change validate-required"
                                               id="billing_country_field">
                                                <label for="city_id"
                                                       style="color: black"><b>{{trans('lang.country')}}</b> <span
                                                        class="required" style="color:red;" >*</span></label>

                                                <select name="city_id" id="billing_country" class="country_to_state country_select" required>
                                                    <option>{{trans('lang.select_country')}}</option>
                                                    @foreach(\App\Models\City::active()->get() as $city)
                                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>

                                            </p>
                                            <p class="form-row form-row">
                                                <label for="password"
                                                       style="color: black"><b>{{trans('lang.password')}}</b> <span
                                                        class="required" style="color:red;" >*</span></label>
                                                <input class="input-text" type="password" minlength="8" maxlength="255" name="password"
                                                       id="password"/>
                                            </p>
                                            <p class="form-row form-row">
                                                <label for="password_confirmation"
                                                       style="color: black"><b>{{trans('lang.password_confirmation')}}</b> <span
                                                        class="required" style="color:red;" >*</span></label>
                                                <input class="input-text" type="password" minlength="8" maxlength="255" name="password_confirmation"
                                                       id="password_confirmation"/>
                                            </p>
                                            <p class="form-row" style="text-align: center;">
                                                <input type="submit" class="button btn btn-lg" name="login"
                                                       value="{{trans('lang.register')}}"/>
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
    <script src='{{url('front')}}/js/select2.js'></script>


@endsection
