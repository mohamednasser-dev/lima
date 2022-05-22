<!DOCTYPE html>
<!--[if lte IE 8]>
<html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie" @if(session('lang') == "ar") lang="ar" dir="rtl" @endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{settings('site_name_'.session('lang'))}} </title>
    <link rel="alternate" type="application/rss+xml"
          title="{{\App\Models\Setting::where('key', 'site_name_'.session('lang'))->first()->val}}  &raquo; Comments Feed"
          href="#"/>
    <link rel="shortcut icon" href="{{url('/')}}/{{\App\Models\Setting::where('key', 'logo')->first()->val}}">
    <link rel="stylesheet" href="{{url('front')}}/css/font-awesome.css">
    @if(session('lang') == "ar")
        <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/styles.rtl.css"/>
    @else
        <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/styles.css"/>
    @endif
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/maps.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/woocommerce.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/flexnav.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/prettyPhoto.css"/>
    @if(session('lang') == "ar")
        <link rel="stylesheet" type="text/css" href="{{url('front')}}/revslider/styles.rtl.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

    @else
        <link rel="stylesheet" type="text/css" href="{{url('front')}}/revslider/styles.css"/>
    @endif
    <style>
        body {

            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                             supported by Chrome, Edge, Opera and Firefox */
        }




    </style>
</head>


<body data-type-of-widget="2" class="home page kids-front-page t-pattern-1">
<!-- HEADER BEGIN -->
<div class="top-panel">
    <div class="l-page-width clearfix">
        <div class="wrapper">
            <div class="widget widget_cws_tweets">
                <div class='cws-widget-content '>
                    <div class="latest_tweets ">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ .top-panel-->
<div class="kids-bg-level-1" style="background: #8BDED6">
    <div class="bg-level-1"></div>
    <header id="kids_header">
        <div class="l-page-width clearfix">
            <ul class="kids_social">

                <li class='lang_bar'>
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
                <li><a href="{{\App\Models\Setting::where('key', 'google')->first()->val}}" title="Google Plus"
                       target="_blank"><i
                            class="fa fa-google-plus fa-2x"></i></a><span style="background-color:#dd4b39;"></span></li>
                <li><a href="{{\App\Models\Setting::where('key', 'facebook')->first()->val}}" title="Facebook"
                       target="_blank"><i
                            class="fa fa-facebook fa-2x"></i></a><span style="background-color:#3b5998;"></span></li>
                <li><a href="{{\App\Models\Setting::where('key', 'youtube')->first()->val}}" title="Youtube"
                       target="_blank"><i
                            class="fa fa-youtube-play fa-2x"></i></a><span style="background-color:#b31217;"></span>
                </li>
                <li><a href="{{\App\Models\Setting::where('key','twitter')->first()->val}}" title="Twitter"
                       target="_blank"><i
                            class="fa fa-twitter fa-2x"></i></a><span style="background-color:#4099ff;"></span></li>


            </ul>
            <!-- .kids_social -->
            <div class="kids_clear"></div>
            <div id="kids_logo_block" class="logo-position-left">
                <a id="kids_logo_text" href="{{url('/')}}"><img style="max-height: 40%;max-width: 40%"
                                                                src="{{url('/')}}/{{\App\Models\Setting::where('key', 'logo')->first()->val}}"
                                                                alt="{{\App\Models\Setting::where('key', 'site_name_'.session('lang'))->first()->val}}"
                                                                title="{{\App\Models\Setting::where('key', 'site_name_'.session('lang'))->first()->val}}"/></a>
            </div>
            <nav id="kids_main_nav" class="menu-position-right">
                <div class="menu-button">
                    <span class="menu-button-line"></span>
                    <span class="menu-button-line"></span>
                    <span class="menu-button-line"></span>
                </div>
                <ul id="menu-main" class="clearfix flexnav " data-breakpoint="800">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "home" || Request::segment(1) == "" ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.Home')}}</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "about80Fekra"  ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.about80Fekra')}}</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "team"  ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.team')}}</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "privacy"  ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.privacy')}}</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "terms"  ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.terms')}}</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom  @if(Request::segment(1) == "contact"  ) current-menu-item current_page_item @endif">
                        <a href="{{url('/')}}">{{trans('lang.contact')}}</a></li>
                    {{--                    <li class="menu-item menu-item-has-children"><a href="page-features.html">Features</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li class="menu-item"><a href="page-features.html">Template Features</a></li>--}}
                    {{--                            <li class="menu-item menu-item-has-children"><a href="content-elements.html">Content--}}
                    {{--                                    Elements</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    <li class="menu-item"><a href="page-grid.html">Grids Showcase</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="content-elements.html">Content Elements</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="page-video.html">Video</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="typography.html">Text and Headings</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="menu-item"><a href="pricing-tables.html">Pricing Tables</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-item menu-item-has-children"><a href="full-width-page.html">Pages</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li class="menu-item"><a href="full-width-page.html">Full Width Page</a></li>--}}
                    {{--                            <li class="menu-item"><a href="doble-sidebars.html">Doble Sidebars</a></li>--}}
                    {{--                            <li class="menu-item"><a href="right-navigation.html">Right Navigation</a></li>--}}
                    {{--                            <li class="menu-item"><a href="left-navigation.html">Left Navigation</a></li>--}}
                    {{--                            <li class="menu-item"><a href="right-nav-sidebar.html">Right Nav + Sidebar</a></li>--}}
                    {{--                            <li class="menu-item"><a href="left-nav-sidebar.html">Left Nav + Sidebar</a></li>--}}
                    {{--                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="page-404.html">404--}}
                    {{--                                    Page</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-itemmenu-item-has-children"><a href="portfolio-full-width.html">Portfolio</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li class="menu-item-has-children"><a href="#">Columns</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    <li class="menu-item"><a href="portfolio-1col.html">Portfolio 1 Column</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="portfolio-2col.html">Portfolio 2 Columns</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="portfolio-3col.html">Portfolio 3 Columns</a></li>--}}
                    {{--                                    <li class="menu-item"><a href="portfolio-4col.html">Portfolio 4 Columns</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-full-width.html">Full-width page</a></li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-double-sidebars.html">Double Sidebars</a></li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-gallery.html">Gallery</a></li>--}}
                    {{--                            <li class="menu-item"><a href="portfolio-gallery-sidebar.html">Gallery + Sidebar</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a--}}
                    {{--                            href="#">Blog</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li class="menu-item"><a href="blog-right-sidebar.html">Right Sidebar</a></li>--}}
                    {{--                            <li class="menu-item"><a href="blog-left-sidebar.html">Left Sidebar</a></li>--}}
                    {{--                            <li class="menu-item"><a href="blog-double-sidebars.html">DoubleSidebars</a></li>--}}
                    {{--                            <li class="menu-item"><a href="blog-fullwidth.html">Full Width</a></li>--}}

                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-item menu-item-has-children"><a href="shop.html">Shop</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li class="menu-item"><a href="shop-shortcodes.html">Woo Shortcodes</a></li>--}}
                    {{--                            <li class="menu-item"><a href="shop-cart.html">Cart</a></li>--}}

                    {{--                            <li class="menu-item"><a href="shop-checkout.html">Checkout</a></li>--}}
                    {{--                            <li class="menu-item"><a href="shop-account.html">My Account</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-item"><a href="page-contact.html">Contact</a></li>--}}
                </ul>
            </nav>
            <!-- #kids_main_nav -->
        </div>
        <!--/ .l-page-width-->
    </header>
