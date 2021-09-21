@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')

@section('custom_css')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
@endsection



    <div id="page">

        <!-- /header -->

        <main>
            <section class="header-video adventure">
                <div id="hero_video">
                    <div class="wrapper">
                        <div class="container container-custom">
                            <small>Introducing</small>
                            <h3>Panagea Adventures</h3>
                            <p>Hosted journeys to extraordinary and unique places.</p>
                            <a href="adventure-detail.html" class="btn_1">Read more</a>
                        </div>
                    </div>
                </div>
                <img src="/frontend/img/video_fix.png" alt="" class="header-video--media" data-video-src="/frontend/video/adventure" data-teaser-source="/frontend/video/adventure" data-provider="" data-video-width="1920" data-video-height="960">
            </section>
            <!-- /header-video -->

            <div class="container container-custom margin_80_55">
                <section class="add_bottom_45">
                    <div class="main_title_3">
                        <span><em></em></span>
                        <h2>Popular Adventures Tours</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>

                    <div id="reccomended_adventure" class="owl-carousel owl-theme">

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>7.9</strong></div>
                                    <img src="/frontend/img/adventure_popular_1.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <em>3 days in Patagonia</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>9.0</strong></div>
                                    <img src="/frontend/img/adventure_popular_2.jpg" class="img-fluid" alt="">
                                    <div class="info">

                                        <em>2 days in Caribbean</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>9.5</strong></div>
                                    <img src="/frontend/img/adventure_popular_3.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <em>2 days in Caribbean</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>9.0</strong></div>
                                    <img src="/frontend/img/adventure_popular_4.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <em>2 days in Canada</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>9.0</strong></div>
                                    <img src="/frontend/img/adventure_popular_5.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <em>3 days in Norway</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="adventure-detail.html" class="grid_item_adventure">
                                <figure>
                                    <div class="score"><strong>8.5</strong></div>
                                    <img src="/frontend/img/adventure_popular_6.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <em>3 days in Brasil</em>
                                        <h3>Horseback ride through Valencia</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>

                    </div>
                    <!-- /reccomended_aventure -->
                </section>
                <!-- /section -->

                <div class="banner">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div>
                            <small>Adventure</small>
                            <h3>Your Perfect<br>Advenure Experience</h3>
                            <p>Activities and accommodations</p>
                            <a href="adventure-detail.html" class="btn_1">Read more</a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->

                <section>
                    <div class="main_title_3">
                        <span><em></em></span>
                        <h2>Last Added Adventures Tours</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row">
                        @foreach($adventures as $adventure)
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href='/adventures/details/{{$adventure->id}}' class="grid_item latest_adventure">
                                <figure>
                                    <div class="score"><strong>8.5</strong></div>
                                    <img src="/images/{{$adventure->cover}}" class="img-fluid" style="width: 400px; height: 267px;" alt="">
                                    <div class="info">
                                        @php
                                            $date1 = new DateTime($adventure->stardate) ;
                                            $date2 = new DateTime($adventure->enddate);
                                            $interval = $date1->diff($date2);
                                        @endphp

                                        <em>{!! $interval->days !!} days in {{$adventure->country}}</em>
                                        <h3>{{$adventure->title}}</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- /row -->
                    <a href="#0"><strong>View all ({!! count($adventures) !!}) <i class="arrow_carrot-right"></i></strong></a>
                </section>
                <!-- /section -->
            </div>
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container container-custom margin_80_55">
                    <div class="main_title_2">
                        <h2>Plan Your Trip Easly</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row adventure_feat">
                        <div class="col-md-4">
                            <img src="/frontend/img/adventure_icon_1.svg" alt="" width="75" height="75">
                            <h3>Itineraries studied in detail</h3>
                            <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/frontend/img/adventure_icon_2.svg" alt="" width="75" height="75">
                            <h3>Room and food included</h3>
                            <p>His in harum errem dissentias, has mutat facilisi ea, ubique possim praesent eum ea.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/frontend/img/adventure_icon_3.svg" alt="" width="75" height="75">
                            <h3>Everything organized</h3>
                            <p>In ridens tamquam argumentum usu, ne ludus intellegebat vix. Eu inani omnes usu, an pri errem mucius.</p>
                        </div>
                    </div>
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->

            <div class="call_section adventure">
                <div class="container clearfix">
                    <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                        <div class="block-reveal">
                            <div class="block-vertical"></div>
                            <div class="box_1">
                                <h3>Enjoy a GREAT travel with us</h3>
                                <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                                <a href="#0" class="btn_1 rounded">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/call_section-->
        </main>
        <!-- /main -->


        <!--/footer-->
    </div>
    <!-- page -->


    <div id="toTop"></div><!-- Back to top button -->

@endsection

@section('custom_js')
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/video_header.js"></script>
    <script>
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: true
        });
    </script>
    <script src="js/modernizr.js"></script>

@endsection
