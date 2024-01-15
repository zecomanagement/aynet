<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aynet - Forests for Life</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('frontend/assets/images/favicon.png') }} />
    <link rel="stylesheet" href={{ asset('frontend/assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/animate.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/nice-select.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/slick.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/css-addition.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/assets/css/home-10.css') }}>

    <style>
        /* Styling for carousel container */
        .carousel-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .carousel-container a {
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
            height: 500px;
            padding: 15px;

        }
    </style>


</head>

<body class="biolife-body biolife-body__home-10">

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

    @include('admin.frontend.ec_header')

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="main-slide block-slider home-10__elm-01">
                <ul class="biolife-carousel nav-none-on-mobile nav-insite-grid-1170 nav-larger" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                    
                    <li>
                        <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-03">
                            <div class="media"></div>
                            <div class="text-content">
                                <b class="second-line">Lumber</b>
                                
                                <p class="third-line">Get quality lumber from our shops</p>
                                <p class="buttons">
                                    <a href="{{ route('view.ep') }}" class="btn">Start Buying</a>
                                </p>
                            </div>
                        </div>
                    </li>
    
                    <li>
                        <div class="slide-contain biolife-slide__ten biolife-slide__ten--elm-05">
                            <div class="media"></div>
                            <div class="text-content">
                                <b class="second-line">Biofuel</b>
                                <p class="third-line">Get quality fuel from our stores</p>
                                
                                <p class="buttons">
                                    <a href="{{ route('view.ep') }}" class="btn">Start Buying</a>
                                </p>
                            </div>
                        </div>
                    </li>
    
                    
    
                    
    
                </ul>
            </div>

            

            <!-- Block 09: Brands-->
            {{--<div class="home-10__elm-09">
                <div class="container">
                    <div class="biolife-brands">
                        <div class="biolife-brands__list-inline">
                            <ul class="brands">
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-01.png') }}
                                            alt="biolife brand" width="120" height="63"></a></li>
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-02.png') }}
                                            alt="biolife brand" width="120" height="77"></a></li>
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-03.png') }}
                                            alt="biolife brand" width="115" height="74"></a></li>
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-04.png') }}
                                            alt="biolife brand" width="112" height="81"></a></li>
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-05.png') }}
                                            alt="biolife brand" width="120" height="77"></a></li>
                                <li><a class="brand-link" href="#"><img
                                            src={{ asset('frontend/assets/images/home-10/brd-06.png') }}
                                            alt="biolife brand" width="120" height="63"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>--}}




        </div>
    </div>


    <!-- FOOTER -->
    @include('admin.frontend.footer')

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src={{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/jquery.countdown.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/jquery.nice-select.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/jquery.nicescroll.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/slick.min.js') }}></script>
    <script src={{ asset('frontend/assets/js/biolife.framework.js') }}></script>
    <script src={{ asset('frontend/assets/js/functions.js') }}></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
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
</body>


</html>
