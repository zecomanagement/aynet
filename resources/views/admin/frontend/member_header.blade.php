<header id="header" class="header-area biolife-header biolife-header__ten">
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <p class="text-welcome">Welcome To Aynet Agroforestry</p>  
            </div>
            <div class="top-bar right">
                <ul class="menus">
                            <li> <i class="flaticon-clock"></i> Mon - Fri: 9:00 am - 06.00pm </li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="header-ten__logo col-lg-2 col-md-2 col-md-6 col-xs-6">
                    <a href="#" class="biolife-logo"><img src={{asset('frontend/assets/images/aynet.jpeg')}} width="137" height="34" alt="biolife organic food"></a>
                </div>
                
                <div class="header-ten__menu-contain col-lg-6 col-md-6 hidden-sm hidden-xs md-possition-initial">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu" style="padding:25px;">
                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Products">Outgrower Farmer</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('shop.view')}}">Buy Seedlings</a></li>
                                    <li class="menu-item"><a href="{{route('add.prep')}}">Prepare Land</a></li>
                                    <li class="menu-item"><a href="{{route('add.ext')}}">Get Extension</a></li>
                                    <li class="menu-item"><a href="{{route('add.sales')}}">Sell Trees</a></li>
                                    
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Products">Virtual Farmer</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('shop.project.view')}}">Buy Trees</a></li>
                                    <li class="menu-item"><a href="{{route('add.sales')}}">Sell Trees</a></li>
                                    <li class="menu-item"><a href="{{route('view.trees')}}">Donate Trees</a></li>
                                    <li class="menu-item"><a href="{{route('add.visit')}}">Visit Site</a></li>
                                    
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Products">End Consumer</a>
                                <ul class="sub-menu">
            
                                    <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Buy Lumber</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Dimensional Lumber</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Engineering wood</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Insullation Material</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Buy Furniture</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Home Furniture</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Office Furniture</a></li>
                                            
                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Buy Biofuel</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Firewood</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Charcoal</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Bio-diesel</a></li>
                                            <li class="menu-item"><a href="{{route('view.ep')}}">Bio-ethanol</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
                
                <div class="header-ten__left-menu col-lg-4 col-md-4 col-md-6 hidden-sm hidden-xs">
                    @if (Auth::user())
                        
                        <ul class="left-menu" style="padding:25px;">
                            <li><a href="{{ url('/admin/logout') }}" class="login-link link-to">
                                <figure><img src={{asset('frontend/assets/images/home-10/person-icon.png')}} width="22" height="19" alt=""></figure>
                                <p class="texts">Welcome {{Auth::user()->name}}</p>
                            </a></li>
                        
                        </ul>
                    @else
                    <ul class="left-menu" style="padding:25px;">
                        <li><a href="#" class="login-link link-to">
                            <figure><img src={{asset('frontend/assets/images/home-10/person-icon.png')}} width="22" height="19" alt=""></figure>
                            <p class="texts">Get Started</p>
                        </a></li>
                        <li><a href="{{ url('/login') }}" class="login-link link-to">
                            <figure><img src={{asset('frontend/assets/images/home-10/person-icon.png')}} width="21" height="22" alt=""></figure>
                            <p class="texts"><b>Hello,</b> Sign In</p>
                        </a></li>
                    </ul>
                    @endif
                    
                </div>
                <div class="header-ten__bottom col-lg-12 col-md-12 col-sm-6 col-xs-6">
                    <div class="biolife-cart-info" style="padding-bottom: 30px;">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                        </div>
                        <div class="header-search-bar header-search-bar__layout-03">
                            <form action="#" class="form-search" name="desktop-seacrh" method="get">
                                <select name="category" style="display: none;">
                                    <option value="-1" selected="">All Categories</option>
                                    <option value="vegetables">Seedlings</option>
                                    
                                </select>
                                <p class="form-row">
                                    <input type="text" name="s" class="input-text" value="" placeholder="Search for product...">
                                    <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                                </p>
                            </form>
                            <ul class="links">
                                <li><a href="#">Free Shipping</a></li>
                                <li><a href="#">Weekly Gifts</a></li>
                            </ul>
                        </div>
                        <div class="minicart-block">
                            <div class="minicart-contain">
                                <a href="javascript:void(0)" class="link-to">
                                    <img src={{asset('frontend/assets/images/home-10/minicar.png')}} width="18" height="19" alt="">
                                    <span>My Bag</span>
                                    <span class="total-num">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                                </a>
                                
                            </div>
                            @php
                                $cart = \Gloudemans\Shoppingcart\Facades\Cart::content();
                                //dd($cart);
                            @endphp
                            <div class="cart-content">
                                <div class="cart-inner">
                                    <ul class="products">
                                        <li>
                                            @foreach ($cart as $seed)
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src={{ asset('upload/products/'.trim($seed->options->get('image'), '"'))}} style="width:60px; height:60px;" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">{{$seed->name}}</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{$seed->price}}</span></ins>
                                                            
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id123][qty]">Qty:{{$seed->qty}}</label>
                                                            <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]"  disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div> 
                                            @endforeach
                                            
                                        </li>
                                    </ul>
                                    <p class="btn-control">
                                        <a href="{{route('cart.view')}}" class="btn view-cart">view cart</a>
                                        <a href="" class="btn">Delete Cart</a>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>