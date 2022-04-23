@extends('frontend.layout.master')
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
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url('front')}}/pic/slide-17.jpg" alt="slide-17"
                                                 data-bgposition="center top" data-bgfit="cover"
                                                 data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption kids-slider-header customin fadeout tp-resizeme"
                                                 data-x="7" data-y="300"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                 data-endelementdelay="0.1" data-endspeed="300">Responsive Design
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme"
                                                 data-x="7" data-y="357"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                 data-endelementdelay="0.1" data-endspeed="300">All pages look
                                                identically great regardless of the device’s resolution and display
                                                size.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url('front')}}/pic/slide-5.jpg" alt="slide-5"
                                                 data-bgposition="center top" data-bgfit="cover"
                                                 data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption kids-slider-header customin fadeout tp-resizeme"
                                                 data-x="7" data-y="300"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                                 data-endelementdelay="0.1" data-endspeed="300">Easy Color Management
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme"
                                                 data-x="7" data-y="357"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="4"
                                                 data-endelementdelay="0.1" data-endspeed="300">With the help of our
                                                customization panel
                                                you can easily select any color and preview the results.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url('front')}}/pic/slide-47.jpg" alt="slide-47"
                                                 data-bgposition="center top" data-bgfit="cover"
                                                 data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption kids-slider-header customin tp-resizeme" data-x="7"
                                                 data-y="300"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                                 data-endelementdelay="0.1" data-endspeed="300">Shop pages included
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption kids-slider-header-alt customin tp-resizeme"
                                                 data-x="7" data-y="357"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                 data-endelementdelay="0.1" data-endspeed="300">HappyKids includes all
                                                the needed page templates, widgets, cart and other shop-related content
                                                to represent your online store.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url('front')}}/pic/slide-27.jpg" alt="slide-27"
                                                 data-bgposition="center top" data-bgfit="cover"
                                                 data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption kids-slider-header customin fadeout tp-resizeme"
                                                 data-x="7" data-y="300"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                                 data-endelementdelay="0.1" data-endspeed="300">Slider Revolution Inside
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme"
                                                 data-x="7" data-y="357"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="4"
                                                 data-endelementdelay="0.1" data-endspeed="300">A very powerful image
                                                slier is bundled into this template. Create your slides and enjoy the
                                                result.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url('front')}}/pic/slide-37.jpg" alt="slide-37"
                                                 data-bgposition="center top" data-bgfit="cover"
                                                 data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption kids-slider-header customin fadeout tp-resizeme"
                                                 data-x="7" data-y="300"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="200" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                                 data-endelementdelay="0.1" data-endspeed="300">Lifetime Support
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme"
                                                 data-x="7" data-y="357"
                                                 data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                 data-speed="600" data-start="500" data-easing="Power3.easeInOut"
                                                 data-splitin="none" data-splitout="none" data-elementdelay="2"
                                                 data-endelementdelay="0.1" data-endspeed="300">We support our products
                                                as long as they are being sold. Be sure to get a fast, proffessional and
                                                reliable support from our staff.
                                            </div>
                                        </li>
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
    <div id="kids_middle_container">
        <!-- .content -->
        <br>
        <br>
        <br>
        <br>
        <div class="bg-level-2-full-width-container kids_bottom_content">
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
                                                        <main>
                                                            <div class="portfolio iso-column iso-four-column">
                                                                <div class="filter-wrapper">

                                                                    <select class="filter">
                                                                        <option value="*" selected>كل الاقسام الرئيسية
                                                                        </option>
                                                                        <option value=".lego">الاطفال</option>
                                                                        <option value=".happyfeet">الامهات</option>
                                                                    </select>
                                                                </div>
                                                                <div class="grid isotope" data-ppp="8" data-cols="954">
                                                                    @for($i=0;$i<6;$i++)
                                                                    <div data-categories="happyfeet "
                                                                         class="iso-item happyfeet">
                                                                        <div class="content-wrapper">
                                                                            <figure>
                                                                                    <img
                                                                                        src='{{url('front')}}/pic/250x250-kos-9.jpg'
                                                                                        width='278' height='182'
                                                                                        alt=''/>
                                                                            </figure>
                                                                        </div>
                                                                        <!--/ content-wrapper-->
                                                                        <div class="gallery-text">
                                                                            <div class="title"><a class="link"
                                                                                                  href="portfolio-single-item.html">Project
                                                                                    {{$i+1}}</a></div>
                                                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum
                                                                                dolor sit amet, consectetuer ...</p>
                                                                        </div>
                                                                        <div class="post-footer">
                                                                            <a href="#" class="cws_button">Read More</a>
                                                                        </div>
                                                                        <!--/ post-footer-->
                                                                        <div class="kids_clear"></div>
                                                                    </div>
                                                                    @endfor
                                                                        @for($i=0;$i<6;$i++)
                                                                            <div data-categories="lego "
                                                                                 class="iso-item lego">
                                                                                <div class="content-wrapper">
                                                                                    <figure>
                                                                                        <img
                                                                                            src='{{url('front')}}/pic/250x250-kos-9.jpg'
                                                                                            width='278' height='182'
                                                                                            alt=''/>
                                                                                    </figure>
                                                                                </div>
                                                                                <!--/ content-wrapper-->
                                                                                <div class="gallery-text">
                                                                                    <div class="title"><a class="link"
                                                                                                          href="portfolio-single-item.html">Project
                                                                                            {{$i+1}}</a></div>
                                                                                    <p>Lorem ipsum dolor sit amet. Lorem ipsum
                                                                                        dolor sit amet, consectetuer ...</p>
                                                                                </div>
                                                                                <div class="post-footer">
                                                                                    <a href="#" class="cws_button">Read More</a>
                                                                                </div>
                                                                                <!--/ post-footer-->
                                                                                <div class="kids_clear"></div>
                                                                            </div>
                                                                        @endfor

                                                                </div>
                                                                <!-- grid isotope -->

                                                            <!-- .gl_col_ -->
                                                            <!-- comments block -->
                                                            <!-- //end comments block -->
                                                        </main>
                                                    </div>
                                                    <!-- .entry-container -->
                                                </div>
                                                <div class="bg-level-2 second-part"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='grid-row clearfix'>
                                        <div class='grid-col grid-col-12'>
                                            <section class='cws-widget'>
                                                <div class='widget-title'>About Happy Kids</div>
                                                <section class='cws_widget_content'>
                                                    <p><img class="alignleft border size-thumbnail"
                                                            src="{{url('front')}}/pic/150x150-img-1.png"
                                                            alt="content_img_1" width="150" height="150"/>In ac
                                                        sollicitudin sem. Proin congue blandit eros, eu volutpat leo
                                                        maximus vitae. Nulla a velit ut augue pretium fringilla. In hac
                                                        habitasse platea dictumst. Sed vitae sodales purus. Cras
                                                        ultrices condimentum lectus, nec laoreet sapien tempus vel. Duis
                                                        pretium ante purus, et faucibus turpis pellentesque eget.
                                                        Curabitur ac blandit dolor. Maecenas facilisis eleifend massa ac
                                                        commodo. Integer justo felis, finibus at faucibus eget, pulvinar
                                                        a odio. Suspendisse potenti. Curabitur auctor tristique arcu et
                                                        dapibus. Praesent risus metus, ultricies ac ante interdum,
                                                        fringilla finibus est. Pellentesque habitant morbi tristique
                                                        senectus et netus et malesuada fames ac turpis egestas. Sed nec
                                                        varius enim. Aenean vitae ipsum pretium, elementum sapien at,
                                                        tristique lacus. Nec laoreet sapien tempus vel. Duis pretium
                                                        ante purus, et faucibus turpis pellentesque eget. Curabitur ac
                                                        blandit dolor. Maecenas facilisis eleifend massa ac
                                                        commodo.Donec at ullamcorper lectus, quis fringilla velit.
                                                        Aliquam ipsum dui, porttitor id hendrerit nec, mollis ut odio.
                                                    </p>
                                                </section>
                                            </section>
                                        </div>
                                    </div>
                                    <div class='grid-row clearfix margin-top-none'>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <ul>
                                                        <li><span style="text-decoration: underline;">Donec placerat lectus eu elit lobortis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Mauris vestibulum dui metus, quis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Fringilla libero gonec eget fusce</span>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </section>
                                        </div>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <ul>
                                                        <li><span style="text-decoration: underline;">Donec placerat lectus eu elit lobortis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Mauris vestibulum dui metus, quis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Fringilla libero gonec eget fusce</span>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </section>
                                        </div>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <ul>
                                                        <li><span style="text-decoration: underline;">Donec placerat lectus eu elit lobortis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Mauris vestibulum dui metus, quis</span>
                                                        </li>
                                                        <li><span style="text-decoration: underline;">Fringilla libero gonec eget fusce</span>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </section>
                                        </div>
                                    </div>
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
                                    <div class='grid-row clearfix'>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <div class='shortcode_carousel' data-carousel-column="1">
                                                        <div class='carousel_header clearfix'>
                                                            <div class='widget-title'>Testimonials</div>
                                                        </div>
                                                        <div class='carousel_content'>
                                                            <ul>
                                                                <li>
                                                                    <div class="testimonial clearfix">
                                                                        <div>
                                                                            <img
                                                                                src='{{url('front')}}/pic/100x100-img-1.jpg'
                                                                                alt/>
                                                                            <p>
                                                                                Mauris volutpat mi sed odio finibus
                                                                                commodo. Integer egestas eu elit vitae
                                                                                mattis.Curabitur auctorhe ndrerit
                                                                                nec. </p>
                                                                        </div>
                                                                        <div class="author">
                                                                            Jane Doe
                                                                        </div>
                                                                    </div>
                                                                    <div class="testimonial clearfix">
                                                                        <div>
                                                                            <img
                                                                                src='{{url('front')}}/pic/100x100-img-2.jpg'
                                                                                alt/>
                                                                            <p>
                                                                                Maecenas facilisis eleifend massa ac
                                                                                commodo.Donec at ullamcorper lectus,
                                                                                quis fringilla velit. </p>
                                                                        </div>
                                                                        <div class="author">
                                                                            Jane Doe
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="testimonial clearfix">
                                                                        <div>
                                                                            <img
                                                                                src='{{url('front')}}/pic/100x100-img-2.jpg'
                                                                                alt/>
                                                                            <p>
                                                                                Maecenas facilisis eleifend massa ac
                                                                                commodo.Donec at ullamcorper lectus,
                                                                                quis fringilla velit.Aliquam ipsum
                                                                                dui. </p>
                                                                        </div>
                                                                        <div class="author">
                                                                            Jane Doe
                                                                        </div>
                                                                    </div>
                                                                    <div class="testimonial clearfix">
                                                                        <div>
                                                                            <img
                                                                                src='{{url('front')}}/pic/100x100-img-1.jpg'
                                                                                alt/>
                                                                            <p>
                                                                                Mauris volutpat mi sed odio finibus
                                                                                commodo. Integer egestas eu elit vitae
                                                                                mattis.Curabitur auctor. </p>
                                                                        </div>
                                                                        <div class="author">
                                                                            Jane Doe
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                            </section>
                                        </div>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <div class="recent_projects ">
                                                        <h3 class="section-title">Mini Gallery</h3>
                                                        <div class="projects_carousel clearfix"
                                                             data-carousel-column="1">
                                                            <div class="iso-item">
                                                                <div class="content-wrapper">
                                                                    <figure>
                                                                        <a data-rel="prettyPhoto[rs_projects]"
                                                                           class="prettyPhoto kids_picture"
                                                                           href="http://www.youtube.com/watch?v=HwXbtZXjbVE"
                                                                           title="Project 5"><img
                                                                                src="{{url('front')}}/pic/347x347-img-2.jpg"
                                                                                alt=""/> </a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="iso-item">
                                                                <div class="content-wrapper">
                                                                    <figure>
                                                                        <a data-rel="prettyPhoto[rs_projects]"
                                                                           class="prettyPhoto kids_picture"
                                                                           href="{{url('front')}}/pic/HappyFeet_4th5.jpg"
                                                                           title="Project 4"><img
                                                                                src="{{url('front')}}/pic/347x347-img-3.jpg"
                                                                                alt=""/> </a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="iso-item">
                                                                <div class="content-wrapper">
                                                                    <figure>
                                                                        <a data-rel="prettyPhoto[rs_projects]"
                                                                           class="prettyPhoto kids_picture"
                                                                           href="{{url('front')}}/pic/HappyFeet_3rd4.jpg"
                                                                           title="Project 3"><img
                                                                                src="{{url('front')}}/pic/347x347-img-1.jpg"
                                                                                alt=""/> </a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ .projects-carousel -->
                                                    </div>
                                                    <!--/ .work-carousel-->
                                                </section>
                                            </section>
                                        </div>
                                        <div class='grid-col grid-col-4'>
                                            <section class='cws-widget'>
                                                <section class='cws_widget_content'>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Integer sollicitudin</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="89"
                                                                 style="background-color:#ffdb5e;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Phasellus eleifend</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="69"
                                                                 style="background-color:#f2a1b0;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Fusce in magna</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="42"
                                                                 style="background-color:#3185cb;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Etiam a dignissim nisl</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="79"
                                                                 style="background-color:#8ddd67;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Morbi nec purus</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="55"
                                                                 style="background-color:#ff5c5c;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single_bar with_title">
                                                        <div class="title">Hendrerit nec mollis</div>
                                                        <div class="scale">
                                                            <div class="progress" data-value="72"
                                                                 style="background-color:#8fc0ea;"></div>
                                                        </div>
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
