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

        <!-- Block 01: Main slide block-->
        <div class="carousel-container">
            <div class="carousel-section">
                <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/seedlings.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                <h3><a href="{{route('shop.project.view')}}">Buy Trees</a></h3>
                
            </div>
            <div class="carousel-section">
                <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/forest.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                <h3><a href="{{route('view.trees')}}">Donate Trees</a></h3>
                
            </div>
            <div class="carousel-section">
                <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/tractor.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                <h3><a href="{{route('add.visit')}}">Visit Site</a></h3>
                
            </div>
            
        </div>
        <hr>

        <!-- Block 02: Banners-->
        

        

        <!-- Block 04: Product Tab-->
        
        

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