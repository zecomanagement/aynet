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
                    <a href="{{route('home.view')}}" class="biolife-logo"><img src={{asset('frontend/assets/images/aynet.jpeg')}} width="137" height="34" alt="biolife organic food"></a>
                </div>
                
                <div class="header-ten__menu-contain col-lg-8 col-md-6 hidden-sm hidden-xs md-possition-initial">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu" style="padding:25px;">
                            <li class="menu-item ">
                                <p class="buttons">
                                    <a href="{{route('outgrower.view')}}" class="btn" style="background-color:#8BA740;  font-size:16px;font-weight:700;border-radius: 999px;
                                    padding: 9px 10px 10px; min-width: 157px; color:white">Outgrower App(Grow Trees)</a>
                                </p>
                            </li>
                            <li class="menu-item ">
                                <p class="buttons">
                                    <a href="{{route('virtual.view')}}" class="btn" style="background-color:#8BA740; font-size:16px;font-weight:700;border-radius: 999px;
                                    padding: 9px 10px 10px; min-width: 157px; color:white">Virtual Farmer(Trade Trees)</a>
                                </p>
                            </li>
                            <li class="menu-item ">
                                <p class="buttons">
                                    <a href="{{route('consumer.view')}}" class="btn" style="background-color:#8BA740; font-size:16px;font-weight:700;border-radius: 999px;
                                    padding: 9px 10px 10px; min-width: 157px; color:white"> End Consumer (Products Shop) </a>
                                </p>
                            </li>  
                        </ul>
                    </div>
                </div>
                
                <div class="header-ten__left-menu col-lg-2 col-md-4 col-md-6 hidden-sm hidden-xs">
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
                        
                    </ul>
                    @endif
                    
                </div>
                
            </div>
        </div>
    </div>
</header>