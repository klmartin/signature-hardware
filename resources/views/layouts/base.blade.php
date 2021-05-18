<!DOCTYPE html>
<html lang="eng">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Signature Hardware | Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="index.html">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" >

    <!-- StyleSheet -->

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- End Google Fonts-->

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" >
    <!-- Magnific Popup -->
    <link href="{{asset('css/magnific-popup.min.css')}}" rel="stylesheet" >
    <!-- Font Awesome -->
    <link  href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Fancybox -->
    <link  href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <!-- Themify Icons -->
    <link  href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <!-- Nice Select CSS -->
    <link  href="{{asset('css/niceselect.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link  href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Flex Slider CSS -->
    <link  href="{{asset('css/flex-slider.min.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link  href="{{asset('css/owl-carousel.css')}}" rel="stylesheet">
    <!-- Slicknav -->
    <link  href="{{asset('css/slicknav.min.css')}}" rel="stylesheet">
    @livewireStyles

    <!-- signature StyleSheet -->
    <link  href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link  href="{{asset('css/style.css')}}" rel="stylesheet">
    <link  href="{{asset('css/responsive.css')}}" rel="stylesheet">



</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">

                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @if(Route::has('login'))
                            @auth
                            @if(Auth::user()->utype == 'ADM')
                            //ADMIN
                            <li><i class="ti-location-pin"></i><a href="{{route('admin.categories')}}"> categories</li>
                            <li><i class="ti-location-pin"></i><a href="{{route('admin.products')}}"> Products</li>
                            <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                            <li><i class="ti-user"></i> <a href="{{route('admin.dashboard')}}">My account({{Auth::user()->name}})</a></li>
                             <li><i class="ti-power-off"></i>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" method="POST" action="{{(route('logout'))}}">
                                @csrf
                           </form>
                            @else
                            //user
                            <li><i class="ti-location-pin"></i> Store location</li>
                            <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                            <li><i class="ti-user"></i> <a href="{{route('user.dashboard')}}">My account({{Auth::user()->name}})</a></li>
                             <li><i class="ti-power-off"></i>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" method="POST" action="{{(route('logout'))}}">
                                @csrf
                           </form>

                            @endif


                            @else
                               <li><i class="ti-user"></i> <a href="{{route('register')}}">Register</a></li>
                               <li><i class="ti-power-off"></i><a href="{{route('login')}}" >Login</a></li>                            

                            @endif

 
                            @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">All Category</option>
                                <option>Machines</option>
                                <option>Tools</option>
                                <option>Sanitary & Roofing</option>
                                <option>Chemicals</option>
                            </select>
                            <form>
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="/cart">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                        <h4><a href="#">Water Pump</a></h4>
                                        <p class="quantity">1x - <span class="amount">300,000/=</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                        <h4><a href="#">Hammer</a></h4>
                                        <p class="quantity">1x - <span class="amount">20,000.00</span></p>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <a href="/checkout" class="btn animate">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="all-category">
                            <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                           <!--  <ul class="main-category">
                                <li><a href="#">Tools <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="sub-category">
                                        <li><a href="#"></a></li>
                                        <li><a href="#">hand tools</a></li>
                                        <li><a href="#">carpentry tools</a></li>
                                        <li><a href="#">paint tools</a></li>
                                        <li><a href="#">tool boxes</a></li>
                                        <li><a href="#">electric tools </a></li>
                                        <li><a href="#">cutting tools</a></li>
                                        <li><a href="#">automative tools</a></li>
                                        <li><a href="#">workshop tools </a></li>
                                        <li><a href="#">garden tools </a></li>
                                        <li><a href="#">home & sanitary </a></li>
                                    </ul>
                                </li>
                                <ul class="main-category">
                                    <li><a href="#">Machines <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#"></a></li>
                                            <li><a href="#">Genaral</a></li>
                                            <li><a href="#">Agricultural</a></li>
                                            <li><a href="#">Welding</a></li>
                                        </ul>
                                    </li> -->

                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#">Product</a></li>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="/shop">Shop</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="Aboutus.html">About<i class="ti-angle-down"></i></a>

                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->


<!-- middle part -->

{{$slot}}

<!-- End of Middle Part-->
<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="/"><img src="images/logo.png" alt="#"></a>
                        </div>
                        <p class="text">Importer of Automotive machine & tools, Distributor Of Makita Machine and Tools, and a wholesaler of other miscellaneous items.</p>
                        <p class="call">Got Question? Call us 24/7<span><a href="tel:+255752060500">+255(0) 752 060 500</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>Signature Hardware, Kariakoo Lindi & Sikukuu Streetl, Dar es Salaam.
                                <li>info@signaturehardware.com</li>
                                <li>+255(0) 752 060 500</li>
                                <li>+255(0) 712 222 444</li>

                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="https://www.instagram.com/signature_hardware_dsm_tz/?hl=en"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2021 <a href="http://www.signaturehardware.co.tz" target="_blank">Signature Hardware</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('js/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('js/active.js')}}"></script>
@livewireScripts
     <!-- modal javascript-->
                                            <script>
                                                $(document).ready(function(){
                                                    $("#myBtn").click(function(){
                                                        $("#myModal").modal();
                                                    });
                                                });
                                            </script>
                                            
</body>
</html>
