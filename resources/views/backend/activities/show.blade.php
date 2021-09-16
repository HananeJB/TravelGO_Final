@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')
    <main>

        <!--/hero_in-->

        <div class="content-wrapper">
            <div class="box_general padding_bottom">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section id="description">
                            <h1>{{ $activity->title }}</h1>
                            <hr>
                            <h2>Description</h2>
                            <p> {{ $activity->description1 }}</p>
                            <p> {{ $activity->description2 }}</p>

                            <hr>

                            <h3>Program</h3>

                            <ul class="cbp_tmtimeline">
                                <li>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Interior of the cathedral</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu.
                                            Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_2.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Statue of Saint Reparata</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu.
                                            Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_3.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Huge clock decorated</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu.
                                            Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_4.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Vasari's fresco</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu.
                                            Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3>Adresse</h3>
                                    <p>{{ $activity->adresse }}</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3>City</h3>
                                    <p>city</p>

                                </div>
                                <div class="col-sm-4">
                                    <h3>Price</h3>
                                    <p> {{ $activity->price }}</p>

                                </div>
                            </div>


                            <!-- /row -->

                            <hr>

                            <h3>Images</h3>
                            <div class=" p-2">
                                <div class="col-md-4 p-2">
                                    <img src="img/blog-1.jpg">
                                </div>
                                <div class="col-md-4 p-2">
                                    <img src="img/blog-1.jpg">
                                </div>
                                <div class="col-md-4 p-2">
                                    <img src="img/blog-1.jpg">
                                </div>

                            </div>


                            <!-- End Map -->
                        </section>
                        <!-- /section -->


                        <!-- /section -->

                    </div>
                    <!-- /col -->


                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>


@endsection
