@extends('admin.frontend.master')
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href={{asset('frontend/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/slick.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/main-color.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @livewireStyles
</head>


<body class="biolife-body">
    
    
    
    <!-- HEADER -->
    
    @include('admin.frontend.member_header')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">End Products Shop</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Tree Seedlings</a></li>
                <li class="nav-item"><span class="current-page">Best Quality Seedlings</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
            
                
            <div class="sumary-product single-layout product-data">
                <div class="media">
                    <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                        <li><img src={{ asset('upload/ep_image/'.trim($eProduct->image, '"'))}} alt="" width="500" height="500"></li>
                        
                        
                    </ul>
                    
                </div>

                
                <div class="product-attribute">
                    <h3 class="title">{{ $eProduct->name }}</h3>
                    <div class="rating">
                        <b class="category">By: Aynet Limited</b>
                    </div>
                    <span class="sku"></span>
                    <p class="excerpt">{{ $eProduct->briefDesc }}</p>
                    <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{ $eProduct->price }}</span></ins>
                        
                    </div>
                    
                    <div class="shipping-info">
                        <p class="shipping-day">3-Day Shipping</p>
                        <p class="for-today">Pree Pickup Today</p>
                    </div>
                </div>
                <form  action="{{route('eproduct.store')}}" method="POST">
                    @csrf
                    <div class="action-form">
                        <div class="quantity-box">
                            <input type="hidden" value="{{ $eProduct->id }}" class="product_id" name="product_id">
                            <span class="title">Quantity:</span>
                            <div class="qty-input" >
                                
                                <input type="text" name="qty" class="quantity-input" value="1" >
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="total-price-contain">
                            <span class="title">Total Price:</span>
                            <p class="price">{{$eProduct->price}}</p>
                        </div>
                        <div class="buttons">
                            <input type="submit" class="btn add-to-cart-btn" value="ADD TO CART">
                            <p class="pull-row">
                                <a href="#" class="btn wishlist-btn">wishlist</a>
                                <a href="#" class="btn compare-btn">compare</a>
                            </p>
                        </div>
                        <div class="location-shipping-to">
                            <span class="title">Ship to:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Select Location</option>
                                @foreach ($location as $loc)
                                    <option value="{{$loc->id}}">{{$loc->name}}</option> 
                                @endforeach
                            </select>
                        </div>
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src={{asset('frontend/assets/images/card1.jpg')}} alt="" width="51" height="36"></li>
                                <li><img src={{asset('frontend/assets/images/card2.jpg')}} alt="" width="51" height="36"></li>
                                <li><img src={{asset('frontend/assets/images/card3.jpg')}} alt="" width="51" height="36"></li>
                                <li><img src={{asset('frontend/assets/images/card4.jpg')}} alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </form>
                
            </div>  
            



                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                            <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                            <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li>
                            
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc"> {{ $eProduct->longDesc}}.</p>
                            
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <section class="google-map-section">
                                <div class="map-inner">
                    
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6689255605747!2d35.7360362758037!3d0.49582696372386054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178127fd2d645063%3A0xbc37c6d7ca6066ac!2sKabarnet%20Tree%20Farm!5e0!3m2!1sen!2ske!4v1681209907041!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    
                    
                                </div>
                            </section>
                        </div>
                        
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    
    @livewireScripts
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btn-up').click(function(e){
                    e.preventDefault();
                    var price = {{$eProduct->price}};
                    var inc_value = $('.quantity-input').val();
                    var value = parseInt(inc_value);
                    value = isNaN(value) ? 0:value;

                    if(value)
                    {
                        value ++;
                        $('.quantity-input').val(value);
                        $('.price').text(value*price);
                    }
                });

                $('.btn-down').click(function(e){
                    e.preventDefault();
                    var price = {{$eProduct->price}};
                    var inc_value = $('.quantity-input').val();
                    var value = parseInt(inc_value);
                    value = isNaN(value) ? 0:value;

                    if(value > 1)
                    {
                        value --;
                        $('.quantity-input').val(value);
                        $('.price').text(value*price);
                    }
                });

            });
        </script>
</body>


</html>