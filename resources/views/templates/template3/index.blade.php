<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Juan Merkado</title>
    <link rel='stylesheet' href="{{ asset('template3/assets/css/template3.css') }}">
   
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>
    <div id="app">
    <header class="header header-style1">
        <div class="header-top">
            <div class="container">
                <h5>future in your hand</h5>
                <p>Enjoy the beautiful life with your family supply</p>
                <a href="#" class="button orange">View Now</a>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="header-mid-left">
                    <p class="wellcome-to">Wellcome to Super Market</p>
                    <p class="register-or-login">
                        <a href="#" class="register">Register</a>
                        or
                        <a href="#" class="login" @click="showLogin">Login</a>
                    </p>
                </div>
                <div class="header-mid-right">
                    <div class="header-mid-right-content">
                        <a href="{{ url('dashboard') }}">
                            <i class="flaticon-user-outline"></i>
                            @include('templates.template3.sub-views.user-name')                            
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-like"></i>
                            My Wishlist
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-check-square"></i>
                            Check Out
                        </a>
                    </div>
                    <div class="header-mid-right-content country-select-menu">
                        <div class="country-select">
                            <div class="country select">
                                <img src="{{ asset('template3/assets/images/flag.jpg') }} " alt="flag" width="24" height="17">
                                English
                            </div>
                            <div class="country-dropdown">
                                <div class="country">
                                    <img src="{{ asset('template3/assets/images/flag2.jpg') }}" alt="flag" width="24" height="17">
                                    Hungary
                                </div>
                                <div class="country">
                                    <img src="{{ asset('template3/assets/images/flag3.jpg') }} " alt="flag" width="24" height="17">
                                    German
                                </div>
                                <div class="country">
                                    <img src="{{ asset('template3/assets/images/flag4.jpg')}} " alt="flag" width="24" height="17">
                                    French
                                </div>
                                <div class="country">
                                    <img src="{{ asset('template3/assets/images/flag5.jpg') }} " alt="flag" width="24" height="17">
                                    Canada
                                </div>
                                <div class="country">
                                    <img src="{{ asset('template3/assets/images/flag6.jpg') }}" alt="flag" width="24" height="17">
                                    Australia
                                </div>
                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="header-mid-right-content money-select-menu">
                        <div class="money-select">
                            <div class="money select">
                                USD
                            </div>
                            <div class="money-dropdown">
                                <div class="money">
                                    EGP
                                </div>
                                <div class="money">
                                    EURO
                                </div>
                                <div class="money">
                                    USD
                                </div>

                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-left">
                    <h1 class="logo">
                        <a href="index.html">
                            <img src="{{ asset('images/juanmerkado.png') }}" alt="logo" width="245">
                        </a>
                    </h1>
                    <div class="header-search">
                        <form action="form.php" class="form form-search-header">
                            <select name="show-categories" id="show-categories">
                                <option value="all">All Categories</option>
                                @foreach($mainCategories as $maincategory)
                                    <option value="{{ $maincategory->id }}">{{ $maincategory->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" placeholder="Search...">
                            <button class="button-search"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-bottom-right">
                    <div class="header-bottom-right-content">
                        <a href="#">
                            <i class="flaticon-like"></i>
                            Favorites
                        </a>
                    </div>
                    <div class="header-bottom-right-content cart-menu-relative">
                        <div class="cart-menu">
                            <a href="#">
                                <i class="flaticon-commerce"></i>
                                Cart
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <p class="cart-amount">6</p>
                            </a>
                        </div>
                        <div class="cart-hover">
                            <div class="cart-hover-title">Your Products <span>Prices</span></div>
                            <ul class="list-hover-cart">
                                <li class="hover-cart-item">
                                    <a href="#" class="img-hover-cart">
                                        <img src="{{ asset('template3/assets/images/img-hover-cart.jpg') }}" alt="img-hover-cart" width="75" height="89">
                                        <span class="delete-product-hover-cart"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="text-hover-cart">
                                        <a href="#" class="name-hover-cart">Men's Skagen Watch
                                            Vesion 2.0</a>
                                        <div class="quantity">
                                            <p class="quanlity-hover-cart">Quanlity: <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="price-hover-cart">$150</div>
                                </li>
                            </ul>
                            <div class="subtotal-hover-cart">Subtotal <span>$150</span></div>
                            <div class="button-cart-hover">
                                <a href="#" class="go-to-cart button">Go to cart</a>
                                <a href="#" class="check-out button orange">Check Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.template3.sub-views.primary-menu', [

            'mainCategories' => $mainCategories
        ])
    </header>
    <div class="banner banner-home banner-home1">
        <div class="supermartket-owl-carousel" data-number="1" data-margin="0" data-navcontrol="yes" data-dots="yes">
            <div class="banner-home1-content slide1">
                <div class="container">
                    <h3 class="wow fadeInRight" data-wow-delay="0.6s">The Victoria Grand Cuisine</h3>
                    <p class="sile-desc wow fadeInRight" data-wow-delay="0.6s">LG 4k UHD features 8.3 milion pixels and four times<br/>
                        the resolution of Full HD 1080p.</p>
                    <a class="button dark wow fadeInRight" data-wow-delay="0.6s" href="#">Shop Now</a>
                </div>
            </div>
            <div class="banner-home1-content slide2">
                <div class="container">
                    <h3>The Victoria Grand<br/>Cuisine</h3>
                    <p class="sile-desc">LG 4k UHD features 8.3 milion pixels<br/>
                        and four times the resolution. </p>
                    <a class="button" href="#">Shop Now</a>
                </div>
            </div>
            <div class="banner-home1-content slide3">
                <div class="container">
                    <h3>The Victoria Grand<br/>Cuisine</h3>
                    <p class="sile-desc">LG 4k UHD features 8.3 milion pixels <br/>and four times
                        the resolution</p>
                    <a class="button drak" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="container banner-absolutes">
            <div class="banner-absolute banner-asblute-right">
                <ul class="list-banner">
                    <li class="banner-item banner-item1">
                        <h5 class="banner-item-title">Sound</h5>
                        <p class="banner-item-desc">
                            Headphone<br/>CDs 4000
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                    <li class="banner-item banner-item2">
                        <h5 class="banner-item-title">Electrolux</h5>
                        <p class="banner-item-desc">
                            ECM3200 EasySense<br/>Vacuum cleaner
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                    <li class="banner-item banner-item3">
                        <h5 class="banner-item-title">Smartphone</h5>
                        <p class="banner-item-desc">
                            Solution for your<br/>Acer Smarphone
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End .banner -->
    <div class="main-content">
        <section id="section1">
            <div class="container">
                <!-- Feature Products Category-->
                <div class="feature-products-category product-tabs tabs-slide">
                    <h5 class="tab-title">Feature products</h5>
                    <ul  class="nav nav-pills">
                        <li class="active">
                            <a  href="#1a" data-toggle="tab">Accessories</a>
                        </li>
                        <li>
                            <a href="#2a" data-toggle="tab">Smartphone</a>
                        </li>
                        <li>
                            <a href="#3a" data-toggle="tab">Electronics</a>
                        </li>
                        <li>
                            <a href="#4a" data-toggle="tab">Watches & Shoes</a>
                        </li>
                    </ul>
                    <div class="product-tabs-content tab-content clearfix">
                        <div class="tab-pane active" id="1a">
                            <div class="featue-slide supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes" data-dots="yes">
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f1.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f2.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f1.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2a">
                            <div class="featue-slide supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg') }} " alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="3a">
                            <div class="featue-slide supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg')}}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }} " alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f4.jpg') }} " alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg') }} " alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="4a">
                            <div class="featue-slide supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f2.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f2.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f5.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <figure><a href="#"><img src="{{ asset('template3/assets/images/f3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                                        </div>
                                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                                        <p class="feature-slide-cost">From <span class="price">$168.00</span></p>
                                        <ul class="product-item-actions">
                                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .feature-products -->
            </div>
        </section>
        <section id="section2">
            <div class="container">
                <!-- Feature Products Category-->
                <div class="feature-products-category product-tabs">
                    <h5 class="tab-title">Smartphone</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="left-tab">
                                <figure>
                                    <img src="{{ asset('template3/assets/images/smartphone.jpg') }}" alt="smartphone" width="268" height="579">
                                    <div class="left-tab-asblute">
                                        <p>A Keyring Does It All!</p>
                                        <h2>Wonder<span>Cube</span></h2>
                                        <a class="button bg-666" href="#">Shop Now</a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul  class="nav nav-pills">
                                <li class="active"><a  href="#1b" data-toggle="tab">Samsung</a></li>
                                <li><a href="#2b" data-toggle="tab">Apple</a></li>
                                <li><a href="#3b" data-toggle="tab">Nokia</a></li>
                                <li><a href="#4b" data-toggle="tab">Oppo</a></li>
                            </ul>
                            <div class="product-tabs-content tab-content clearfix">
                                <div class="tab-pane active" id="1b">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/sm-small1.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/sm-small2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/sm-small3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <div><img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big"></div>
                                            <div><img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big"></div>
                                            <div><img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big"></div>
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="2b">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/sm-small2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/sm-small2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/sm-small3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="3b">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/sm-small2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/sm-small3.jpg') }} " alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/sm-small3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }} " alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="4b">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/sm-small1.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/sm-small2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/sm-small3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/sm-big.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section3">
            <div class="container">
                <!-- Product list -->
                <div class="product-list">
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/p1.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/p2.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/p3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/p4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/p5.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End .product-list -->
            </div>
        </section>
        <section id="section4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 padding-right5">
                        <div data-wow-delay="0.6s" class="banner-text wow zoomIn">
                            <figure><a href="#"><img alt="" src="{{ asset('template3/assets/images/banner-text1.jpg') }}"></a></figure>
                        </div>
                    </div>
                    <div class="col-sm-6 padding-left5">
                        <div data-wow-delay="0.6s" class="banner-text wow zoomIn">
                            <figure><a href="#"><img alt="" src="{{ asset('template3/assets/images/banner-text2.jpg') }}"></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section5">
            <div class="container">
                <!-- Feature Products Category-->
                <div class="feature-products-category product-tabs">
                    <h5 class="tab-title">Televisions & Monitor</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="left-tab">
                                <figure>
                                    <img src="{{ asset('template3/assets/images/television.jpg') }}" alt="television" width="268" height="579">
                                    <div class="left-tab-asblute">
                                        <h3>16 chic winter shades </h3>
                                        <span>To protect your eyes<br/>
                                            All winter  </span>
                                        <a class="button orange" href="#">Shop Now</a>
                                    </div>
                                </figure>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul  class="nav nav-pills">
                                <li class="active"><a  href="#1c" data-toggle="tab">ultra-sharp TV </a></li>
                                <li><a href="#2c" data-toggle="tab">Global 3D TV</a></li>
                                <li><a href="#3c" data-toggle="tab">curved TV</a></li>
                                <li><a href="#4c" data-toggle="tab">Flat Screen Television</a></li>
                            </ul>
                            <div class="product-tabs-content tab-content clearfix">
                                <div class="tab-pane active" id="1c">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/tv1.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/tv2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/tv3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="2c">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/tv2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/tv1.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/tv3.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="3c">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/tv3.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/tv2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/tv1.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                                <div class="tab-pane" id="4c">
                                    <!-- Slide show -->
                                    <div class="slide-thumbs slide-bx">
                                        <div class="thumbs">
                                            <a data-slide-index="0" href=""><img src="{{ asset('template3/assets/images/tv2.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="1" href=""><img src="{{ asset('template3/assets/images/tv3.jpg') }}" alt="sm-big"></a>
                                            <a data-slide-index="2" href=""><img src="{{ asset('template3/assets/images/tv1.jpg') }}" alt="sm-big"></a>
                                        </div>
                                        <div class="slide-container">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg') }}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg')}}" alt="sm-big">
                                            <img src="{{ asset('template3/assets/images/tv-big2.jpg')}}" alt="sm-big">
                                        </div>
                                    </div>
                                    <!-- ./Slide show -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .television -->
            </div>
        </section>
        <section id="section6">
            <div class="container">
                <!-- Product list -->
                <div class="product-list">
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t1.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t2.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t3.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t4.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t5.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t6.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t7.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t8.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t9.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-list-content">
                        <div class="product-media">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/t10.jpg') }}" alt="feature" width="200" height="238"></a></figure>
                        </div>
                        <a href="#" class="feature-slide-name">Beatvs Solo2 On-Ear</a>
                        <p class="feature-slide-cost"><span class="price">$168.00</span></p>
                        <ul class="product-item-actions">
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            <li><a href="#"><i class="flaticon-commerce"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="section7">
            <div class="container">
                <!-- Title block -->
                <div class="title-block title-block-style1">
                    <h5 class="title-left">Brand Sale</h5>
                </div>
                <!-- Title block -->
                <div class="brand-sale">
                    <div class="brand-sale-box row">
                        <div class="col-md-7">
                            <a href="#" class="brand-media"><img src="{{ asset('template3/assets/images/sale1.jpg') }}" alt="sale" width="649" height="269"></a>
                        </div>
                        <div class="col-md-5">
                            <div class="brand-sale-box-content">
                                <a href="#" class="brand-logo"><img src="{{ asset('template3/assets/images/sale-logo1.jpg') }}" alt="sale"></a>
                                <p class="sale-name">Sony Bravia Triluminos8</p>
                                <div class="sale-count">
                                    <del>$168.00</del>
                                    <span>$150.00</span>
                                </div>
                                <div class="sale-time">
                                    <i class="flaticon-timer"></i>
                                    <div class="block-title ">
                                        <div class="deals-of-countdown">
                                            <div class="count-down-time" data-countdown="2016/11/27 1:00:43"></div>
                                        </div>
                                    </div>
                                    <a class="orange" href="#">Shop Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brand-sale-box row">
                        <div class="col-md-7">
                            <a href="#" class="brand-media"><img src="{{ asset('template3/assets/images/sale2.jpg') }}" alt="sale" width="649" height="269"></a>
                        </div>
                        <div class="col-md-5">
                            <div class="brand-sale-box-content">
                                <a href="#" class="brand-logo"><img src="{{ asset('template3/assets/images/sale-logo2.png') }}" alt="sale"></a>
                                <p class="sale-name">Electroluxs Smartboost Premixes</p>
                                <div class="sale-count">
                                    <del>$168.00</del>
                                    <span>$150.00</span>
                                </div>
                                <div class="sale-time">
                                    <i class="flaticon-timer"></i>
                                    <div class="block-title ">
                                        <div class="deals-of-countdown">
                                            <div class="count-down-time" data-countdown="2016/12/27 12:22:12"></div>
                                        </div>
                                    </div>
                                    <a class="orange" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brand-sale-box row">
                        <div class="col-md-7">
                            <a href="#" class="brand-media"><img src="{{ asset('template3/assets/images/sale3.jpg') }}" alt="sale"></a>
                        </div>
                        <div class="col-md-5">
                            <div class="brand-sale-box-content">
                                <a href="#" class="brand-logo"><img src="{{ asset('template3/assets/images/sale-logo3.jpg') }}" alt="sale"></a>
                                <p class="sale-name">Sharp Smartboost Premixes</p>
                                <div class="sale-count">
                                    <del>$168.00</del>
                                    <span>$150.00</span>
                                </div>
                                <div class="sale-time">
                                    <i class="flaticon-timer"></i>
                                    <div class="block-title ">
                                        <div class="deals-of-countdown">
                                            <div class="count-down-time" data-countdown="2017/8/2 12:00:03"></div>
                                        </div>
                                    </div>
                                    <a class="orange" href="#">Shop Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brand-sale-box row">
                        <div class="col-md-7">
                            <a href="#"><img src="{{ asset('template3/assets/images/sale4.jpg') }}" alt="sale" width="649" height="269"></a>
                        </div>
                        <div class="col-md-5">
                            <div class="brand-sale-box-content">
                                <a href="#" class="brand-logo"><img src="{{ asset('template3/assets/images/sale-logo4.jpg') }}" alt="sale"></a>
                                <p class="sale-name">Griffin PowerDock for Moto X</p>
                                <div class="sale-count">
                                    <del>$168.00</del>
                                    <span>$150.00</span>
                                </div>
                                <div class="sale-time">
                                    <i class="flaticon-timer"></i>
                                    <div class="block-title ">
                                        <div class="deals-of-countdown">
                                            <div class="count-down-time" data-countdown="2018/8/8 12:09:14"></div>
                                        </div>
                                    </div>
                                    <a class="orange" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section8">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 padding-right5">
                        <div class="banner-text wow zoomIn" data-wow-delay="0.6s">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/banner-text.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="col-sm-6 padding-left5">
                        <div class="banner-text wow zoomIn" data-wow-delay="0.6s">
                            <figure><a href="#"><img src="{{ asset('template3/assets/images/banner-text3.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section9">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-umbrella"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>Buyer Protection</h4>
                                        <p>Secure payments
                                            Guaranteed refunds
                                            Escrow protection on every oder</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-return-of-investment"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>RETURN &amp; EXCHANGE</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-transport"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>FREE DELIVERY</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer has-border">
        <!-- Slide Logo -->
        <div id="section-logo-slide">
            <div class="container">
                <div class="logo-slide supermartket-owl-carousel" data-number="6" data-margin="30" data-navcontrol="yes">
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo1.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo2.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo3.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo4.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo5.jpg')}}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo6.jpg')}}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo3.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo2.jpg') }}" alt="logo" width="166" height="66"></a></div>
                    <div class="logo-slide-item"><a href="#"><img src="{{ asset('template3/assets/images/logo5.jpg') }}" alt="logo" width="166" height="66"></a></div>
                </div>
            </div>
        </div>
        <!-- End .logo-slide-->
        <div class="container">
            <hr class="supermartket-hr">
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6 has-logo">
                        <div class="footer-top-logo">
                            <h1 class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('template3/assets/images/logo.png') }}" alt="logo">
                                </a>
                            </h1>
                        </div>
                        <div class="footer-infomation">
                            <p><span>Address:</span>Example Street 68, Mahattan,
                                New York, USA</p>
                            <p><span>Phone:</span>+ 65 123 456 789</p>
                            <p><span>Email:</span><a href="#">Support@SuperMarket.com</a></p>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">About</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">About Us</a></li>
                            <li class="footer-item"><a href="#">Blog</a></li>
                            <li class="footer-item"><a href="#">Terms of Use</a></li>
                            <li class="footer-item"><a href="#">Privacy Policy</a></li>
                            <li class="footer-item"><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">Customer Service</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">Shipping Policy</a></li>
                            <li class="footer-item"><a href="#">Comoensation First</a></li>
                            <li class="footer-item"><a href="#">My Account</a></li>
                            <li class="footer-item"><a href="#">Return Policy</a></li>
                            <li class="footer-item"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">Products</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">My Order</a></li>
                            <li class="footer-item"><a href="#">My Wishlist</a></li>
                            <li class="footer-item"><a href="#">My Credit Slip</a></li>
                            <li class="footer-item"><a href="#">My Addresses</a></li>
                            <li class="footer-item"><a href="#">New In</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 tags-footer col-sm-6" >
                        <div class="footer-top-title"><h4 class="title-footer">Hottags</h4></div>
                        <ul class="tags footer-tags">
                            <li class="tags-item"><a href="#">Kingston</a></li>
                            <li class="tags-item"><a href="#">Android</a></li>
                            <li class="tags-item"><a href="#">Mini book</a></li>
                            <li class="tags-item"><a href="#">Mini USB</a></li>
                            <li class="tags-item"><a href="#">TMD</a></li>
                            <li class="tags-item"><a href="#">IPhone</a></li>
                            <li class="tags-item"><a href="#">PC Black</a></li>
                            <li class="tags-item"><a href="#">Sport</a></li>
                            <li class="tags-item"><a href="#">Flat</a></li>
                            <li class="tags-item"><a href="#">Shirts</a></li>
                            <li class="tags-item"><a href="#">Arrow Shirts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-mid">
                <div class="footer-mid-text">
                    <figure><img src="{{ asset('template3/assets/images/check.jpg') }}" alt="check" height="30" width="30"></figure>
                    <p>
                        Help improve your experience on SuperMarket,<span> join our Customer Experience Improvement Program now.
                        </span> Plus,<span>
                            tell us what you think of this page</span> !
                    </p>
                </div>
                <!--<figure><img src="assets/images/img-logo-footer.jpg" alt="img-footer" height="60" width="1170"></figure>-->
                <ul>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d1.jpg') }}" alt="d" width="46" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d2.jpg') }}" alt="d" width="51" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d3.jpg') }}" alt="d" width="60" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d4.jpg') }}" alt="d" width="44" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d5.jpg') }}" alt="d" width="42" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d6.jpg') }}" alt="d" width="85" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d7.jpg') }}" alt="d" width="89" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d8.jpg') }}" alt="d" width="92" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d9.jpg') }}" alt="d" width="65" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d10.jpg') }}" alt="d" width="91" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d11.jpg') }}" alt="d" width="96" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d12.jpg') }}" alt="d" width="64" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d13.jpg') }}" alt="d" width="131" height="41"></a></li>
                    <li><a href="#"><img src="{{ asset('template3/assets/images/d14.jpg') }}" alt="d" width="94" height="41"></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="menu-footer-bottom">
                    <li class="menu-footer-bottom-item"><a href="#">Promotions</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">My Orders</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Help</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Site Map</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Customer Service</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Most Populars</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Best Sellers</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">New Arrivals</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Special Products</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Manufacturers</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Our Stores</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Shipping</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Blog</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Refunds Terms & Conditions</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Policy</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Policy</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Shipping</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Returns</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Refunds</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Warrantee</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">FAQ</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Contact</a></li>
                </ul>
                <div class="copyright">
                    <i class="fa fa-copyright" aria-hidden="true"></i>
                    Copyright 2016 <a href="#">SuperMarket</a> All rights reserved.
                </div>
            </div>
        </div>
        <a href="#" class="backtotop ts-block"><span class="pulser"> Top</span></a>
    </footer>
        <modal v-model="loginShow" effect="zoom">
          <!-- custom header -->
          <div slot="modal-header" class="modal-header">
            <h3 class="modal-title text-center">
              Login to Juan Merkado
            </h3>
          </div>

          <div class="modal-body">

                <alert v-model="showAlertLogin" placement="top" duration="3000" type="danger" width="400px" dismissable>
                  <span class="fa fa-warning"></span>
                  <strong>Login Error</strong>
                  <br />
                  <p v-for="m in messages" style="margin-left: 10px;">@{{ m }}</p>
                </alert>

                <form id="login-form" action="{{ url('login') }}" method="post" role="form" style="display: block;">

                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" v-model="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                </div>
                <div class="form-group">
                    <input type="password" v-model="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                </div>
               
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

          </div>
          
          <!-- custom buttons -->
          <div slot="modal-footer" class="modal-footer">
            <button type="button" class="btn btn-default" @click="loginShow = false">Exit</button>
            <button type="button" class="btn btn-success" @click="LoginMethod">Login</button>
          </div>
        </modal>

    <!--end footer-->
    <!--end footer-->
      </div>
    <script type='text/javascript' src="{{ asset('template3/assets/js/template3.js') }}"></script>
   
 
</body>
</html>