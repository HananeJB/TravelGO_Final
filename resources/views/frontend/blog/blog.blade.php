@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('custom_css')
<!-- SPECIFIC CSS -->
<link href="/frontend/css/blog.css" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Panagea blog</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-9">

                    @foreach($posts as $post)
                        <article class="blog wow fadeIn">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <figure>
                                        <a href="/blog/{{ $post->id }}"><img src="/uploads/blog/{{ $post->image }}" alt="">
                                            <div class="preview"><span>Read more</span></div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-lg-5">
                                    <div class="post_info">
                                        <small>{{ date('Y-m-d', strtotime($post->created_at)) }}</small>
                                        <h3><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
                                        @php
                                            $body = substr($post->body, 0, 150);
                                        @endphp
                                        <p> {!!$body!!}</p>
                                        <ul>
                                            <li>
                                                <div class="thumb"><img src="/frontend/img/thumb_blog.jpg" alt=""></div> Hannane Jabou
                                            </li>
                                            <li><i class="icon_comment_alt"></i> 20</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- /article -->
                    @endforeach

                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /pagination -->
                </div>
                <!-- /col -->

                <aside class="col-lg-3">

                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <ul class="comments-list">
                            @foreach($latest as $latest)
                            <li>
                                <div class="alignleft">
                                    <a href="/blog/{{ $latest->id }}"><img src="/uploads/blog/{{ $latest->image }}" style="width: auto; height: 80px;" alt=""></a>
                                </div>
                                <small>{{ $latest->created_at }}</small>

                                <h3><a href="#" title="">{{ $latest->title }}</a></h3>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /widget -->

                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="tags">
                            <a href="#">Information tecnology</a>
                            <a href="#">Students</a>
                            <a href="#">Community</a>
                            <a href="#">Carreers</a>
                            <a href="#">Literature</a>
                            <a href="#">Seminars</a>
                        </div>
                    </div>
                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection
