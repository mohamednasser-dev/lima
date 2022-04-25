{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}

@extends('frontend.layout.master')
@push('css')
@endpush
@section('content')

</div>
<!-- .bg-level-1 -->
<div id="kids_middle_container">
    <!-- .content -->
    <div class="kids_top_content">
        <!-- .middle_cloud -->
        <div class="kids_top_content_head">
            <div class="kids_top_content_head_body"></div>
        </div>
        <!-- .kids_top_content_head -->
        <div class="kids_top_content_middle">
            <div class="header_container ">
                <div class="l-page-width">
                    <h1>404</h1>
                    <ul id="breadcrumbs">
                        <li><a href="index.html" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
                        <li><span class="current_crumb">404 page</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .kids_top_content_middle -->
        <div class="kids_top_content_footer"></div>
        <!-- .end_middle_cloud -->
    </div>
    <!-- .end_middle_cloud  -->
    <div class="bg-level-2-full-width-container kids_bottom_content">
        <div class="bg-level-2-page-width-container no-padding">
            <section class="kids_bottom_content_container">
                <!-- ***************** - START Image floating - *************** -->
                <div class="page-content">
                    <div class="bg-level-2 first-part"></div>
                    <div class="container l-page-width">
                        <div class="entry-container single-sidebar">
                            <main>
                                <div class="holder404">
                                    <div class="e404">
                                        <h1>404</h1>
                                        <div class="title_error">
                                            <span></span>
                                            <div>{{trans('lang.page not found')}}</div>
                                        </div>
                                    </div>
                                    <div class="kids_clear"></div>
                                    <div class="description_error">
                                        {{trans('lang.Unfortunately, this page is absent or unavailable')}}

                                        <br />
                                    </div>
                                </div>
                                <!--/ 404-holder-->
                            </main>

                            <div class="kids_clear"></div>
                        </div>
                        <!-- .entry-container -->
                    </div>
                    <div class="bg-level-2 second-part"></div>
                    <!-- ***************** - END Image floating - *************** -->
                </div>
            </section>
            <!-- .bottom_content_container -->
        </div>
        <div class="content_bottom_bg"></div>
    </div>
</div>

@endsection
@push('js')
@endpush
