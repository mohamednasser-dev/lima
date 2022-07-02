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
    <title>Lima & Zola</title>

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
<body >

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
            <div class="container" style="direction: rtl;">
                <div class="navigation-inner">
                    <div class="navigation-logo">
                        <a href="index.html">
                            <img style="width: 185px;" src="{{url('landing')}}/assets/images/logo.png" alt="orions-logo">
                        </a>
                    </div>
                    <div class="navigation-menu">
                        <div class="mobile-header">
                            <div class="logo">
                                <a href="index.html">
                                    <img style="width: 185px;" src="{{url('landing')}}/assets/images/logo-white.png" alt="image">
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
                            &nbsp; &nbsp; &nbsp;
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
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/80fekra" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/80fekra" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC5GKLcvxkuktuR2KRN4gyeg" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/01095758550" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
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
                            <p class="large c-grey" style="direction: rtl;">{{trans('landing.description')}}
                            </p>
                            <div class="download-button-group">
                                <a href="#" class="download-button download-button-google">
                                    <div class="download-button-inner">
                                        <div class="download-button-icon c-purple">
                                            <i class="fab fa-google-play"></i>
                                        </div>
                                        <div class="download-button-content">
                                            <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
                                            <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
            <div class="container" style="direction: rtl;">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            <div class="sub-heading c-blue upper ls-1">
                                {{--                                <i class="las la-cog"></i>--}}
                                {{--                                <h5>app features</h5>--}}
                            </div>
                            <div class="main-heading c-dark">
                                <h1>{{trans('landing.app_content')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5" style="text-align: center;">
                    @foreach($data['categories'] as $key=> $category)
                            <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                                <div class="">
                                    <div class="">
                                        <a href="blog-detail-1.html" class="figure">
                                            <img src="{{$category->image}}" style="width: 206px;"
                                                 alt="blog-image">
                                        </a>
                                        <a href="feature-detail-1.html">
                                            <h3 class="c-dark">{{$category->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
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
                                    <h5>{{trans('landing.learn_more')}}</h5>
                                </div>
                                <div class="main-heading">
                                    <h1>
                                        {{trans('landing.video_description')}}
                                    </h1>
                                </div>
                            </div>
{{--                            <a href="contact.html" class="button button-1">--}}
{{--                                <div class="button-inner">--}}
{{--                                    <div class="button-content">--}}
{{--                                        <h4>Get Started</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
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
                            <div class="icon-text-1-group" style="direction: rtl;">
                                <div class="icon-text-1">
                                    <i class="las la-user-alt"></i>
                                    <div>
                                        <h4 class="c-dark">آمن لطفلك</h4>
                                        <p class="c-grey">تم مراجعة كل شيء بدقة وعناية فائقة حتى يكون آمن تمامًا على طفلك وجميع أفراد أسرتك.
                                            كن واثقًا من ذلك, لقد شاهده أولادنا أولًا.</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-photo-video"></i>
                                    <div>
                                        <h4 class="c-dark">موثوق للأمهات</h4>
                                        <p class="c-grey">فيديوهات ومقالات تم إعدادها من قبل أفضل الاستشاريين التربويين  الموثوق بعلمهم.
                                            إننا نقدم لك خلاصة خبراتهم وتجاربهم.</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-low-vision"></i>
                                    <div>
                                        <h4 class="c-dark">بدون أي شيء مزعج</h4>
                                        <p class="c-grey">هنا، لا يوجد أي إعلانات مزعجة أو مشاهد غير لائقة أو موسيقى.</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-sync"></i>
                                    <div>
                                        <h4 class="c-dark">محتوى متجدد</h4>
                                        <p class="c-grey">نضيف العديد من المحتوى الرائع  بشكل أسبوعي، فريق عملنا لن يتوقف عن إفادتكم أبدًا إن شاء الله .</p>
                                    </div>
                                </div>
                                <div class="icon-text-1">
                                    <i class="las la-money-bill-wave"></i>
                                    <div>
                                        <h4 class="c-dark">طرق دفع متعددة</h4>
                                        <p class="c-grey">التطبيق متوفر بتكلفة مناسبة ويمكنك الدفع بسهولة عن طريق فوري , أمان , المحافظ الإلكترونية , visa . mastercard</p>
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
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="pricing-single basic">
                                                <h5 class="plan">6 شهور</h5>
                                                <div class="price price-month">
                                                    <div class="month" style=" width: 132px;">
                                                        <span class="number">200</span><sup>/جنية مصري</sup>
                                                        بدل من
                                                        <br>
                                                        <span class="number">400</span><sup>/جنية مصري</sup>
                                                    </div>

                                                    <div class="year">
                                                        <span class="number">120.00</span><sup>/yr</sup>
                                                    </div>
                                                </div>
                                                <a href="contact.html" class="button button-basic">
                                                    <div class="button-inner">
                                                        <div class="button-content">
                                                            <h4>اشترك الان</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="pricing-single premium">
                                                <h5 class="plan">سنة</h5>
                                                <div class="price price-month">
                                                    <div class="month" style=" width: 132px;">
                                                        <span class="number">250</span><sup>/جنية مصري</sup>
                                                        بدل من
                                                        <br>
                                                        <span class="number">500</span><sup>/جنية مصري</sup>
                                                    </div>

                                                    <div class="year">
                                                        <span class="number">120.00</span><sup>/yr</sup>
                                                    </div>
                                                </div>
                                                <a href="contact.html" class="button button-premium">
                                                    <div class="button-inner">
                                                        <div class="button-content">
                                                            <h4>اشترك الان</h4>
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
{{--    <div class="testimonial-section">--}}
{{--        <div class="testimonial-section-wrapper">--}}
{{--            <div class="container" >--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">--}}
{{--                        <div class="section-heading center width-55">--}}
{{--                            <div class="sub-heading c-blue upper ls-1">--}}
{{--                                <i class="las la-comments"></i>--}}
{{--                            </div>--}}
{{--                            <div class="main-heading c-dark">--}}
{{--                                <h1>{{trans('landing.reviews')}}</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="testimonial-slider">--}}
{{--                        <div class="swiper-container">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <div class="testimonial-slide">--}}
{{--                                        <div class="image">--}}
{{--                                            <div class="image-wrapper">--}}
{{--                                                <div class="image-inner">--}}
{{--                                                    <img--}}
{{--                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-2.png"--}}
{{--                                                        alt="testimony-image">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="content" >--}}
{{--                                            <p style="direction: rtl;" >“This app is wonderful dry male ceepeth good them their in which to days--}}
{{--                                                two deep has yielding throw darkness bring likeness fifth by darkness--}}
{{--                                                make face saw has under heaven forth saw there without lights app stars--}}
{{--                                                for him replenish fowl creature.”</p>--}}
{{--                                            <h5>— Jack William</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <div class="testimonial-slide">--}}
{{--                                        <div class="image">--}}
{{--                                            <div class="image-wrapper">--}}
{{--                                                <div class="image-inner">--}}
{{--                                                    <img--}}
{{--                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-1.png"--}}
{{--                                                        alt="testimony-image">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="content">--}}
{{--                                            <p style="direction: rtl;"  > “This app is wonderful dry male ceepeth good them their in which to days--}}
{{--                                                two deep has yielding throw darkness bring likeness fifth by darkness--}}
{{--                                                make face saw has under heaven forth saw there without lights app stars--}}
{{--                                                for him replenish fowl creature.”</p>--}}
{{--                                            <h5>— Jack William</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <div class="testimonial-slide">--}}
{{--                                        <div class="image">--}}
{{--                                            <div class="image-wrapper">--}}
{{--                                                <div class="image-inner">--}}
{{--                                                    <img--}}
{{--                                                        src="{{url('landing')}}/assets/images/testimonial-slide-img-3.png"--}}
{{--                                                        alt="testimony-image">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="content">--}}
{{--                                            <p style="direction: rtl;" >“This app is wonderful dry male ceepeth good them their in which to days--}}
{{--                                                two deep has yielding throw darkness bring likeness fifth by darkness--}}
{{--                                                make face saw has under heaven forth saw there without lights app stars--}}
{{--                                                for him replenish fowl creature.”</p>--}}
{{--                                            <h5>— Jack William</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-1"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-1">
                                            <span>كيف يستفيد طفلي من التطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-1"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="faq-1"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>يقدم التطبيق العديد من حلقات الكرتون العلمية و القصص ومقالات تبسيط العلوم و الحكايات وغيرها من المعلومات الممتعة والآمنة تمامًا على طفلك.</p>
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
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-2"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-2">
                                            <span>كيف يستفيد ولي الأمر من التطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-2"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-2"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>يقدم التطبيق فيديوهات تربوية ومقالات تم إعدادها من قبل أفضل الاستشاريين لحل أكثر المشاكل التربوية الشائعة التي يعاني منها ولي الأمر بشكل عملي ومبسط.</p>
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
                                            <span>ما هو العمر المناسب للتطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-3"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-3"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>تم إعداد المحتوى ليناسب الأطفال +6 أعوام ولكن إذا كان طفلك أقل من 6 أعوام ومدمن للشاشات  فيمكنه الاعتماد على التطبيق كبديل أكثر أمانًا وأعلى في معدل الاستفادة.</p>
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
                                            <span>كم تكلفة التطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-4"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-4"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>يمكنك الاستفادة من بعض المحتوى المجاني ولكن إذا كنت ترغب في الاستفادة من المحتوى كاملًا, حينها يجب الاشتراك في التطبيق وتكلفة ذلك بسيطة وهي 200ج بدل 400ج للاشتراك مدة 6 شهور أو 250ج بدل من 500ج  لمدة سنة كاملا.</p>
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
                                            <span>ما هي طرق الدفع المتاحة؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-5"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-5"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>يمكنك الدفع بطرق مختلفة مناسبة للجميع سواء كانت
                                                •	بطاقات الدفع ( VISA – MASTERCARD – ميزة )
                                                •	فوري
                                                •	أمان
                                                •	المحافظ الإلكترونية ( فودافون كاش, أورانج كاش, اتصالات فلوس)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-6">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-6"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-6">
                                            <span>هل يوجد موسيقى في محتوى التطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-6"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-6"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
<p>جميع الأقسام في التطبيق لا تضم أي نوع من أنواع الموسيقى.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-7">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-7"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-7">
                                            <span>كيفية الاشتراك في التطبيق؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-7"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-7"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>نقوم بالدخول على التطبيق.
                                                بعد ذلك يتم تسجيل الدخول أو إنشاء حساب جديد.
                                                ندخل على أي فيديو أو مقالة من المقالات الغير مجانية وعند الضغط عليها فان التطبيق يوجهنا لصفحة الدفع.
                                                يتم اختيار وسيلة الدفع المناسبة.
                                                بعد الدفع, يمكنك الاستمتاع بالتطبيق كاملًا.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-8">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-collapse-8"
                                            aria-expanded="true"
                                            aria-controls="faq-collapse-8">
                                            <span>ماذا عن التجديد التلقائي للاشتراك؟</span>
                                        </button>
                                    </div>
                                    <div
                                        id="faq-collapse-8"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="faq-8"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>لا يتم تجديد الاشتراك  التلقائي  ويمكنك إعادة الاشتراك متى شئتِ. نثق في انطباعك عن التطبيق وفي انتظارِك مرة أخرى.</p>

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
                                                <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
                                                <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
    @if(count($data['free_posts']) > 0)
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
                        @foreach($data['free_posts'] as $row)
                            <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                                <div class="blog-single blog-single-1">
                                    <div class="blog-single-wrapper">
                                        <div class="blog-single-content">
                                            <a href="#" class="figure">
                                                <img src="{{$row->image}}"
                                                     alt="blog-image">
                                            </a>
                                            <a href="#">
                                                <h3>{!! $row->name !!}</h3>
                                            </a>
                                        </div>
                                        <a href="#" class="circle">
                                            <i class="las la-plus"></i>
                                            <i class="las la-angle-right hover"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
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
                                        <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
                                        <h5 class="c-grey upper ls-1">{{trans('landing.get_it_on')}}</h5>
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
                                        <h1>{{trans('landing.write_message')}}</h1>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-floating">
                                        <input class="input form-control" id="name-field" type="text"
                                               placeholder="Full name">
                                        <label for="name-field">{{trans('landing.name')}}</label>
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field" type="text"
                                               placeholder="Email address">
                                        <label for="email-field">{{trans('landing.email')}}</label>
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="message-field" type="text"
                                               placeholder="Message">
                                        <label for="message-field">{{trans('landing.message')}}</label>
                                    </div>
                                    <button type="submit" class="button button-3">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">{{trans('landing.send')}}</span>
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
                                <p class="c-grey-1" style="direction: rtl;">{{trans('landing.description')}}</p>
                                <div class="links">
                                    <a class="link-underline" href="{{$setting_email}}">
                                        <span>{{$setting_email}}</span>
                                    </a>
                                    <a class="link-underline" href="tel:{{$setting_phone}}">
                                        <span>{{$setting_phone}}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="footer-list footer-social social-gradient">
                                <h6>مواقع التواصل الاجتماعي</h6>
                                <ul>
                                    <li class="instagram">
                                        <a target="_blank" href="https://www.instagram.com/80fekra" class="link-underline">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instgram</span>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a target="_blank" href="https://www.facebook.com/80fekra" class="link-underline">
                                            <i class="fab fa-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>

                                    <li class="youtube">
                                        <a target="_blank" href="https://www.youtube.com/channel/UC5GKLcvxkuktuR2KRN4gyeg" class="link-underline">
                                            <i class="fab fa-youtube"></i>
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                    <li class="whatsapp">
                                        <a href="tel:01095758550" target="_blank" class="link-underline">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>whatsapp</span>
                                        </a>
                                    </li>
                                    <li class="globe">
                                        <a href="http://80fekra.com/ar/products" target="_blank" class="link-underline">
                                            <i class="fab fa-globe"></i>
                                            <span>Site</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-list">
                                <h6>القوائم</h6>
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
                                <h6>الاكثر زيارة</h6>
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
                            <h6>&copy; 80-IDEA</h6>
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
