<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
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

    @include('admin.frontend.header')

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!-- Block 01: Main slide block-->
            <div class="carousel-container">
                <div class="carousel-section">
                    <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/seedlings.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                    <h3><a href="{{route('outgrower.view')}}">Grow Trees</a></h3>
                    
                </div>
                <div class="carousel-section">
                    <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/forest.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                    <h3><a href="{{route('virtual.view')}}">Trade Trees</a></h3>
                    
                </div>
                <div class="carousel-section">
                    <img class="carousel-image" src="{{ asset('frontend/assets/images/home-10/lumber.jpg') }}" alt="Image 1" style="height:500px; width:100%; padding:30px;">
                    <h3><a href="{{route('consumer.view')}}">Buy Tree Products</a></h3>
                    
                </div>
            </div>
            <hr>
            <!-- Block 09: Brands-->
            <div class="home-10__elm-09">
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
            </div>




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
