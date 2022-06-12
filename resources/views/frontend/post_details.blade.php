@extends('frontend.layout.master')
@push('css')
    <style>
        #headerPopup {
            width: 75%;
            margin: 0 auto;
        }

        #headerPopup iframe {
            width: 100%;
            margin: 0 auto;
        }
    </style>
    @endpush
    @section('title')
    {{$data['title']}}
    @endsection
    @section('content')


    </div>
    <!-- .bg-level-1 -->
    <div id="kids_middle_container">
        <!-- .content -->
        <div class="kids_top_content">
            <div class="kids_top_content_middle ">
                <div class="header_container ">
                    <div class="l-page-width">
                        <h1>{!! $data['title'] !!}</h1>
                        <ul id="breadcrumbs">
                            <li><a href="{{url('/')}}" title="{{trans('lang.Home')}}">{{trans('lang.Home')}}</a></li>
                            <span class="">-</span>
                            <li><span class="current_crumb">{!! $data['title'] !!}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .kids_top_content_middle -->
        </div>


        <div class="bg-level-2-full-width-container kids_bottom_content">
            <div class="bg-level-2-page-width-container no-padding">
                <section class="kids_bottom_content_container">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class="page-content">
                        <div class="bg-level-2 first-part"></div>
                        <div class="container l-page-width">
                            <div class="entry-container ">
                                <main>
                                    <div class='grid-row clearfix'>
                                        <div class='grid-col grid-col-12'>
                                            <section class='cws-widget'>
                                                <div class='widget-title'>{!! $data['title'] !!}</div>
                                                <section class='cws_widget_content'>
                                                    <p>
                                                    <div class="content-wrapper alignleft">
                                                        <figure>
                                                            <a class="prettyPhoto kids_picture"
                                                               title="{{$data['title']}}"
                                                               id="headerVideoLink"
                                                               href="#headerPopup"

                                                            >

                                                                <img class="alignleft border size-medium"
                                                                     src="{{$data['post']->image}}"
                                                                     alt="{{$data['post']->name}}" width="300"
                                                                     height="300"/></a>
                                                        </figure>
                                                    </div>
                                                    <div id="headerPopup"
                                                         class="mfp-hide embed-responsive embed-responsive-21by9"
                                                         style="display: none">
                                                        @if($data['post']->type == 'video')
                                                            <video
                                                                style="background-color: black; @if(session('lang')=="ar") padding: 6px; @endif"
                                                                controls="" disablepictureinpicture
                                                                controlslist="nodownload" name="media"
                                                                id="video" width="500px" height="500px">
                                                                <source src="{{$data['post']->video}}" type="video/mp4">
                                                            </video>
                                                        @else

                                                            <img class="alignleft border size-medium"
                                                                 src="{{$data['post']->image}}"
                                                                 alt="{{$data['post']->name}}" width="500px"
                                                                 height="500px"/>
                                                        @endif
                                                        {{--                                                        <iframe--}}
                                                        {{--                                                            id="video"--}}
                                                        {{--                                                            class="embed-responsive-item" width="500px"--}}
                                                        {{--                                                                height="480px"--}}
                                                        {{--                                                                src="{{$data['post']->video}}"--}}
                                                        {{--                                                                frameborder="0" allow="autoplay; encrypted-media"--}}
                                                        {{--                                                                disablepictureinpicture controlslist="nodownload"--}}
                                                        {{--                                                                allowfullscreen></iframe>--}}
                                                    </div>


                                                    {{--                                                    <img class="alignleft border size-medium" src="{{$data['post']->image}}" alt="{{$data['post']->name}}" width="300" height="300" />--}}
                                                    </p>
                                                    <div style="color:black;font-size: x-large">
                                                        {!! $data['post']->body !!}
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
                        {{--                        <div class="bg-level-2 second-part"></div>--}}
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

@section('js')



@endsection
