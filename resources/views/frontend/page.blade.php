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
    {{$title}}
    @endsection
    @section('content')


    </div>	<div id="kids_middle_container">
        <!-- .content -->
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
                                                <div class='widget-title'>  {{$title}} </div>
                                                <section class='cws_widget_content'>
                                                    <p>
                                                        <img class="alignleft border size-medium" src="{{$page->image}}" alt="{{$title}}" width="300" height="300" />
                                                    </p>
                                                    <p style="color: black;font-size: x-large ">
                                                    {!! $page->title !!}

                                                        @if($page->id == 5)
                                                        <ul class="kids_social">
                                                            @foreach(\App\Models\SocialLink::all() as $link)
                                                        <li><a href="{{$link->link}}" target="_blank" class="lang_sel_sel icl-en"><img class="iclflag"
                                                                                                         style="padding-top: 12px;padding-right: 6px;width: 50px;height: 50px"
                                                                                                         src="{{$link->image}}"
                                                                                                         alt="lima" title="lima"/> &nbsp;
                                                            </a></li>

                                                            @endforeach

                                                        </ul>
                                                        @endif
                                                    </p>


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
    <div class="bg-level-2 second-part"></div>
    </div>
    <!-- ***************** - END Image floating - *************** -->
    </section>
    <!-- .bottom_content_container -->
    </div>
    <div class="content_bottom_bg"></div>
    </div>
    </div>

    @endsection

@section('js')



@endsection
