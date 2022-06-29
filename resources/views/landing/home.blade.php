<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    meta tags
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    title tag
    -->
    <title>Orions - App Landing Page</title>

    <!--
    favicon
    -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('landing')}}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('landing')}}/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('landing')}}/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{url('landing')}}/assets/images/favicon/site.webmanifest">

    <!--
    stylesheets
    -->
    {{--    English font--}}
    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">--}}

    {{--    arabic font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Kufi Arabic', sans-serif !important;
            font-size: 48px;
        }
    </style>

    <link rel="stylesheet" href="{{url('landing')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="{{url('landing')}}/assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{url('landing')}}/assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

    <!--
    preloader - start
    -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 200 200">
                <g class="pre load6">
                    <path fill="#1B1A1C" d="M124.5,57L124.5,57c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7v0c0-3.9,3.1-7,7-7h36
                C121.4,50,124.5,53.1,124.5,57z"/>
                    <path fill="#1B1A1C" d="M147.7,86.9L147.7,86.9c-2.7,2.7-7.2,2.7-9.9,0l-25.5-25.5c-2.7-2.7-2.7-7.2,0-9.9l0,0
                c2.7-2.7,7.2-2.7,9.9,0L147.7,77C150.5,79.8,150.5,84.2,147.7,86.9z"/>
                    <path fill="#1B1A1C" d="M143,74.5L143,74.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7l0,0c-3.9,0-7-3.1-7-7v-36
                C136,77.6,139.1,74.5,143,74.5z"/>
                    <path fill="#1B1A1C" d="M148.4,112.4L148.4,112.4c2.7,2.7,2.7,7.2,0,9.9L123,147.7c-2.7,2.7-7.2,2.7-9.9,0h0c-2.7-2.7-2.7-7.2,0-9.9
                l25.5-25.5C141.3,109.6,145.7,109.6,148.4,112.4z"/>
                    <path fill="#1B1A1C"
                          d="M125.5,143L125.5,143c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7l0,0c0-3.9,3.1-7,7-7h36 C122.4,136,125.5,139.1,125.5,143z"/>
                    <path fill="#1B1A1C" d="M52.3,113.1L52.3,113.1c2.7-2.7,7.2-2.7,9.9,0l25.5,25.5c2.7,2.7,2.7,7.2,0,9.9h0c-2.7,2.7-7.2,2.7-9.9,0
                L52.3,123C49.5,120.2,49.5,115.8,52.3,113.1z"/>
                    <path fill="#1B1A1C"
                          d="M57,75.5L57,75.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7h0c-3.9,0-7-3.1-7-7v-36C50,78.6,53.1,75.5,57,75.5z"/>
                    <path fill="#1B1A1C" d="M86.9,52.3L86.9,52.3c2.7,2.7,2.7,7.2,0,9.9L61.5,87.6c-2.7,2.7-7.2,2.7-9.9,0l0,0c-2.7-2.7-2.7-7.2,0-9.9
                L77,52.3C79.8,49.5,84.2,49.5,86.9,52.3z"/>
                </g>
            </svg>
        </div>
    </div>
    <!--
    preloader - end
    -->

    <!--
    navigation - start
    -->
    <div class="navigation">
        <div class="navigation-wrapper">
            <div class="container">
                <div class="navigation-inner">
                    <div class="navigation-logo">
                        <a href="index.html">
                            <img src="{{url('landing')}}/assets/images/logo.png" alt="orions-logo">
                        </a>
                    </div>
                    <div class="navigation-menu">
                        <div class="mobile-header">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{url('landing')}}/assets/images/logo-white.png" alt="image">
                                </a>
                            </div>
                            <ul>
                                <li class="close-button">
                                    <i class="fas fa-times"></i>
                                </li>
                            </ul>
                        </div>
                        <ul class="parent">
                            <li>
                                <a href="index.html" class="link-underline link-underline-1">
                                    <span>{{trans('landing.home')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="link-underline link-underline-1">
                                    <span>{{trans('landing.about_80_idea')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="link-underline link-underline-1">
                                    <span>{{trans('landing.about_app')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html" class="link-underline link-underline-1">
                                    <span>{{trans('landing.pricing')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" class="link-underline link-underline-1">
                                    <span>{{trans('landing.contact_us')}}</span>
                                </a>
                            </li>
                        </ul>
                        <div class="social">
                            <h6>Follow</h6>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="background-pattern">
                            <div class="background-pattern-img background-loop"
                                 style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
                            <div class="background-pattern-gradient"></div>
                        </div>
                    </div>
                    <div class="navigation-bar">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    navigation - end
    -->

    <!--
    hero 1 - start
    -->
    <div class="hero hero-1">
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 order-lg-1 col-10 offset-1 order-2">
                        <div class="hero-content">
                            <h1 class="c-dark">Lima & Zola</h1>
                            <p class="large c-grey">{{trans('landing.description')}}
                            </p>
                            <div class="download-button-group">
                                <a href="#" class="download-button download-button-google">
                                    <div class="download-button-inner">
                                        <div class="download-button-icon c-purple">
                                            <i class="fab fa-google-play"></i>
                                        </div>
                                        <div class="download-button-content">
                                            <h5 class="c-grey upper ls-1">get it on</h5>
                                            <h3 class="c-dark ls-2">Google Play</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="download-button download-button-apple">
                                    <div class="download-button-inner">
                                        <div class="download-button-icon c-pink">
                                            <i class="fab fa-apple"></i>
                                        </div>
                                        <div class="download-button-content">
                                            <h5 class="c-grey upper ls-1">get it on</h5>
                                            <h3 class="c-dark ls-2">Apple Store</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 order-lg-2 col-10 offset-1 order-1">
                        <div class="hero-image">
                            <img class="drop-shadow" src="{{url('landing')}}/assets/images/hero-phone.png" alt="image">
                            <div class="hero-absolute-image">
                                <img src="{{url('landing')}}/assets/images/Artwork.png" alt="artwork">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--
    hero 1 - end
    -->

    <!--
    app features wide section - start
    -->
    <div class="app-feature app-feature-1">
        <div class="app-feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-cog"></i>
                                {{--                                <h5>app features</h5>--}}
                            </div>
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.app_content')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-comments"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Easy to Use</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-headset"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Made for Everyone</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-photo-video"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Share Everything</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-server"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Unlimited Storage</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-user-lock"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Data Protection</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                {{--                                <a href="feature-detail-1.html" class="icon">--}}
                                {{--                                    <i class="las la-map-marked-alt"></i>--}}
                                {{--                                </a>--}}
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Use from Anywhere</h3>
                                </a>
                                <p class="c-grey">Heat multiply is second divided fowl there isn't man cattle they
                                    wherein lights greater concern open days tree is brought.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    app features wide section - end
    -->

    <!--
    video section - start
    -->
    <div class="video-section">
        <div class="video-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 order-lg-1 col-10 offset-1 order-2">
                        <div class="video-section-content">
                            <div class="section-heading section-heading-1 center-responsive c-white">
                                <div class="sub-heading upper ls-1">
                                    <i class="las la-video"></i>
                                    <h5>{{trans('landing.our_video')}}</h5>
                                </div>
                                <div class="main-heading">
                                    <h1>Orions is a fast and secure app that was built for both Android and iOS
                                        platforms.</h1>
                                </div>
                            </div>
                            <a href="contact.html" class="button button-1">
                                <div class="button-inner">
                                    <div class="button-content">
                                        <h4>Get Started</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 order-lg-2 order-1">
                        <div class="video-section-video">
                            <figure>
                                <img class="drop-shadow-1" src="{{url('landing')}}/assets/images/video-img.jpg"
                                     alt="image">

                                <div class="play">
                                    <a href="https://www.youtube.com/watch?v=WIl5F5rM5wQ" class="glightbox">
                                        <i class="la la-play"></i>
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="background-pattern background-pattern-radius drop-shadow-1">
                    <div class="background-pattern-img background-loop"
                         style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
                    <div class="background-pattern-gradient"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    video section - end
    -->


    <!--
    feature section - start
    -->
    <div class="feature-section feature-section-1 feature-section-spacing-2">
        <div class="feature-section-wrapper">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-5 offset-lg-0 col-10 offset-1">
                        <div class="feature-section-image">
                            <img src="{{url('landing')}}/assets/images/feature-section-2-img.jpg" class="image"
                                 alt="image">
                            <img src="{{url('landing')}}/assets/images/feature-section-2-phone.png" class="phone"
                                 alt="phone">
                            <div class="background-pattern background-pattern-radius-reverse">
                                <div class="background-pattern-img background-loop"
                                     style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
                                <div class="background-pattern-gradient"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="feature-section-content">
                            <div class="section-heading">
                                <div class="sub-heading c-blue upper ls-1">
                                    {{--                                    <i class="las la-cog"></i>--}}
                                    {{--                                    <h5>app features</h5>--}}
                                </div>
                                <div class="main-heading c-dark">
                                    <h1>{{trans('landing.app_advantage')}}</h1>
                                </div>
                            </div>
                            <div class="icon-text-1-group">
                                <div class="icon-text-1">
                                    <i class="las la-comments"></i>
                                    <div>
                                        <h4 class="c-dark">Video calls</h4>
                                        <p class="c-grey">He saw lesser whales man air. Seasons void fly replenish man
                                            divided open fifth own fruitful.</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-headset"></i>
                                    <div>
                                        <h4 class="c-dark">Private groups</h4>
                                        <p class="c-grey">Give whales creeping sixth. Blessed itself created dry they're
                                            firmament face whose face lesser spirit day dry.</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-photo-video"></i>
                                    <div>
                                        <h4 class="c-dark">Cloud storage</h4>
                                        <p class="c-grey">Waters seasons of place likeness good day let they're evening
                                            replenish years of over that.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="contact.html" class="button button-3">
                                <div class="button-inner">
                                    <div class="button-content">
                                        <h4>Get Started</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    feature section - end
    -->

    <!--
    pricing section - start
    -->
    <div class="pricing-section">
        <div class="pricing-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="section-heading center c-white">
                            <div class="sub-heading upper ls-1">
                                <i class="las la-tags"></i>
                                {{--                                <h5>Our app rates</h5>--}}
                            </div>
                            <div class="main-heading">
                                <h1>{{trans('landing.pricing')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="pricing">
                    <div class="row">
                        <div class="col">
                            <div class="pricing-slider">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" style="justify-content: center;">
                                        <div class="swiper-slide">
                                            <div class="pricing-single basic">
                                                <h5 class="plan">Basic</h5>
                                                <div class="price price-month">
                                                    <div class="month">
                                                        $<span class="number">10.00</span><sup>/mo</sup>
                                                    </div>
                                                    <div class="year">
                                                        $<span class="number">120.00</span><sup>/yr</sup>
                                                    </div>
                                                </div>
                                                <a href="contact.html" class="button button-basic">
                                                    <div class="button-inner">
                                                        <div class="button-content">
                                                            <h4>Get Started</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="pricing-single premium">
                                                <h5 class="plan">Premium</h5>
                                                <div class="price price-month">
                                                    <div class="month">
                                                        $<span class="number">20.00</span><sup>/mo</sup>
                                                    </div>
                                                    <div class="year">
                                                        $<span class="number">240.00</span><sup>/yr</sup>
                                                    </div>
                                                </div>
                                                <a href="contact.html" class="button button-premium">
                                                    <div class="button-inner">
                                                        <div class="button-content">
                                                            <h4>Get Started</h4>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-pattern background-pattern-1">
                <div class="background-pattern-img background-loop"
                     style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
                <div class="background-pattern-gradient"></div>
                <div class="background-pattern-bottom">
                    <div class="image"
                         style="background-image: url(landing/assets/images/patterns/pattern-1.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    pricing section - end
    -->

    <!--
    testimonial section - start
    -->
    <div class="testimonial-section">
        <div class="testimonial-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="section-heading center width-55">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-comments"></i>
                            </div>
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.reviews')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="testimonial-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <div class="image">
                                            <div class="image-wrapper">
                                                <div class="image-inner">
                                                    <img
                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-2.png"
                                                        alt="testimony-image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>“This app is wonderful dry male ceepeth good them their in which to days
                                                two deep has yielding throw darkness bring likeness fifth by darkness
                                                make face saw has under heaven forth saw there without lights app stars
                                                for him replenish fowl creature.”</p>
                                            <h5>— Jack William</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <div class="image">
                                            <div class="image-wrapper">
                                                <div class="image-inner">
                                                    <img
                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-1.png"
                                                        alt="testimony-image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>“This app is wonderful dry male ceepeth good them their in which to days
                                                two deep has yielding throw darkness bring likeness fifth by darkness
                                                make face saw has under heaven forth saw there without lights app stars
                                                for him replenish fowl creature.”</p>
                                            <h5>— Jack William</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <div class="image">
                                            <div class="image-wrapper">
                                                <div class="image-inner">
                                                    <img
                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-3.png"
                                                        alt="testimony-image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>“This app is wonderful dry male ceepeth good them their in which to days
                                                two deep has yielding throw darkness bring likeness fifth by darkness
                                                make face saw has under heaven forth saw there without lights app stars
                                                for him replenish fowl creature.”</p>
                                            <h5>— Jack William</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    testimonial section - end
    -->

    <!--
    faq section - start
    -->
    <div class="faq-section">
        <div class="faq-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-file-alt"></i>

                            </div>
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.asked_questions')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9 col-md-8 col-10">
                        <div class="faq-wrapper">
                            <div class="faq" id="faq-accordion">
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-1">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-1"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-1">
                                            <span>Can I try Orions before I buy?</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-1"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-1"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Prepare questions that the patient should answer when registering for an
                                                online
                                                there consultation. We will send them to him before the visit in the
                                                form of survey
                                                to which he will also be able to attach his research results.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-2">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-2"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-2">
                                            <span>What's your cancellation policy?</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-2"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="faq-2"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Prepare questions that the patient should answer when registering for an
                                                online
                                                there consultation. We will send them to him before the visit in the
                                                form of survey
                                                to which he will also be able to attach his research results.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-3">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-3"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-3">
                                            <span>Do I need my own Apple Developer account?</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-3"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-3"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Prepare questions that the patient should answer when registering for an
                                                online
                                                there consultation. We will send them to him before the visit in the
                                                form of survey
                                                to which he will also be able to attach his research results.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-4">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-4"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-4">
                                            <span>Is there Orions branding in my app?</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-4"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-4"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Prepare questions that the patient should answer when registering for an
                                                online
                                                there consultation. We will send them to him before the visit in the
                                                form of survey
                                                to which he will also be able to attach his research results.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-5">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-5"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-5">
                                            <span>Can I preview before I publish?</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-5"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-5"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Prepare questions that the patient should answer when registering for an
                                                online
                                                there consultation. We will send them to him before the visit in the
                                                form of survey
                                                to which he will also be able to attach his research results.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    faq section - end
    -->

    <!--
    screen section - start
    -->
    <div class="screen-section">
        <div class="screen-section-wrapper">
            <!--
            screen section header - start
            -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                        <div class="screen-section-header">
                            <div class="section-heading center-responsive">
                                {{--                                <div class="sub-heading c-blue upper ls-1">--}}
                                {{--                                    <i class="las la-tablet"></i>--}}
                                {{--                                    <h5>orions universal app</h5>--}}
                                {{--                                </div>--}}
                                <div class="main-heading c-dark">
                                    <h1>{{trans('landing.app_images')}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                        <div class="screen-slider-navigation slider-navigation">
                            <div class="screen-slider-navigation-prev">
                                <i class="las la-long-arrow-alt-left"></i>
                            </div>
                            <div class="screen-slider-navigation-next">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            screen section header - end
            -->
            <!--
            screen section slider - start
            -->
            <div class="screen-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img src="{{url('landing')}}/assets/images/screens/screen-slider-img-1.png"
                                         alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img src="{{url('landing')}}/assets/images/screens/screen-slider-img-2.png"
                                         alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img src="{{url('landing')}}/assets/images/screens/screen-slider-img-3.png"
                                         alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img src="{{url('landing')}}/assets/images/screens/screen-slider-img-4.png"
                                         alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                    </div>
                </div>
            </div>
            <!--
            screen section slider - end
            -->
            <!--
            screen section bottom - start
            -->
            <div class="screen-section-bottom">
                <div class="screen-section-bottom-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                                <h1 class="c-white">Download from both Android and iOS</h1>
{{--                                <h4 class="c-white">--}}
{{--                                    <i class="fas fa-smile"></i>--}}
{{--                                    3 Million users and counting!--}}
{{--                                </h4>--}}
                            </div>
                            <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                                <div class="download-button-group download-button-1-group">
                                    <a href="#" class="download-button download-button-1 download-button-google">
                                        <div class="download-button-inner">
                                            <div class="download-button-icon c-purple">
                                                <i class="fab fa-google-play"></i>
                                            </div>
                                            <div class="download-button-content">
                                                <h5 class="c-grey upper ls-1">get it on</h5>
                                                <h3 class="c-dark ls-2">Google Play</h3>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="download-button download-button-1 download-button-apple">
                                        <div class="download-button-inner">
                                            <div class="download-button-icon c-pink">
                                                <i class="fab fa-apple"></i>
                                            </div>
                                            <div class="download-button-content">
                                                <h5 class="c-grey upper ls-1">get it on</h5>
                                                <h3 class="c-dark ls-2">Apple Store</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            screen section bottom - end
            -->
        </div>
        <div class="background-pattern background-pattern-2">
            <div class="background-pattern-img background-loop"
                 style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
            <div class="background-pattern-gradient"></div>
            <div class="background-pattern-bottom">
                <div class="image" style="background-image: url(landing/assets/images/patterns/pattern-2.jpg);"></div>
            </div>
        </div>
    </div>
    <!--
    screen section - end
    -->

    <!--
    blog section - start
    -->
    <div class="blog-section">
        <div class="blog-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-55">
                            {{--                            <div class="sub-heading c-blue upper ls-1">--}}
                            {{--                                <i class="las la-bullhorn"></i>--}}
                            {{--                                <h5>recent news</h5>--}}
                            {{--                            </div>--}}
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.app_free_content')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="blog-single blog-single-1">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <a href="blog-detail-1.html" class="figure">
                                        <img src="{{url('landing')}}/assets/images/blog/blog-thumbnail-1.jpg"
                                             alt="blog-image">
                                    </a>
                                    <a href="blog-detail-1.html">
                                        <h3>New features coming in 2020 to our app.</h3>
                                    </a>
                                    <p>Behold creature him whose own doesn't god seasons winged two won't bearing herein
                                        fowl fruitful they went there beginning ... </p>
                                </div>
                                <a href="blog-detail-1.html" class="circle">
                                    <i class="las la-plus"></i>
                                    <i class="las la-angle-right hover"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="blog-single blog-single-1">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <a href="blog-detail-1.html" class="figure">
                                        <img src="{{url('landing')}}/assets/images/blog/blog-thumbnail-2.jpg"
                                             alt="blog-image">
                                    </a>
                                    <a href="blog-detail-1.html">
                                        <h3>Raving reviews about our latest algorithms.</h3>
                                    </a>
                                    <p>Behold creature him whose own doesn't god seasons winged two won't bearing herein
                                        fowl fruitful they went there beginning ... </p>
                                </div>
                                <a href="blog-detail-1.html" class="circle">
                                    <i class="las la-plus"></i>
                                    <i class="las la-angle-right hover"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="blog-single blog-single-1">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <a href="blog-detail-1.html" class="figure">
                                        <img src="{{url('landing')}}/assets/images/blog/blog-thumbnail-3.jpg"
                                             alt="blog-image">
                                    </a>
                                    <a href="blog-detail-1.html">
                                        <h3>New features coming in 2020 to our app.</h3>
                                    </a>
                                    <p>Behold creature him whose own doesn't god seasons winged two won't bearing herein
                                        fowl fruitful they went there beginning ... </p>
                                </div>
                                <a href="blog-detail-1.html" class="circle">
                                    <i class="las la-plus"></i>
                                    <i class="las la-angle-right hover"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    blog section - end
    -->

    <!--
    cta section - start
    -->
    <div class="cta-section">
        <div class="cta-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="section-heading center width-71">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-cloud-download-alt"></i>
                                {{--                                <h5>Download Orions</h5>--}}
                            </div>
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.download_now')}}</h1>
                            </div>
                        </div>
                        <div class="download-button-group">
                            <a href="#" class="download-button download-button-google">
                                <div class="download-button-inner">
                                    <div class="download-button-icon c-purple">
                                        <i class="fab fa-google-play"></i>
                                    </div>
                                    <div class="download-button-content">
                                        <h5 class="c-grey upper ls-1">get it on</h5>
                                        <h3 class="c-dark ls-2">Google Play</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="download-button download-button-apple">
                                <div class="download-button-inner">
                                    <div class="download-button-icon c-pink">
                                        <i class="fab fa-apple"></i>
                                    </div>
                                    <div class="download-button-content">
                                        <h5 class="c-grey upper ls-1">get it on</h5>
                                        <h3 class="c-dark ls-2">Apple Store</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    cta section - end
    -->

    <!--
    contact form section - start
    -->
    <div class="contact-form-section contact-form-section-1">
        <div class="contact-form-section-wrapper">
            <div class="container">
                <div class="row gx-5 contact-form-section-row" style="    justify-content: center;">
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <!--
                        contact form - start
                        -->
                        <div class="contact-form drop-shadow-2">
                            <div class="contact-form-wrapper">
                                <div class="section-heading section-heading-2 center">
                                    <div class="sub-heading c-blue upper ls-1">
                                        <i class="las la-envelope"></i>
                                        <h5>{{trans('landing.contact_us')}}</h5>
                                    </div>
                                    <div class="main-heading c-dark">
                                        <h1>Write message</h1>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-floating">
                                        <input class="input form-control" id="name-field" type="text"
                                               placeholder="Full name">
                                        <label for="name-field">Full name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field" type="text"
                                               placeholder="Email address">
                                        <label for="email-field">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="message-field" type="text"
                                               placeholder="Message">
                                        <label for="message-field">Message</label>
                                    </div>
                                    <button type="submit" class="button button-3">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">Submit Reply</span>
                                            </span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!--
                        contact form - end
                        -->
                    </div>
                </div>
            </div>
            <div class="contact-form-section-pattern">
                <div class="left" style="background-image: url('landing/assets/images/Artwork-left.png');"></div>
                <div class="right" style="background-image: url('landing/assets/images/Artwork-right.png');"></div>
            </div>
        </div>
    </div>
    <!--
    contact form section - end
    -->

    <!--
    footer - start
    -->
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-row">
                            <div class="footer-detail">
                                <a href="#">
                                    <img src="{{url('landing')}}/assets/images/logo.png" alt="footer-logo">
                                </a>
                                <p class="c-grey-1">Orions is a universal app template that was designed to cater to
                                    most of the modern app landing page designs requirements.</p>
                                <div class="links">
                                    <a class="link-underline" href="mailto:hello@orions.com">
                                        <span>hello@orions.com</span>
                                    </a>
                                    <a class="link-underline" href="tel:+1-234-567-890">
                                        <span>+1 234 567 890</span>
                                    </a>
                                </div>
                            </div>
                            <div class="footer-list footer-social social-gradient">
                                <h6>Follow</h6>
                                <ul>
                                    <li class="twitter">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span>Linkedin</span>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-youtube"></i>
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-list">
                                <h6>Menu</h6>
                                <ul>
                                    <li>
                                        <a href="about.html" class="link-underline">
                                            <span>About</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="link-underline">
                                            <span>Our Team</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="features-1.html" class="link-underline">
                                            <span>Features</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-1.html" class="link-underline">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="link-underline">
                                            <span>How It Works</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="link-underline">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-list">
                                <h6>Explore</h6>
                                <ul>
                                    <li>
                                        <a href="pricing.html" class="link-underline">
                                            <span>Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html" class="link-underline">
                                            <span>Terms of Services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html" class="link-underline">
                                            <span>Privacy Policy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="link-underline">
                                            <span>Help Center</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-copyright c-grey-1">
                            <h6>&copy; GFXPARTNER</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-pattern"
                 style="background-image: url(landing/assets/images/patterns/pattern-1.jpg)"></div>
        </div>
    </footer>
    <!--
    footer - end
    -->

</div>

<!--
scripts
-->
<script src="{{url('landing')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{url('landing')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{url('landing')}}/assets/js/glightbox.min.js"></script>
<script src="{{url('landing')}}/assets/js/overlay-scrollbars.min.js"></script>
<script src="{{url('landing')}}/assets/js/gsap.min.js"></script>
<script src="{{url('landing')}}/assets/js/main.js"></script>
</body>
</html>
