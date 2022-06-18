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
                                        <h2 class="widget-title" style="text-align: center"> {{$title}}</h2>

                                        <form method="post" action="{{url('update-profile')}}" class="login">
                                            @csrf
                                            <p class="form-row form-row">
                                                <label for="name"
                                                       style="color: black"><b>{{trans('lang.name')}}</b> <span
                                                        class="required">*</span></label>
                                                <input type="text" class="input-text" name="name" id="name"
                                                       value="{{$user->name}}"/>
                                            </p>


                                            <p class="form-row form-row">
                                                <label for="phone"
                                                       style="color: black"><b>{{trans('lang.phone')}}</b> <span
                                                        class="required">*</span></label>
                                                <input type="number" class="input-text" name="phone" id="phone"
                                                       value="{{$user->phone}}"/>
                                            </p>


                                            <p class="form-row  address-field update_totals_on_change validate-required"
                                               id="billing_country_field">
                                                <label for="city_id"
                                                       style="color: black"><b>{{trans('lang.country')}}</b> <span
                                                        class="required">*</span></label>
                                                <select name="city_id" id="billing_country" class="country_to_state country_select" required>
                                                    @foreach(\App\Models\City::all() as $city)
                                                        <option
                                                            @if($user->city_id == $city->id) selected
                                                            @endif
                                                            value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>

                                            </p>

                                            <p class="form-row form-row">
                                                <label for="password"
                                                       style="color: black"><b>{{trans('lang.new_password')}}</b></label>
                                                <input class="input-text" type="password" name="password"
                                                       id="password"/>
                                            </p>
                                            <p class="form-row form-row">
                                                <label for="password_confirmation"
                                                       style="color: black"><b>{{trans('lang.password_confirmation')}}</b>
                                                </label>
                                                <input class="input-text" type="password" name="password_confirmation"
                                                       id="password_confirmation"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" class="button btn btn-lg" name="login"
                                                       value="{{trans('lang.update')}}"/>
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
