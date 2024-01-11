<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href={{asset('frontend/assets/images/favicon.png')}} />
    <link rel="stylesheet" href={{asset('frontend/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/slick.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/css-addition.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/main-color10.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    
    
    @include('admin.frontend.vheader')
    

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Our Products</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                
                    <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="permal-link">Tree Assets</a></li>
                    <li class="nav-item"><span class="current-page">Best Quality Tree Assets</span></li>
                
                
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
                        <li><img src={{ asset('upload/plots/'.trim($products->image, '"'))}} alt="" width="500" height="500"></li>
                        
                        
                    </ul>
                    
                </div>

                
                <div class="product-attribute">
                    <h3 class="title">{{ $products->name }}</h3>
                    <div class="rating">
                        <b class="category">By: Aynet Limited</b>
                    </div>
                    <span class="sku"></span>
                    <p class="excerpt">{{ $products->brief_desc }}</p>
                    <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{ $products->unit_price }}</span></ins>
                        
                    </div>
                    
                    <div class="shipping-info">
                        <p class="shipping-day">3-Day Shipping</p>
                        <p class="for-today">Pree Pickup Today</p>
                    </div>
                </div>
                <form  action="{{route('cart.plot.store')}}" method="POST">
                    @csrf
                    <div class="action-form">
                        <div class="quantity-box">
                            <input type="hidden" value="{{ $products->id }}" class="seed_id" name="product_id">
                            <input type="hidden" value="1" class="weight_id" name="weight">
                            <span class="title">Quantity:</span>
                            <div class="qty-input" >
                                
                                <input type="text" name="qty" class="quantity-input" value="1" >
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="total-price-contain">
                            <span class="title">Total Price:</span>
                            <p class="price">{{$products->unit_price}}</p>
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
                            <p class="desc"> {{ $products->long_desc}}.</p>
                            
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <section class="google-map-section">
                                <div class="map-inner">
                    
                    
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8300336549873!2d36.81956191475392!3d-1.2752974990698362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17297069cf95%3A0x51af5e1d8fff1472!2sVillage%20Plaza!5e0!3m2!1sen!2ske!4v1677578059477!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                                </div>
                            </section>
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    

    

    

    <!-- FOOTER -->
    @include('admin.frontend.footer')

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src={{asset('frontend/assets/js/jquery-3.4.1.min.js')}}></script>
    <script src={{asset('frontend/assets/js/bootstrap.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.countdown.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.nice-select.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.nicescroll.min.js')}}></script>
    <script src={{asset('frontend/assets/js/slick.min.js')}}></script>
    <script src={{asset('frontend/assets/js/biolife.framework.js')}}></script>
    <script src={{asset('frontend/assets/js/functions.js')}}></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session:: get('alert-type', 'info')}}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }
        @endif
    </script>
    
    @livewireScripts
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btn-up').click(function(e){
                    e.preventDefault();
                    var price = {{$products->unit_price}};
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
                    var price = {{$products->unit_price}};
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
