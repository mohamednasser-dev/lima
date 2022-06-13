@extends('frontend.layout.master')
@push('css')

@endpush
@section('title')
    {{$data['title']}}
@endsection
@section('content')



    <!-- HEADER END -->
    <div class="bg-level-2-page-width-container ">
        <div class="bg-level-2 first-part" id="bg-level-2"></div>
        <div class="l-page-width">
            <div class="kids_slider_bg img_slider">
                <div class="kids_slider_wrapper">
                    <div class="kids_slider_inner_wrapper">
                        <div class="img-slider">
                            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                                <!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
                                    <ul>
                                    @foreach($data['sliders'] as $slider)
                                        <!-- SLIDE  -->
                                            <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                                data-saveperformance="off">
                                                <!-- MAIN IMAGE -->
                                                <img src="{{$slider->image}}" alt="{{$slider->title}}"
                                                     data-bgposition="center top" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat">
                                                <!-- LAYERS -->
                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption kids-slider-header customin fadeout tp-resizeme"
                                                     @if(session('lang') == "en")  data-x="7" @endif data-y="300"
                                                     {{--                                                 style="left: unset!important;"--}}
                                                     data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                     data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                     data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                     data-endelementdelay="0.1" data-endspeed="300">{{$slider->title}}


                                                </div>
                                                <!-- LAYER NR. 2 -->
                                                <div
                                                    class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme"
                                                    @if(session('lang') == "en")  data-x="7" @endif  data-y="357"
                                                    data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                    data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                    data-endelementdelay="0.1" data-endspeed="300">{!! $slider->body !!}
                                                </div>
                                            </li>
                                            <!-- SLIDE  -->
                                        @endforeach

                                    </ul>
                                    <div class="tp-bannertimer tp-bottom"></div>
                                </div>
                            </div>
                            <!-- END REVOLUTION SLIDER -->
                        </div>
                        <!--/ #kids-slider-->
                    </div>
                    <!--/ .kids_slider_inner_wrapper-->
                </div>
                <!--/ .kids_slider_wrapper-->
            </div>
            <!--/ .kids_slider_bg-->
        </div>
        <!-- .l-page-width -->
        <div class="bg-level-2 second-part" id="bg-level-2"></div>
    </div>
    </div>
    </div>
    <!-- .bg-level-1 -->
    <div id="kids_middle_container" class="kids_middle_container">
        <!-- .content -->
        <br>
        <br>
        <br>
        <br>
        <div class="bg-level-2-full-width-container ">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="container l-page-width">
                            <div class="entry-container ">
                                <main>
                                    <div class='grid-row clearfix'>
                                        <div class='grid-col grid-col-12'>
                                            <div class="page-content">
                                                <div class="bg-level-2 first-part"></div>
                                                <div class="container l-page-width">
                                                    <div class="entry-container ">
                                                        {{--                                                        for eac main category    --}}
                                                        @foreach($data['main_categories'] as $key=> $mainCategory)
                                                            <main>
                                                                <div class='widget-title'>{{$mainCategory->name}}</div>
                                                                <div class="portfolio iso-column iso-four-column">
                                                                    <div class="grid isotope" data-ppp="8"
                                                                         data-cols="954">
                                                                        @foreach($mainCategory->childrenCategories as $subCategory)
                                                                            <div data-categories="happyfeet"
                                                                                 class="iso-item happyfeet">
                                                                                <div class="content-wrapper">
                                                                                    <a
                                                                                       href="{{url('category-details/'.$subCategory->id)}}">
                                                                                    <figure>
                                                                                        <img class="img_post"
                                                                                            src='{{$subCategory->image}}'
                                                                                            width='278px' height='182px'
                                                                                            alt='{{$subCategory->name}}'/>
                                                                                    </figure>
                                                                                    </a>
                                                                                </div>
                                                                                <!--/ content-wrapper-->
                                                                                <div class="gallery-text">
                                                                                    <div class="title"><a class="link"
                                                                                                          href="{{url('category-details/'.$subCategory->id)}}">{{$subCategory->name}}
                                                                                        </a></div>
                                                                                    {{--                                                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum--}}
                                                                                    {{--                                                                                dolor sit amet, consectetuer ...</p>--}}
                                                                                </div>
{{--                                                                                <div class="post-footer">--}}
{{--                                                                                    <a href="{{url('category-details/'.$subCategory->id)}}"--}}
{{--                                                                                       class="cws_button" >{{trans('lang.ReadMore')}}</a>--}}
{{--                                                                                </div>--}}
                                                                                <!--/ post-footer-->
                                                                                <div class="kids_clear"></div>
                                                                            </div>
                                                                        @endforeach


                                                                    </div>
                                                                    <!-- grid isotope -->

                                                                    <!-- .gl_col_ -->
                                                                    <!-- comments block -->
                                                                    <!-- //end comments block -->
                                                            </main>
                                                        @endforeach

                                                    </div>
                                                    <!-- .entry-container -->
                                                </div>
{{--                                                <div class="bg-level-2 second-part"></div>--}}
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class='grid-row clearfix'>--}}
{{--                                        <div class='grid-col grid-col-12'>--}}
{{--                                            <section class='cws-widget'>--}}
{{--                                                <div class='widget-title'>{{trans('lang.aboutUs')}}</div>--}}
{{--                                                <section class='cws_widget_content'>--}}
{{--                                                    <p style="color: black;"><img class="alignleft border size-thumbnail"--}}
{{--                                                            src="{{ \App\Models\Page::where('type','about')->first()->image}}"--}}
{{--                                                            alt="content_img_1" width="150" height="150"/>--}}
{{--                                                        {!! \App\Models\Page::where('type','about')->first()->title !!}--}}
{{--                                                    </p>--}}
{{--                                                </section>--}}
{{--                                            </section>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class='grid-row clearfix margin-top-none margin-bottom-none'>
                                        <div class='grid-col grid-col-12'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <hr/>
                                                    <p>&nbsp;</p>
                                                </section>
                                            </section>
                                        </div>
                                    </div>

                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>
                                <div class="kids_clear"></div>

                            </div>
                            <!-- .entry-container -->
                        </div>
                    </div>
                    <!-- ***************** - END Image floating - *************** -->
                </section>
                <!-- .bottom_content_container -->
            </div>

            <div class="content_bottom_bg"></div>
        </div>
        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class='grid-row clearfix'>
                        <div class='grid-col grid-col-12'>
                            <section class='cws-widget'>
                                <h3 class='widget-title'>{{trans('lang.screenShot')}}</h3>

                            </section>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="bg-level-2 first-part"></div>
                        <div class="container l-page-width">
                            <div class="entry-container ">
                                <main>
                                    <div class='grid-row clearfix'>
                                        <div class='grid-col grid-col-12'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>

                                                    <!-- see gallery_shortcode() -->
                                                    <div id='ngallery-1' class='ngallery clearfix column-4'>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/Tangled_3rd5.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-12.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/Tangled_2nd5.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-11.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/LegoMovie_4th5.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-10.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/LegoMovie_3rd4.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-9.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/HappyFeet_5th5.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-8.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/HappyFeet_2nd4.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-5.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/HappyFeet_1st4.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-4.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                        <dl class='gallery-item'>
                                                            <dt class='gallery-icon '>
                                                                <div class='content-wrapper'>
                                                                    <figure>
                                                                        <a href="{{url('front')}}/pic/HappyFeet_4th5.jpg" data-rel="prettyPhoto[25727]" class="prettyPhoto kids_picture">
                                                                            <img src="{{url('front')}}/pic/300x300-img-7.jpg" alt="" /></a>
                                                                    </figure>
                                                                </div>
                                                            </dt>
                                                        </dl>
                                                    </div>
                                                </section>
                                            </section>
                                        </div>
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





    <!-- .end_content -->


@endsection

@push('js')
@endpush
