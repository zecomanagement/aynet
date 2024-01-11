@extends('admin.frontend.master')
@section('home')

<!-- HEADER -->
@include('admin.frontend.ec_header')

<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"></h4>
      
    </div>
</div>
<div class="biolife-tab biolife-tab-contain biolife-tab__layout-10 home-10__elm-04">
    <div class="container">
        <div class="tab-head">
            <div class="biolife-title biolife-title__left biolife-title__unnerline">
               <h3 class="title">Our Shop</h3>
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
                    @foreach ($eProduct as $ep)
                        <li class="product-item">
                            <div class="contain-product layout-default layout-default--light">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                    
                                        <img src="{{ asset('upload/ep_image/'.trim($ep->image, '"'))}}" href="{{url('endproduct/ep/detail/'.$ep->id)}}" alt="Vegetables" width="216" height="276" class="product-thumnail">
                                    </a>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-quickview btn_call_quickview"><i class="biolife-icon icon-search"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4 class="product-title"><a href="{{url('endproduct/ep/detail/'.$ep->id)}}" class="pr-name">{{$ep->name}}</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount">KES{{$ep->price}}</span></ins>
                                    
                                    </div>
                                </div>
                            </div>
                        </li> 
                    @endforeach  
                </ul>
            </div> 
        </div>

        
    </div>
</div>

@endsection