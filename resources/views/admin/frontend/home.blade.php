@extends('admin.frontend.master')
@section('home')

<!-- HEADER -->
@include('admin.frontend.header')
    
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">

        <!-- Block 01: Main slide block-->
        <div class="main-slide block-slider home-10__elm-01">
            <ul class="biolife-carousel nav-none-on-mobile nav-insite-grid-1170 nav-larger" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                
                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-01">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="first-line">Veggies</b>
                            <b class="second-line">100% Fresh</b>
                            <p class="third-line">Lorem Ipsum is simply dummy texting of the printings and typeset amet industry has industry's standard.</p>
                            <p class="buttons">
                                <a href="#" class="btn">Start Buying</a>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-02">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="first-line">Healthy</b>
                            <b class="second-line">Vegetables</b>
                            <p class="third-line">Lorem Ipsum is simply dummy texting of the printings and typeset amet industry has industry's standard.</p>
                            <p class="buttons">
                                <a href="#" class="btn">Start Buying</a>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-03">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="first-line">Seedlings</b>
                            <b class="second-line">100% Legit</b>
                            <p class="third-line">Our seedlings are carefully chosen to withstand the tropical weather.</p>
                            <p class="buttons">
                                <a href="#" class="btn">Start Buying</a>
                            </p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <!-- Block 02: Banners-->
        

        <!-- Block 03: Banners-->
        <div class="banners home-10__elm-03">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="biolife-banner__style-20 biolife-banner__style-20--elm-01">
                            <a href="#" class="media"></a>
                            <div class="text-contain">
                                <h3 class="f-title">Upto 70% Flate</h3>
                                <b class="desc">Lorem Ipsum is simply dummy texting of the printings and typeset amet industry has industry'.</b>
                            </div>
                            <a href="#" class="btn">Grab Offer!</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="biolife-banner__style-20 biolife-banner__style-20--elm-02">
                            <a href="#" class="media"></a>
                            <div class="text-contain">
                                <h3 class="f-title">Free Shippment</h3>
                                <b class="desc">Lorem Ipsum is simply dummy texting of the printings and typeset amet industry has industry'.</b>
                            </div>
                            <a href="#" class="btn">Start Shop!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Block 04: Product Tab-->
        <div class="biolife-tab biolife-tab-contain biolife-tab__layout-10 home-10__elm-04">
            <div class="container">
                <div class="tab-head">
                    <div class="biolife-title biolife-title__left biolife-title__unnerline">
                       <h3 class="title">Hurry Up! Special Offers.</h3>
                   </div>
                    <ul class="tabs">
                        <li class="tab-element active">
                            <a href="#tab01_1st" class="tab-link">Hard Wood</a>
                        </li>
                        <li class="tab-element" >
                            <a href="#tab01_2nd" class="tab-link">Soft Wood</a>
                        </li>
                        <li class="tab-element" >
                            <a href="#tab01_3rd" class="tab-link">Organic</a>
                        </li>
                        <li class="tab-element" >
                            <a href="#tab01_4th" class="tab-link">Natural</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab01_1st" class="tab-contain active">
                        <ul class="products-list default-product-style default-product--light biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain row-space-27" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Eucalyptus</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Pine</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="labels">
                                            <div class="lbl-sale"><span class="number">20%</span><span class="text">off</span></div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Oak</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Teak</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="labels">
                                            <div class="lbl-sale"><span class="number">50%</span><span class="text">off</span></div>
                                        </div>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Bluegum</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-default layout-default--light">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src={{asset('frontend/assets/images/home-10/species.jpg')}} alt="Vegetables" width="216" height="276" class="product-thumnail">
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name">Cyprus</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount">KES10.00</span></ins>
                                            <del><span class="price-amount">KES15.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>

        <!-- Block 05: banners-->
        <div class="biolife-banner__promotion--06 home-10__elm-05">
            <div class="container">
                <div class="text-content">
                    <b class="f-title">Deals Of The Week</b>
                    <p class="desc">Lorem Ipsum is simply dummy texting of the printings and typeset amet industry has industry's standard.</p>
                    <div class="biolife-countdown" data-datetime="2020-01-18 00:00 +00:00"><span class="days"><span class="number">79</span><span class="text">days</span></span><span class="hours"><span class="number">13</span><span class="text">Hours</span></span><span class="mins"><span class="number">51</span><span class="text">Mins</span></span><span class="secs"><span class="number">20</span><span class="text">Secs</span></span></div>
                    <a href="category-grid.html" class="btn btn-add-to-cart">add to cart</a>
                </div>
            </div>
        </div>
        

        <!-- Block 09: Brands-->
        <div class="home-10__elm-09">
            <div class="container">
                <div class="biolife-brands">
                    <div class="biolife-brands__list-inline">
                        <ul class="brands">
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-01.png')}} alt="biolife brand" width="120" height="63"></a></li>
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-02.png')}} alt="biolife brand" width="120" height="77" ></a></li>
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-03.png')}} alt="biolife brand" width="115" height="74"></a></li>
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-04.png')}} alt="biolife brand" width="112" height="81"></a></li>
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-05.png')}} alt="biolife brand" width="120" height="77"></a></li>
                            <li><a class="brand-link" href="#"><img src={{asset('frontend/assets/images/home-10/brd-06.png')}} alt="biolife brand" width="120" height="63"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
        

    </div>
</div>
@endsection