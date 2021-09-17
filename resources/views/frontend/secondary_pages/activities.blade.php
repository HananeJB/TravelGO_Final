@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')

    <main>

        <section class="hero_in tours">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Paris tours list</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="filters_listing sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <div class="switch-field">
                            <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
                            <label for="all">All</label>
                            <input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
                            <label for="popular">Popular</label>
                            <input type="radio" id="latest" name="listing_filter" value="latest" data-filter=".latest">
                            <label for="latest">Latest</label>
                        </div>
                    </li>
                    <li>
                        <div class="layout_view">
                            <a href="tours-grid-isotope.html"><i class="icon-th"></i></a>
                            <a href="#0" class="active"><i class="icon-th-list"></i></a>
                        </div>
                    </li>
                    <li>
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60_35">
            <div class="col-lg-12">
                <div class="row no-gutters custom-search-input-2 inner">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="What are you looking for...">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Where">
                            <i class="icon_pin_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="wide">
                            <option>All Categories</option>
                            <option>Churches</option>
                            <option>Historic</option>
                            <option>Museums</option>
                            <option>Walking tours</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <input type="submit" class="btn_search" value="Search">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /custom-search-input-2 -->
            <div class="isotope-wrapper">
                <div class="box_list isotope-item popular">
                    @foreach ($activities as $activity)
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <small>Historic</small>
                                <a href='/activities/details/{{$activity->id}}'><img src="/frontend/img/tour_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <h3><a href='activities/details/{{$activity->id}}'>{{ $activity->title }}</a></h3>
                                <p>{{ $activity->description1 }}</p>
                                <span class="price">From <strong>{{ $activity->price }}</strong> /per person</span>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /box_list -->

                <!-- /box_list -->

                <!-- /box_list -->

                <!-- /box_list -->

                <!-- /box_list -->
            </div>
            <!-- /isotope-wrapper -->

            <p class="text-center add_top_30"><a href="#0" class="btn_1 rounded">Load more</a></p>

        </div>
        <!-- /container -->
        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-help2"></i>
                            <h4>Need Help? Contact us</h4>
                            <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-wallet"></i>
                            <h4>Payments and Refunds</h4>
                            <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-note2"></i>
                            <h4>Quality Standards</h4>
                            <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection
