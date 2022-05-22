@extends('frontend.layout.master')
@push('css')
@endpush
@section('title')
{{$data['title']}}
@endsection
@section('content')


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
                                                    {{--                                                        for eac main category    --}}

                                                    <main>
                                                        <div
                                                            class='widget-title'>{{$data['main_categories']->name}}</div>
                                                        <div class="portfolio iso-column iso-four-column">
                                                            <div class="grid isotope" data-ppp="8"
                                                                 data-cols="954">
                                                                @foreach($data['main_categories']->Posts as $post)
                                                                    <div data-categories="happyfeet"
                                                                         class="iso-item happyfeet">
                                                                        <div class="content-wrapper">
                                                                            <figure>
                                                                                <img
                                                                                    src='{{$post->image}}'
                                                                                    width='278' height='182'
                                                                                    alt='{{$post->name}}'/>
                                                                            </figure>
                                                                        </div>
                                                                        <!--/ content-wrapper-->
                                                                        <div class="gallery-text">
                                                                            <div class="title">

                                                                                <a class="link"
                                                                                   @if($post->free == 1)  href="{{url('post-details/'.$post->id)}}" @endif>
                                                                                    {{$post->name}}
                                                                                </a>

                                                                            </div>
                                                                            {{--                                                                               <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer ...</p>--}}
                                                                        </div>
                                                                        <div class="post-footer">
                                                                            @if($post->free == 1)
                                                                                <a href="{{url('post-details/'.$post->id)}}"
                                                                                   class="cws_button">{{trans('lang.ReadMore')}}</a>
                                                                            @else
                                                                                <a href="#"
                                                                                   class="cws_button">{{trans('lang.Register')}}</a>
                                                                            @endif
                                                                        </div>
                                                                        <!--/ post-footer-->
                                                                        <div class="kids_clear"></div>
                                                                    </div>
                                                                @endforeach


                                                            </div>
                                                            <!-- grid isotope -->

                                                            <!-- .gl_col_ -->
                                                            <!-- comments block -->
                                                            <!-- //end comments block -->
                                                    </main>


                                                </div>
                                                <!-- .entry-container -->
                                            </div>
{{--                                            <div class="bg-level-2 second-part"></div>--}}
                                        </div>
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

@push('js')
@endpush
