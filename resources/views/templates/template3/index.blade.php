@extends('templates.template3.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <!-- Block vertical-menu -->
                    <div class="block block-vertical-menu">
                        <div class="vertical-head">
                            <h5 class="vertical-title">Merchants</h5>
                        </div>
                        <div class="vertical-menu-content">
                            <ul class="vertical-menu-list">

                                    <li class="ef4896"><a href="#"><img class="icon-menu" alt="Funky roots" src=""></a>
                                        <div class="vertical-dropdown-menu">
                                            <div class="vertical-groups col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="block-content-vertical-menu">
                                                            <h3 class="head" style="text-align: center;"></h3>
                                                            <div class="inner">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="row mega-products">

                                                                <div class="col-sm-4 mega-product">
                                                                    <div class="product-avatar">
                                                                        <a href="#"><img src="" alt"></a>
                                                                    </div>
                                                                    <div class="product-name">
                                                                        <a href="#"> </a>
                                                                    </div>
                                                                    <div class="price-box">
                                                                        <span class="product-price"></span>
                                                                        <span class="product-price-old">$169.00</span>
                                                                    </div>
                                                                    <div class="product-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </div>
                                                                </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- ./Block vertical-menu -->
                </div>
                <!-- block search -->
                <div class="col-sm-5 col-md-7">
                    <div class="advanced-search box-radius">
                        <form class="form-inline">
                            <div class="form-group search-category">
                                <select id="category-select" class="search-category-select">
                                    <option value="1">All Categories</option>
                                    <option value="2">Men</option>
                                    <option value="3">Women</option>
                                </select>
                            </div>
                            <div class="form-group search-input">
                                <input type="text" placeholder="What are you looking for?">
                            </div>
                            <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- ./block search -->
                <!-- block cl-->
                <div class="col-sm-4 col-md-3 wrap-block-cl">
                    <div class="inner-cl box-radius">
                        <div class="dropdown language">
                          <a data-toggle="dropdown" role="button"><img src="" alt="languae">English</a>
                          <ul class="dropdown-menu">
                                <li><a href="#"><img src="" alt="languae">English</a></li>
                                <li><a href="#"><img src="" alt="languae">French</a></li>
                          </ul>
                        </div>
                        <div class="dropdown currency">
                          <a data-toggle="dropdown" role="button">USD</a>
                          <ul class="dropdown-menu">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#">€ EUR</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- ./block cl-->
                <div class="col-sm-9 col-md-7">
                    <!-- Home slide -->
                    <div class="block block-slider">
                        <ul class="home-slider kt-bxslider">

                                <li><a href="" >  <img src="" alt="Slider"> </a></li>
                            
                        </ul>
                    </div>
                    <!-- ./Home slide -->
                    
                </div>
                <div class="col-sm-9 col-md-3">
                    <div class="block-banner-right banner-hover">
                            <a href="#"><img src="" alt="Banner"></a>
                        
                    </div>
                </div>
                <!-- block banner owl-->
                <div class="col-sm-12">
                    <div class="block block-banner-owl" >
                        <div class="block-inner kt-owl-carousel" data-margin="30" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            <div class="banner-text">
                                 <h4>TODAY'S</h4>
                                 <h2><b>TOP 50 EDO</b></h2>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                 <a class="button-radius white" href="#">Shop now<span class="icon"></span></a>
                             </div>
                             <div class="banner-text" style="background-color:#ffd900;">
                                 <h4>UPTO</h4>
                                 <h2><b>40% OFF</b></h2>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                 <a class="button-radius white" href="#">Shop now<span class="icon"></span></a>
                             </div>
                             <div class="banner-text" style="background-color:#fa8072;">
                                 <h4>EXTRA</h4>
                                 <h2><b>60% OFF</b></h2>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                 <a class="button-radius white" href="#">Shop now<span class="icon"></span></a>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- ./block banner owl-->
                <!-- block tabs -->
                <div class="col-sm-12">
                    <div class="block block-tabs">
                        <div class="block-head">
                            <div class="block-title">
                                <div class="block-title-text text-lg">Hot Deals </div>
                            </div>
                            
                        </div>
                        <div class="block-inner">
                            <div class="tab-container">
                                <div id="tab-1" class="tab-panel active">
                                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                            <li class="product">
                                                <div class="product-container">
                                                    <div class="product-left">
                                                        <div class="product-thumb">
                                                            <a class="product-img" href="#"><img src="" alt="Product"></a>
                                                            <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-right">
                                                        <div class="product-name">
                                                            <a href="#"></a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="product-price"></span>
                                                            <span class="product-price-old">$169.00</span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-button">
                                                            <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                            <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                            <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div id="tab-2" class="tab-panel">
                                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="data/option2/p6.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="data/option2/p7.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="data/option2/p8.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="data/option2/p9.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="data/option2/p10.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
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
                <!-- ./block tabs -->

                <!-- Block hot deals2 -->
                <div class="col-sm-12">
                    <div class="block-hot-deals2">
                        <h3 class="title">Special Products</h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="hot-deal-tab">
                                    <div class="countdown">
                                        <span class="countdown-lastest" data-y="2016" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                    </div>
                                    <ul class="nav-tab">
                                        <li class="active"><a data-toggle="tab" href="#hotdeals-1">up to 70% off</a></li>
                                        <li><a data-toggle="tab" href="#hotdeals-2">up to 60% off</a></li>
                                        <li><a data-toggle="tab" href="#hotdeals-1">up to 50% off</a></li>
                                        <li><a data-toggle="tab" href="#hotdeals-2">up to 40% off</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="tab-container">
                                    <div id="hotdeals-1" class="tab-panel active">
                                        <ul class="products kt-owl-carousel" data-margin="30" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>

                                            <li class="product">
                                                <div class="product-container">
                                                    <div class="product-left">
                                                        <div class="product-thumb">
                                                            <a class="product-img" href="#"><img src="" alt="Product"></a>
                                                            <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-right">
                                                        <div class="product-name">
                                                            <a href="#"></a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="product-price"></span>
                                                            <span class="product-price-old">$169.00</span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-button">
                                                            <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                            <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                            <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            
                                        </ul>
                                    </div>
                                    <div id="hotdeals-2" class="tab-panel">
                                        <ul class="products kt-owl-carousel" data-margin="30" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                                            <li class="product">
                                                <div class="product-container">
                                                    <div class="product-left">
                                                        <div class="product-thumb">
                                                            <a class="product-img" href="#"><img src="data/option2/p24.jpg" alt="Product"></a>
                                                            <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-right">
                                                        <div class="product-name">
                                                            <a href="#">Cotton Lycra Leggings</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="product-price">$139.98</span>
                                                            <span class="product-price-old">$169.00</span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-button">
                                                            <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                            <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                            <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="product">
                                                <div class="product-container">
                                                    <div class="product-left">
                                                        <div class="product-thumb">
                                                            <a class="product-img" href="#"><img src="data/option2/p26.jpg" alt="Product"></a>
                                                            <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-right">
                                                        <div class="product-name">
                                                            <a href="#">Cotton Lycra Leggings</a>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="product-price">$139.98</span>
                                                            <span class="product-price-old">$169.00</span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-button">
                                                            <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                            <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                            <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
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
                </div>
                <!-- Block hot deals2 -->
            

            </div>
        </div>
    </div>

@endsection