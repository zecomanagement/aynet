<!--@foreach ($seedling as $data)
<div class="sumary-product single-layout product-data">
    <div class="media">
        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
            <li><img src={{ asset('upload/seedling_image/'.trim($data->image, '"'))}} alt="" width="500" height="500"></li>
            
            
        </ul>
        
    </div>

    
    <div class="product-attribute">
        <h3 class="title">{{ $data->name }}</h3>
        <div class="rating">
            <b class="category">By: Aynet Limited</b>
        </div>
        <span class="sku"></span>
        <p class="excerpt">{{ $data->briefDesc }}</p>
        <div class="price">
            <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{ $data->uPrice }}</span></ins>
            
        </div>
        
        <div class="shipping-info">
            <p class="shipping-day">3-Day Shipping</p>
            <p class="for-today">Pree Pickup Today</p>
        </div>
    </div>
    <form  action="{{route('cart.store')}}" method="POST">
        @csrf
        <div class="action-form">
            <div class="quantity-box">
                <input type="hidden" value="{{ $data->id }}" class="seed_id" name="seed_id">
                <span class="title">Quantity:</span>
                <div class="qty-input" >
                    
                    <input type="text" name="qty" class="quantity-input" value="1" >
                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="total-price-contain">
                <span class="title">Total Price:</span>
                <p class="price">{{$data->uPrice}}</p>
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
    
</div>--> 
@endforeach

