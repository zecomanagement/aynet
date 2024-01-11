@foreach ($subSection as $subSect)
<div class="product-related-box single-layout">
    <div class="biolife-title-box lg-margin-bottom-26px-im">
        <span class="biolife-icon icon-organic"></span>
        <span class="subtitle">All the best item for You</span>
        <h3 class="main-title">Related Products</h3>
    </div>
    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
        
            <li class="product-item">
                <div class="contain-product layout-default">
                    <div class="product-thumb">
                        <a href="{{ url('cart/subsect/details/'.$subSect->id) }}" class="link-to-product">
                            <img src={{ asset('upload/subSection_image/'.trim($subSect->image, '"'))}} alt="dd" width="270" height="270" class="product-thumnail">
                        </a>
                    </div>
                    <div class="info">
                        <b class="categories">Projects</b>
                        <h4 class="product-title"><a href="#" class="pr-name">{{$subSect->name}}</a></h4>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{$subSect->value}}</span></ins>
                            
                        </div>
                        <div class="slide-down-box">
                            <p class="message"></p>
                            <form action="{{route('cart.sub.store')}}">
                                <div class="buttons">
                                    <input type="hidden" name="subSect" value="{{$subSect->id}}">
                                    
                                    <div class="quantity-box">
                                        <span class="title">Quantity:</span>
                                        <div class="qty-input">
                                            <input type="text" name="qty" class="quantity-input" value="1" >
                                            <a  class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                            <a  class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <button type="submit" id="addToCart" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </li>   

    </ul>
</div> 
@endforeach

