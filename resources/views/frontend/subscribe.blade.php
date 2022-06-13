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
    {{$title}}
@endsection
@section('content')


    <div id="kids_middle_container">
        <!-- .content -->

        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="bg-level-2 first-part"></div>
                        <div class="container l-page-width">
                            <div class="entry-container ">
                                <main>
                                    <div class='grid-row eq-columns clearfix' style='margin-top:25px;'>
                                        @foreach($subscribe_types as $type)

                                            <div class='grid-col pricing_table_column   grid-col-3'>
                                                <div class="active-ribbon"></div>
                                                <div>
                                                    <div class="pricing_table_header">
                                                        <div class="title">{{$type->name}}</div>

                                                    </div>
                                                    <div class="price_part"> {{$type->month_count}} {{trans('lang.month')}} </div>
                                                    <div class="content_part">
                                                        <ul class="listing">
                                                            <li><i class="fa fa-dollar"></i>  {{$type->cost}} {{trans('lang.LE')}}</li>

                                                        </ul>

                                                    </div>
                                                    <div class="button_part"><a href="/" class="cws_button button_text pricing_table_button">{{trans('lang.subscribe')}}</div></a></div>
                                            </div>
                                        @endforeach


                                    </div>
                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>
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
