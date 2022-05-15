<!-- FOOTER BEGIN -->
<div class="kids_bottom_container footer">
    <div class="l-page-width">
        <div class="wrapper">
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class='shortcode_carousel' data-carousel-column="1">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>{{trans('lang.aboutUs')}}</div>
                        </div>
                        <div class='widget_text'>
                            <!-- see gallery_shortcode() -->
                            <div id='' class='column-1'>
                                {!! \App\Models\Setting::where('key', 'about_'.session('lang'))->first()->val !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class='shortcode_carousel' data-carousel-column="1">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>{{trans('lang.usage')}}</div>
                        </div>
                        <div class='widget_text'>
                            <!-- see gallery_shortcode() -->
                            <div id='' class=' column-1'>
                                {!! \App\Models\Setting::where('key', 'usage_'.session('lang'))->first()->val !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget widget_text">
                <div class="textwidget">
                    <div class='shortcode_carousel' data-carousel-column="1">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>{{trans('lang.terms')}}</div>
                        </div>
                        <div class='widget_text'>
                            <!-- see gallery_shortcode() -->
                            <div id='' class=' column-1'>
                                {!! \App\Models\Setting::where('key', 'terms_'.session('lang'))->first()->val !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget widget_text">
                <div class="textwidget">
                    <div class='shortcode_carousel' data-carousel-column="1">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>{{trans('lang.privacy')}}</div>
                        </div>
                        <div class='widget_text'>
                            <!-- see gallery_shortcode() -->
                            <div id='' class=' column-1'>
                                {!! \App\Models\Setting::where('key', 'privacy_'.session('lang'))->first()->val !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /wrapper -->
    </div>
    <!--/ l-page-width-->
</div>
<!-- .kids_bottom_container -->
<div class="kids-footer-copyrights footer">
    <div class="l-page-width  clearfix">
        <div class="wrapper">
            <ul class="kids_social">
                <li><a href="{{\App\Models\Setting::where('key', 'google')->first()->val}}" title="Google Plus"
                       target="_blank"><i class="fa fa-google-plus fa-2x"></i></a><span
                        style="background-color:#dd4b39;"></span></li>
                <li><a href="{{\App\Models\Setting::where('key', 'facebook')->first()->val}}" title="Facebook"
                       target="_blank"><i class="fa fa-facebook fa-2x"></i></a><span
                        style="background-color:#3b5998;"></span></li>
                <li><a href="{{\App\Models\Setting::where('key', 'youtube')->first()->val}}" title="Youtube"
                       target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a><span
                        style="background-color:#b31217;"></span></li>
                <li><a href="{{\App\Models\Setting::where('key','twitter')->first()->val}}" title="Twitter"
                       target="_blank"><i class="fa fa-twitter fa-2x"></i></a><span
                        style="background-color:#4099ff;"></span></li>
                <li class="lang_bar">
                    <div id="lang_sel">
                        @if(session('lang') == "ar")
                            <ul>
                                <li>
                                    <a href="#" class="lang_sel_sel icl-en"><img class="iclflag"
                                                                                 src="{{url('front')}}/images/ar.png"
                                                                                 alt="ar" title="العربية"/> &nbsp;
                                    </a>
                                    <ul>
                                        <li class="icl-fr">
                                            <a href="{{url('lang/en')}}"><img class="iclflag"
                                                                              src="{{url('front')}}/images/en.png"
                                                                              alt="en"
                                                                              title="English"/>&nbsp;</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li>
                                    <a href="#" class="lang_sel_sel icl-en"><img class="iclflag"
                                                                                 src="{{url('front')}}/images/en.png"
                                                                                 alt="en" title="English"/> &nbsp;
                                    </a>
                                    <ul>
                                        <li class="icl-fr">
                                            <a href="{{url('lang/ar')}}"><img class="iclflag"
                                                                              src="{{url('front')}}/images/ar.png"
                                                                              alt="ar"
                                                                              title="العربية"/>&nbsp;</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </li>
            </ul>
            <div class="widget widget_text">
                <div class="textwidget">Copyrights @ {{ date('Y') }}: <a href="https://tesolutionspro.com/"
                                                                         target="_blank">TE-Solutions</a></div>
            </div>
        </div>
    </div>
    <div class="dark-mask"></div>
</div>
<script type='text/javascript' src='{{url('front')}}/js/jquery.min.js'></script>
<script type="text/javascript" src="{{url('front')}}/revslider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/revslider/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src='{{url('front')}}/js/jquery-ui.min.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/scripts.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/retina.min.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/jquery.tweet.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/jquery.easing-1.3.min.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/owl.carousel.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/jquery.flexnav.min.js'></script>
<script type='text/javascript' src='{{url('front')}}/js/jquery.prettyPhoto.js'></script>
{{--<script>--}}

{{--    document.addEventListener('contextmenu', event => event.preventDefault());--}}
{{--    /** TO DISABLE SCREEN CAPTURE **/--}}
{{--    document.addEventListener('keyup', (e) => {--}}
{{--        if (e.key == 'PrintScreen') {--}}
{{--            navigator.clipboard.writeText('');--}}
{{--            alert('Screenshots disabled!');--}}
{{--        }--}}
{{--    });--}}

{{--    /** TO DISABLE PRINTS WHIT CTRL+P **/--}}
{{--    document.addEventListener('keydown', (e) => {--}}
{{--        if (e.ctrlKey && e.key == 'p') {--}}
{{--            alert('This section is not allowed to print or export to PDF');--}}
{{--            e.cancelBubble = true;--}}
{{--            e.preventDefault();--}}
{{--            e.stopImmediatePropagation();--}}
{{--        }--}}
{{--    });--}}

{{--    /** TO DISABLE PRINTS WHIT CTRL+U **/--}}
{{--    document.addEventListener('keydown', (e) => {--}}
{{--        if (e.ctrlKey && e.key == 'u') {--}}
{{--            alert('This section is not allowed to see source code');--}}
{{--            e.cancelBubble = true;--}}
{{--            e.preventDefault();--}}
{{--            e.stopImmediatePropagation();--}}
{{--        }--}}
{{--    });--}}

{{--    document.onkeypress = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}
{{--    document.onmousedown = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}
{{--    document.onkeydown = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}

{{--</script>--}}

@yield('js')
</body>
</html>
