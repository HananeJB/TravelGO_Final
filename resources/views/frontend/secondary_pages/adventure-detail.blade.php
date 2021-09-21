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



<div id="page" class="theia-exception">


    <!-- /header -->

    <main>
        <section class="hero_in adventure_detail">
            <div class="wrapper opacity-mask" style="background-image: url('/images/{{$adventure->cover}}'); background-size: cover;" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="main_info">
                        <div class="row">
                            <div class="col-lg-4">
                                @php
                                    $date1 = new DateTime($adventure->stardate) ;
                                    $date2 = new DateTime($adventure->enddate);
                                    $interval = $date1->diff($date2);
                                @endphp
                                <div class="d-flex align-items-center justify-content-between mb-3"><em>{!! $interval->days !!} Day Trip</em><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div>
                                <h1>{{$adventure->title}}</h1>

                                @foreach ($city as $city)
                                    <p>{{ $city->title }}, {{ $city->country }} </p>
                                @endforeach

                            </div>
                            <div class="col-lg-8">
                                <div class="pl-lg-4">
                                    <h3>{{$adventure->small_description}}</h3>
                                    <ul>
                                        <li><i class="pe-7s-clock"></i>Duration <span>3 days</span></li>
                                        <li><i class="pe-7s-graph3"></i>Activity level <span>{{$adventure->level}}</span></li>
                                        <li><i class="pe-7s-shopbag"></i>Includes <span>Equipment, Drinks, Accommodations, Food</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /main_info -->
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div><h6 class="m-0">From {{$adventure->price}} MAD per person</h6></div>
                        <div><a class="aside-panel-bt btn_1" href="#0">See dates</a></div>
                    </div>
                </div>
            </nav>
            <div class="container margin_60_35 adventure_description">
                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>What you'll do</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <p>
                                {{$adventure->description}}
                            </p>
                            <h6>Pictures from our users</h6>
                            <div class="pictures magnific-gallery clearfix">
                                @foreach($adventure->images as $img)
                                <figure><a href="/images/{{ $img->name }}" title="Photo title" data-effect="mfp-zoom-in"><img src="/images/{{ $img->name }}" style="width: 250px; height: 250px;" alt=""></a></figure>
                                @endforeach
                                <figure><a href="/images/{{ $adventure->name}}" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">{!! count($image) !!}</span>

                                        <img src="{{$adventure->cover}}" alt=""></a></figure>
                            </div>
                            <!-- /pictures -->
                        </div>
                    </div>
                </div>
                <!-- /row -->

                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>What's included</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <ul class="list_feat clearfix">
                                <li>
                                    <figure><img src="/frontend/img/icon_included_1.svg" alt=""></figure>
                                    <h4>Food</h4>
                                    <p>1 breakfast, 1 dinner, snacks</p>
                                </li>
                                <li>
                                    <figure><img src="/frontend/img/icon_included_2.svg" alt=""></figure>
                                    <h4>Drinks</h4>
                                    <p>Water, Beer</p>
                                </li>
                                <li>
                                    <figure><img src="/frontend/img/icon_included_3.svg" alt=""></figure>
                                    <h4>Equipment</h4>
                                    <p>Sports equipment, other</p>
                                </li>
                                <li>
                                    <figure><img src="/frontend/img/icon_included_4.svg" alt=""></figure>
                                    <h4>Accommodation</h4>
                                    <p>Bed and breakfast</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->

                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>Your itinerary</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <div class="timeline">
                                @php
                                    $i=0;
                                    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                                @endphp
                                @foreach($adventure->days as $day)
                                <div class="mb-5">
                                    <h3>Day {!! $f->format($i++) !!} - {{$day->title}}</h3>
                                    <figure><img src="/Storage::{{$day->image}};" class="img-fluid" alt=""></figure>

                                    <p>{{$day->description}}</p>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->


                <div class="row">
                    <div class="col-lg-4 fixed_title">
                        <h2>Reviews</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <div class="reviews-container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="review_summary">
                                            <strong>8.5</strong>
                                            <em>Superb</em>
                                            <small>Based on 4 reviews</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <hr>

                            <div class="reviews-container">

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/frontend/img/avatar1.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Admin – April 03, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/frontend/img/avatar2.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Ahsan – April 01, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/frontend/img/avatar3.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Sara – March 31, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                            </div>
                            <!-- /review-container -->
                        </div>
                    </div>
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5">
                    <p><img src="/frontend/img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
                    <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                    <div class="follow_us">
                        <ul>
                            <li>Follow us</li>
                            <li><a href="#0"><i class="ti-facebook"></i></a></li>
                            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#0"><i class="ti-google"></i></a></li>
                            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#0"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto">
                    <h5>Useful links</h5>
                    <ul class="links">
                        <li><a href="about.html">About</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="blog.html">News &amp; Events</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                        <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@Panagea.com</a></li>
                    </ul>
                    <div id="newsletter">
                        <h6>Newsletter</h6>
                        <div id="message-newsletter"></div>
                        <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <input type="submit" value="Submit" id="submit-newsletter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li>
                            <div class="styled-select" id="lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select" id="currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="/frontend/img/cards_all.svg" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© 2019 Panagea</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->

    <div id="panel_dates" class="menu_fixed">
        <a class="aside-panel-bt" href="#0"><i class="icon_close"></i></a>
        <div class="box_detail booking">
            <h5>Available Dates</h5>
            <p>Idque vocibus pri et, ea soleat option tincidunt eos. Usu ad erat utamur fabellas, eu nisl iusto deserunt has. </p>
            <div class="form-group" id="input_date">
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
            <a href="cart-1.html" class=" add_top_30 btn_1 full-width purchase">Book now</a>
            <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
            <div class="text-center"><small>No money charged in this step</small></div>
        </div>
        <!-- /box_detail booking -->
        <div class="additional_txt">
            <h6>Cancellation policy</h6>
            <p>Has vidit dicant cu, vel ad nullam debitis offendit. Ea veri elaboraret usu.</p>
            <p>ulla fierent honestatis te mea, ei sea nibh accumsan consulatu. Est tale minimum ei, quaeque delectus scribentur et quo.</p>
        </div>
    </div>
    <div class="layer"></div><!-- /Overlay mask -->
    <!-- panel_dates -->

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

@endsection

@section('custom_js')
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts.js"></script>
<script src="js/main.js"></script>
<script src="assets/validate.js"></script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map_single_tour.js"></script>
<script src="js/infobox.js"></script>

<!-- DATEPICKER  -->
<script>
    $('input[name="dates"]').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        parentEl:'#input_date',
        "linkedCalendars": false,
        "showCustomRangeLabel": false
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script>

<!-- INPUT QUANTITY  -->
<script src="js/input_qty.js"></script>

@endsection
