@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')

    <main>
        <section class="hero_in tours_detail" >
            <div class="wrapper"  style="background-image: url('/images/{{$activity->cover}}'); background-size: cover; " >
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Tour detail page</h1>
                </div>
                <span class="magnific-gallery">
                        <a href="/images/{{$activity->cover}}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
                     @foreach($activity->images as $image)
                        <a href="/images/{{ $image->name}}" title="Photo title" data-effect="mfp-zoom-in"></a>
                    @endforeach
				</span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">
                            <h2>Description</h2>
                            <p>{{ $activity->description1 }}</p>
                            <p>{{ $activity->description2 }}</p>

                            <hr>

                            <h3>Program </h3>
                            <p>
                                {{ $activity->program }}
                            </p>
                            <ul class="cbp_tmtimeline">
                                @php
                                    $i=0;
                                @endphp
                                @foreach($activity->days as $day)
                                <li>

                                    <div class="cbp_tmicon">
                                        @php
                                            $i++;
                                        @endphp
                                        {!! $i !!}
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>{{$day->day_title}}</h4>
                                        <p>
                                            {{$day->day_description}}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <span>{{ $activity->price }}$ <small>person</small></span>
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" name="dates" placeholder="When..">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="panel-dropdown">
                                <a href="#">Guests <span class="qtyTotal">1</span></a>
                                <div class="panel-dropdown-content right">
                                    <div class="qtyButtons">
                                        <label>Adults</label>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Childrens</label>
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div>
                            </div>
                            <a href="cart-1.html" class="btn_1 full-width purchase">Purchase</a>
                            <div class="text-center"><small>No money charged in this step</small></div>
                        </div>

                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection
