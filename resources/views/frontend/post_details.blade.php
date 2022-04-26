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
    <div class="kids_top_content">
        <div class="kids_top_content_middle ">
            <div class="header_container ">
                <div class="l-page-width">
                    <h1>{{$data['title']}}</h1>
                    <ul id="breadcrumbs">
                        <li><a href="{{url('/')}}" title="{{trans('lang.Home')}}">{{trans('lang.Home')}}</a></li> <span class="">-</span>
                        <li><span class="current_crumb">{{$data['title']}}</span></li>
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
                        <div class="entry-container single-sidebar">
                            <main class="blog">
                                <article class="post-item">
                                    <div class="post-meta">
                                        <div class="post-date">
                                            <span class="day">{{\Carbon\Carbon::parse($data['post']->created_at)->format('d')}}</span>
                                            <span class="month">{{\Carbon\Carbon::parse($data['post']->created_at)->translatedFormat('M Y')}}</span>
                                        </div>
                                        <!--/ post-date-->
                                    </div>
                                    <!--/ post-meta-->
                                    <div class="post-entry">
                                        <div class="content-wrapper alignleft">
                                            <figure>
                                                <a class="prettyPhoto kids_picture" title="{{$data['title']}}" href="{{$data['post']->image}}"><img class="pic" src="{{$data['post']->image}}" alt="Image Post" /></a>
                                            </figure>
                                        </div>
                                        <!--/ post-thumb-->
                                        <div class="entry">
                                            <div class="post-title">
                                              {{$data['post']->name}}
                                            </div>
                                            <!--/ post-title-->

                                            <p>  </p>
                                            <p> {!! $data['post']->body !!} </p>
                                        </div>
                                        <!--/ entry-->
                                    </div>
                                    <!--/ post-entry -->
{{--                                    <div class="post-footer">--}}

{{--                                        <div class="post_cats">--}}
{{--                                            <p><span>Category:</span><a class="link" href="#" title="View all posts in">Image</a></p>--}}
{{--                                        </div>--}}
{{--                                        <!--/ post-cats -->--}}
{{--                                        <div class="post_tags">--}}
{{--                                            <p><span>Tags:</span>--}}
{{--                                                <a href='#' title='Tag' class='link'>Blog</a> </p>--}}
{{--                                        </div>--}}
{{--                                        <!--/ post-tags -->--}}
{{--                                        <div class="kids_clear"></div>--}}
{{--                                    </div>--}}
                                    <!--/ post-footer-->
                                </article>
                                <!--/ post-item-->
                                <div id="respond_block">

{{--                                    <!-- post comments -->--}}
{{--                                    <div class="comment-list" id="comments">--}}
{{--                                        <a href="#" class="comments_q"><h1>No Comments</h1></a>--}}
{{--                                        <!-- post comments -->--}}

{{--                                        <!--/ post comments -->--}}
{{--                                    </div>--}}
{{--                                    <!-- add comment -->--}}
{{--                                    <div class="add-comment" id="addcomments">--}}
{{--                                        <h1>Leave a comment</h1>--}}
{{--                                        <div class="comment-form">--}}
{{--                                            <div id="respond" class="comment-respond">--}}
{{--                                                <form method="post" id="commentform" class="comment-form">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <label>Name (required)</label>--}}
{{--                                                        <input type="text" id="author" name="author" class="inputtext" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <label>Email Address (required)</label>--}}
{{--                                                        <input type="text" name="email" id="email" class="inputtext" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <label>Website URL</label>--}}
{{--                                                        <input type="text" name="url" id="url" class="inputtext" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <textarea cols="30" rows="10" name="comment" id="comment" class="textarea"></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="form-submit">--}}
{{--                                                        <input name="submit" type="submit" id="post_comment" class="submit" value="submit comment" />--}}
{{--                                                        <input type='hidden' name='comment_post_ID' value='346' id='comment_post_ID' />--}}
{{--                                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />--}}
{{--                                                    </p>--}}
{{--                                                    <input type="hidden" name="icl_comment_language"/>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                            <!-- #respond -->--}}
{{--                                        </div>--}}
{{--                                        <!--/ comment-form -->--}}
{{--                                    </div>--}}
                                    <!--/add comment -->
                                </div>
                                <!--/ respond -->
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
<!-- .end_content -->

@endsection

@push('js')
@endpush
