
@extends('landing.layout.master')
@section('navigation_class')
    navigation-1
@endsection
@section('content')
    <div class="page-header">
        <div class="page-header-wrapper">
            <div class="page-header-inner">
                <div class="container">
                    <div class="row d-lg-flex align-items-lg-end">
                        <div class="col-lg-6">
                            <div class="page-header-content c-white">
                                <h1>404 page</h1>
                                <ul>
                                    <li>
                                        <a href="{{route('front.home')}}" class="link-underline">
                                            <span>{{trans('landing.home')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="las la-angle-right"></i>
                                        <a href="javascript:void($this);" class="link-underline">
                                            <span>404 page</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="background-pattern background-pattern-2">
                <div class="background-pattern-img background-loop" style="background-image: url(landing/assets/images/patterns/pattern.jpg);"></div>
                <div class="background-pattern-gradient"></div>
                <div class="background-pattern-bottom">
                    <div class="image" style="background-image: url(landing/assets/images/patterns/pattern-2.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    page header - end
    -->

    <!--
    about section - start
    -->
    <div class="about-section">
        <div class="about-section-wrapper">
            <div class="container">
                <!--
                first half - start
                -->
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2">
                        <div class="about-section-content c-grey">
                            <div class="section-heading">
                            </div>
                            <p class="paragraph-big" style="direction: rtl;">{{trans('lang.page not found')}}</p>
                            <p class="paragraph-big" style="direction: rtl;">{{trans('lang.Unfortunately, this page is absent or unavailable')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                        <div class="about-section-image">
                            <div class="pattern-image pattern-image-1">
                                <div class="pattern-image-wrapper">
                                    {{trans('lang.Unfortunately, this page is absent or unavailable')}}
                                    <div class="background-pattern background-pattern-radius drop-shadow-1">
                                        <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                                        <div class="background-pattern-gradient"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
