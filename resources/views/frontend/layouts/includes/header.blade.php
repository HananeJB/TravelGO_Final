<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="/">
            <img src="/frontend/img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
            <img src="/frontend/img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        @guest
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        @endguest
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0">Home</a></span></li>
            <li><span><a href="#0">Activities</a></span></li>
            <li><span><a href="#0">Hotels</a></span></li>
            <li><span><a href="#0">Restaurants</a></span></li>
            <li><span><a href="#0">Tours</a></span></li>
            <li><span><a href="#0">Adventure</a></span></li>
            <li><span><a href="#0">Contact Us</a></span></li>
            @auth
                <li><span><a href="#0" style="text-transform: capitalize;">{{ Auth::user()->name }}</a></span>
                    <ul>
                        <li><a href="index.html">Mon profil</a></li>
                        <li><a href="index-2.html">Espace client</a></li>
                    </ul>
                </li>
            @endauth
        </ul>
    </nav>

</header>
<!-- /header -->
