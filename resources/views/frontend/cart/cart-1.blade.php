@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')
    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Your cart</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">Payment</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box_cart">
                            <table class="table table-striped cart-list">
                                <thead>
                                <tr>
                                    <th>
                                        Item
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Qty
                                    </th>
                                    <th>
                                        Guests
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $row)
                                <tr>
                                    <td>
                                        <div class="thumb_cart">
                                            <img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_1.jpg" alt="Image">
                                        </div>
                                        <span class="item_cart">{{ $row->name }}</span>
                                    </td>
                                    <td>
                                        <strong>{{ $row->price }} Dhs</strong>
                                    </td>
                                    <td>
                                        {{ $row->qty }}
                                    </td>
                                    <td>
                                        {{ $row->options->num_adults ?? '' }} Adult(s) and
                                        {{ $row->options->num_childrens ?? '' }} Children(s)
                                    </td>
                                    <td>
                                        <strong>{{ $row->total }} Dhs</strong>
                                    </td>
                                    <td class="options" style="width:5%; text-align:center;">
                                        <form action="/cartdestroy" method="post">
                                            @csrf
                                            <input name="rowId" value="{{ $row->rowId }}" type="hidden">
                                            <a href="javascript:;" onclick="parentNode.submit();"><i class="icon-trash"></i></a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail">
                            <div id="total_cart">
                                Total <span class="float-right">{{ $total }}</span>
                            </div>
                            <ul class="cart_details">
                                <li>From <span>02-11-18</span></li>
                                <li>To <span>04-11-18</span></li>
                            </ul>
                            <a href="cart-2.html" class="btn_1 full-width purchase">Checkout</a>
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
@endsection
