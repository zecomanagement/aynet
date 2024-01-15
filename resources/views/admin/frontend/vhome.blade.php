@extends('admin.frontend.master')
<style>
    /* Styling for carousel container */
    .carousel-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .carousel-container a{
        color: #8BA740
    }

    /* Styling for carousel section */
    .carousel-section {
        flex-basis: 30%;
        text-align: center;
    }

    /* Styling for carousel image */
    .carousel-image {
        width: 100%;
        height: auto;
    }
</style>

@section('home')

<!-- HEADER -->
@include('admin.frontend.vheader')
    
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">

        <!-- Block 01: Main slide block-->
        <!-- Main content -->
    <div id="main-content" class="main-content">

        <div class="main-slide block-slider home-10__elm-01">
            <ul class="biolife-carousel nav-none-on-mobile nav-insite-grid-1170 nav-larger" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                
                <li>
                    <div class="slide-contain biolife-slide__ten">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="second-line">Buy Trees</b>
                            
                            <p class="third-line">Get quality trees from our shops</p>
                            <p class="buttons">
                                <a href="{{route('shop.project.view')}}" class="btn">Buy Trees</a>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-07">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="second-line">Donate Trees</b>
                            <p class="third-line">Donate trees</p>
                            
                            <p class="buttons">
                                <a href="{{route('view.trees')}}" class="btn">Donate Trees</a>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-02">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="second-line">Visit Site</b>
                            <p class="third-line">Book for a site visit</p>
                            
                            <p class="buttons">
                                <a href="{{route('add.visit')}}" class="btn">Visit site</a>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-04">
                        <div class="media"></div>
                        <div class="text-content">
                            <b class="second-line">Sell Trees</b>
                            <p class="third-line">Sell your trees at our marketplace</p>
                            
                            <p class="buttons">
                                <a href="{{ route('add.sales') }}" class="btn">Start Selling</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
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