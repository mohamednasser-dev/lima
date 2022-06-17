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
                                <main>
                                    <h2 class="widget-title" style="text-align: center"> {{$title}}</h2>
                                    <div class='grid-row eq-columns clearfix'
                                         style='margin-top:25px; justify-content: center;'>
                                        @foreach($subscribe_types as $type)
                                            <div class='grid-col pricing_table_column   grid-col-3'
                                                 style="height: 300px; margin-left: 50px;">
                                                <div class="active-ribbon"></div>
                                                <div>
                                                    <div class="pricing_table_header">
                                                        <div class="title">{{$type->name}}</div>
                                                    </div>
                                                    <div
                                                        class="price_part"> {{$type->month_count}} {{trans('lang.month')}} </div>
                                                    <div class="content_part">
                                                        <ul class="listing">
                                                            <li>
                                                                <i class="fa fa-pound-sign"></i> {{$type->cost}} {{trans('lang.LE')}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="button_part">
                                                        <a href="{{route('subscribe_payments',$type->id)}}"
                                                           class="cws_button button_text pricing_table_button">{{trans('lang.subscribe')}}
                                                        </a>
                                                    </div>
                                                </div>
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


@endsection

@section('js')



@endsection
