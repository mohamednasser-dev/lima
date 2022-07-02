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
    <div class="navigation @yield('navigation_class') ">
        <div class="navigation-wrapper">
            <div class="container" style="direction: rtl;">
                <div class="navigation-inner">
                    <div class="navigation-logo">
                        <a href="{{route('front.home')}}">
                            <img style="width: 185px;" src="{{url('landing')}}/assets/images/logo.png" alt="orions-logo">
                        </a>
                    </div>
                    <div class="navigation-menu">
                        <div class="mobile-header">
                            <div class="logo">
                                <a href="{{route('front.home')}}">
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
                                <a href="{{route('front.home')}}" class="link-underline link-underline-1">
                                    <span>{{trans('landing.home')}}</span>
                                </a>
                            </li>
                            &nbsp; &nbsp; &nbsp;
                            <li>
                                <a href="{{route('front.pages','idea')}}" class="link-underline link-underline-1">
                                    <span>{{trans('landing.idea')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.pages','about')}}" class="link-underline link-underline-1">
                                    <span>{{trans('landing.about')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.pages','terms')}}" class="link-underline link-underline-1">
                                    <span>{{trans('landing.terms')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.pages','privacy')}}" class="link-underline link-underline-1">
                                    <span>{{trans('landing.privacy')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.home')}}#pricing" class="link-underline link-underline-1">
                                    <span>{{trans('landing.pricing')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.home')}}#contact" class="link-underline link-underline-1">
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
