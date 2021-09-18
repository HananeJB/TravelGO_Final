@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')
<main>
    <section class="slider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="/frontend/img/alexander-kaunas-TAgGZWz6Qg8-unsplash.jpg" alt="">
                    <div class="meta">
                        <h3>Bangkok, A city that never stays the same</h3>
                        <div class="info">
                            <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                        </div>
                        <a href="#0" class="btn_1">Read more</a>
                    </div>
                </li>
                <li>
                    <img src="/frontend/img/pexels-asad-photo-maldives-1591373.jpg" alt="">
                    <div class="meta">
                        <h3>Dubai, The most attractive destination</h3>
                        <div class="info">
                            <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                        </div>
                        <a href="#0" class="btn_1">Read more</a>
                    </div>
                </li>
                <li>
                    <img src="/frontend/img/flex_slides/pexels-thanakorn-phanthura-3183613.jpg" alt="">
                    <div class="meta">
                        <h3>Cairo, Traditions and culture</h3>
                        <div class="info">
                            <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                        </div>
                        <a href="#0" class="btn_1">Read more</a>
                    </div>
                </li>
                <li>
                    <img src="/frontend/img/flex_slides/slide_4.jpg" alt="">
                    <div class="meta">
                        <h3>Nassau, Unique beaches and horizons</h3>
                        <div class="info">
                            <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                        </div>
                        <a href="#0" class="btn_1">Read more</a>
                    </div>
                </li>
                <li>
                    <img src="/frontend/img/flex_slides/slide_5.jpg" alt="">
                    <div class="meta">
                        <h3>Rome, The Eternal City</h3>
                        <div class="info">
                            <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                        </div>
                        <a href="#0" class="btn_1">Read more</a>
                    </div>
                </li>
            </ul>
            <div id="icon_drag_mobile"></div>
        </div>
        <div id="carousel_slider_wp">
            <div id="carousel_slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/frontend/img/flex_slides/slide_1_thumb.jpg" alt="">
                        <div class="caption">
                            <h3>Bangkok <span>Thailand</span></h3>
                            <small>$75 per person</small>
                        </div>
                    </li>
                    <li>
                        <img src="/frontend/img/flex_slides/slide_2_thumb.jpg" alt="">
                        <div class="caption">
                            <h3>Dubai <span>Emirates</span></h3>
                            <small>$75 per person</small>
                        </div>
                    </li>
                    <li>
                        <img src="/frontend/img/flex_slides/slide_3_thumb.jpg" alt="">
                        <div class="caption">
                            <h3>Cairo <span>Egypt</span></h3>
                            <small>$45 per person</small>
                        </div>
                    </li>
                    <li>
                        <img src="/frontend/img/flex_slides/slide_4_thumb.jpg" alt="">
                        <div class="caption">
                            <h3>Nassau <span>Bahamas</span></h3>
                            <small>$85 per person</small>
                        </div>
                    </li>
                    <li>
                        <img src="/frontend/img/flex_slides/slide_5_thumb.jpg" alt="">
                        <div class="caption">
                            <h3>Rome <span>Italy</span></h3>
                            <small>$75 per person</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="search_container">
        <div class="container">
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
        </div>
    </div>
    <!-- /search_container -->

    <div class="container container-custom margin_60_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Our Popular Tours</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Historic</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Arc Triomphe</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$54</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Churches</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Notredam</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$124</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Historic</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Versailles</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$25</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Historic</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Versailles</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$25</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Museum</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Pompidue Museum</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$45</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 2h 30min</li>
                        <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="/frontend/img/tour_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Walking</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Tour Eiffel</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$65</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
        </div>
        <!-- /carousel -->
        <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">View all Tours</a></p>
        <hr class="large">
    </div>

    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h3>News and Events</h3>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="/frontend/img/news_home_1.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="/frontend/img/news_home_2.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Jhon Doe</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="/frontend/img/news_home_3.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Luca Robinson</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="/frontend/img/news_home_4.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Paula Rodrigez</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->

    <div class="call_section">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Enjoy a GREAT travel with us</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                        <a href="/about" class="btn_1 rounded">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->
</main>
<!-- /main -->
@endsection
