<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/reset.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/lib/bootstrap/css/bootstrap.min.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/lib/font-awesome/css/font-awesome.min.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/lib/owl.carousel/owl.carousel.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/lib/jquery-ui/jquery-ui.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/animate.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/global.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/option2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template3/assets/css/responsive.css') }} " />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    @yield('style')
    <title>Juan Merkado</title>
</head>
<body class="option2">

    <!-- header -->
    <header id="header">
        <div class="container">
            <!-- main header -->
            <div class="row">
                <div class="main-header">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('images/juanmerkado.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-header-banner">
                            <div class="block block-header-right">
                                <ul class="list-link">
                                    <li class="item">
                                        <a href="#">
                                            <span class="icon phone"></span>
                                            <span class="line1">Call us:<br><strong>0904567823</strong></span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="wishlist.html">
                                            <span class="icon wish-list"></span>
                                            <span class="line1">Wish<br><strong>List</strong></span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="{{ url('home2/login') }}">
                                            <span class="icon login"></span>
                                            <span class="line1">Login<br><strong>Facebook  Twitter</strong></span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="checkout.html">
                                            <span class="icon checkout"></span>
                                            <span class="line1">Checkout<br><strong>Order</strong></span>
                                        </a>
                                    </li>
                                    <li class="item item-cart block-wrap-cart">
                                        <a href="cart.html">
                                            <span class="icon cart"></span>
                                            <span class="line1">Shopping Cart<br><strong>$0.00</strong></span>
                                        </a>
                                        <div class="block-mini-cart">
                                            <div class="mini-cart-content">
                                            <h5 class="mini-cart-head">2 Items in my cart</h5>
                                            <div class="mini-cart-list">
                                                <ul>
                                                    <li class="product-info">
                                                        <div class="p-left">
                                                            <a href="#" class="remove_link"></a>
                                                            <a href="#">
                                                            <img class="img-responsive" src="{{ asset('template3/data/p1.jpg') }}" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="p-right">
                                                            <p class="p-name">Donec Ac Tempus</p>
                                                            <p class="product-price">$139.98</p>
                                                            <p>Qty: 1</p>
                                                        </div>
                                                    </li>
                                                    <li class="product-info">
                                                        <div class="p-left">
                                                            <a href="#" class="remove_link"></a>
                                                            <a href="#">
                                                            <img class="img-responsive" src="{{ asset('template3/data/p2.jpg') }}" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="p-right">
                                                            <p class="p-name">Donec Ac Tempus</p>
                                                            <p class="product-price">$139.98</p>
                                                            <p>Qty: 1</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                </div>
                                                <div class="toal-cart">
                                                    <span>Total</span>
                                                    <span class="toal-price pull-right">$279.96</span>
                                                </div>
                                                <div class="cart-buttons">
                                                    <a href="checkout.html" class="button-radius btn-check-out">Checkout<span class="icon"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./main header -->
        </div>
		<!-- main menu-->

        @yield('content')
       <!-- footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="block footer-block-box">
                                <div class="block-head">
                                    <div class="block-title">
                                        <div class="block-icon">
                                            <img src="{{ asset('template3/data/location-icon.png') }}" alt="store icon">
                                        </div>
                                        <div class="block-title-text text-lg">Where do you want to shop?</div>
                                    </div>
                                </div>
                                <div class="block-inner">
                                    <div class="block-info clearfix">
                                        Enter your locations near you!
                                    </div>
                                    <div class="block-input-box box-radius clearfix">
                                        
                                            <input type="text" class="input-box-text" placeholder="Enter location">
                                            <button class="block-button">Go</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="block footer-block-box">
                                <div class="block-head">
                                    <div class="block-title">
                                        <div class="block-icon">
                                            <img src="{{ asset('template3/data/email-icon.png') }}" alt="store icon">
                                        </div>
                                        <div class="block-title-text text-sm">SUBSCRIBE TO</div>
                                        <div class="block-title-text text-lg">edo shop EMAILS</div>
                                    </div>
                                </div>
                                <div class="block-inner">
                                    <div class="block-info clearfix">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </div>
                                    <div class="block-input-box box-radius clearfix">
                                        <input type="text" class="input-box-text" placeholder="Email address">
                                        <button class="block-button">Go</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="block footer-block-box">
                                <div class="block-head">
                                    <div class="block-title">
                                        <div class="block-icon">
                                            <img src="{{ asset('template3/data/partners-icon.png') }} " alt="store icon">
                                        </div>
                                        <div class="block-title-text text-sm">our</div>
                                        <div class="block-title-text text-lg">partners</div>
                                    </div>
                                </div>
                                <div class="block-inner">
                                    <div class="block-owl">
                                        <ul class="kt-owl-carousel list-partners" data-nav="true" data-autoplay="true" data-loop="true" data-items="1">
                                            <li class="partner"><a href="#"><img src="{{ asset('template3/data/partner1.jpg') }} " alt="partner"></a></li>
                                            <li class="partner"><a href="#"><img src="{{ asset('template3/data/partner2.jpg') }}" alt="partner"></a></li>
                                            <li class="partner"><a href="#"><img src="{{ asset('template3/data/partner3.jpg') }}" alt="partner"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul class="list-link">
                                    <li class="head"><a href="#">Buyer Central</a></li>
                                    <li><a href="#">Sign in</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Buyer Protection</a></li>
                                    <li><a href="#">Payment Options</a></li>
                                    <li><a href="#">EMI Payment</a></li>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul class="list-link">
                                    <li class="head"><a href="#">Merchant Central</a></li>
                                    <li><a href="#">Merchant Sign In</a></li>
                                    <li><a href="#">Merchant Registration</a></li>
                                    <li><a href="#">How Does It Work</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Fulfillment by ShopClues</a></li>
                                    <li><a href="#">Merchant Tools</a></li>
                                    <li><a href="#">Best Practice</a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul class="list-link">
                                    <li class="head"><a href="#">Information</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Band of Trust</a></li>
                                    <li><a href="#">ShopClues History</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">In the Press</a></li>
                                    <li><a href="#">Awards New</a></li>
                                    <li><a href="#">Careers</a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul>
                                    <li class="head"><a href="#">Contact Us</a></li>
                                    <li><a href="#">Customer Support</a></li>
                                    <li><a href="#">Merchant Support</a></li>
                                    <li><a href="#">Merchant Inquiries</a></li>
                                    <li><a href="#">Product Reviews</a></li>
                                    <li><a href="#">Brand Inquiries</a></li>
                                    <li><a href="#">Bulk Orders</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul class="list-link">
                                    <li class="head"><a href="#">help</a></li>
                                    <li><a href="#">See all Help</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">FAQs</a></li>
                                 </ul>
                                 <ul>
                                    <li class="head"><a href="#">OTHER SERVICES</a></li>
                                    <li><a href="#">Market America Gear</a></li>
                                    <li><a href="#">Apply for Market</a></li>
                                    <li><a href="#">America Credit Card</a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 block-link-wapper">
                            <div class="block-link">
                                <ul class="list-link flag">
                                    <li class="head"><a href="#">INTERNATIONAL SHOPPING</a></li>
                                    <li><a href="#"><img src="{{ asset('template3/data/flag1.png') }} " alt="flang">Customer Support</a></li>
                                    <li><a href="#"><img src="{{ asset('template3/data/flag2.png') }} " alt="flang">Canada</a></li>
                                    <li><a href="#"><img src="{{ asset('template3/data/flag3.png')}}" alt="flang">Mexico</a></li>
                                    <li><a href="#"><img src="{{ asset('template3/data/flag4.png') }}" alt="flang">United Kingdom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-social">
            <div class="container">
                <div class="row">
                    <div class="block-social">
                        <ul class="list-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pied-piper"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <div class="block-payment">
                        <ul class="list-logo">
                            <li><a href="#"><img src="{{ asset('template3/data/payment1.png') }}" alt="Payment Logo"></a></li>
                            <li><a href="#"><img src="{{ asset('template3/data/payment2.png') }}" alt="Payment Logo"></a></li>
                            <li><a href="#"><img src="{{ asset('template3/data/payment3.png') }}" alt="Payment Logo"></a></li>
                            <li><a href="#"><img src="{{ asset('template3/data/payment4.png') }}" alt="Payment Logo"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="block-coppyright">
                        © 2015 Edo Demo Store. All Rights Reserved.
                    </div>
                    <div class="block-shop-phone">
                        Shop by phone <strong>1-899-353-2268</strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./footer -->
    <a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/jquery/jquery-1.11.2.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/bootstrap/js/bootstrap.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/jquery.bxslider/jquery.bxslider.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/owl.carousel/owl.carousel.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/jquery-ui/jquery-ui.min.js') }} "></script>
    <!-- COUNTDOWN -->
    <script type="text/javascript" src="{{ asset('template3/assets/lib/countdown/jquery.plugin.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/lib/countdown/jquery.countdown.js') }} "></script>
    <!-- ./COUNTDOWN -->
    <script type="text/javascript" src="{{ asset('template3/assets/js/jquery.actual.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('template3/assets/js/script.js') }} "></script>
</body>
</html>