

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
    <link rel="stylesheet" href={{asset('frontend/assets/css/css-addition.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/main-color10.css')}}>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>


<body class="biolife-body">
    
   

    <!-- HEADER -->
    @include('admin.frontend.ec_header')  

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">My Cart</h1>
    </div>

    <div class="shopping-cart-container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <h3 class="box-title">Your cart items</h3>
                <form class="shopping-cart-form" action="#" method="post">
                    <table class="shop_table cart-form">
                        <thead>
                        <tr>
                            <th class="product-name">Product Name</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cart as $row)
                            
                                <tr class="cart_item">
                                    <td class="product-thumbnail" data-title="Product Name">
                                        <a class="prd-thumb" href="#">
                                            <figure><img width="113" height="113" style="width:60px; height:60px;" src={{ asset('upload/products/'.trim($row->options->get('image'), '"'))}} alt="shipping cart"></figure>
                                        </a>
                                        <a class="prd-name" href="#">{{ $row->name }}</a>
                                        <form action="{{route('cart.product.remove')}}" method="GET">
                                            @csrf
                                            <div class="action">
                                                <input type="hidden" name="product_id" value="{{ $row->id }}">
                                                <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{ route('cart.product.remove', ['product_id' => $row->id])}}"  class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{$row->price}}</span></ins>
                                            
                                        </div>
                                    </td>
                                    <td class="product-price" data-title="Quantity">
                                        <div class="quantity-box type1">
                                            
                                            {{$row->qty}}
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain" id="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">Ksh</span >{{$row->price*$row->qty}}</span></ins>
                                            
                                        </div>
                                    </td>
                                    
                                </tr>
                            
                            
                        @endforeach
                        
                        <tr class="cart_item wrap-buttons">
                            <td class="wrap-btn-control" colspan="4">
                                <a class="btn back-to-shop">Back to Shop</a>
                                <button class="btn btn-update" type="submit" disabled="">update</button>
                                <button class="btn btn-clear" type="reset">clear all</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="shpcart-subtotal-block">
                    <div class="subtotal-line">
                        <b class="stt-name">Subtotal <span class="sub"></span></b>
                        <span class="stt-price">Ksh {{$subTotal}}</span>
                    </div>
                    
                    <div class="btn-checkout">
                        <a href="{{route('cart.checkout')}}" class="btn checkout">Check out</a>
                    </div>
                    
                    <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
                    <p class="msg">Don't have an account? <a href="{{route('register')}}" class="link-forward">Sign up here</a></p>
                    
                </div>
            </div>
        </div>
    </div>

    

   

    

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
    
    
    

</body>


</html>