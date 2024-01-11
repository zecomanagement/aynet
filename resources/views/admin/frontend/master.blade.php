<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aynet</title>

    <!-- Frontend styling -->
  <link href="https://fonts.googleapis.com/css?family=Cairo:200,400,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href={{asset('frontend/assets/images/favicon.png')}} />
    <link rel="stylesheet" href={{asset('frontend/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/slick.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/css-addition.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/home-10.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/main-color10.css')}}>

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    @livewireStyles
    
</head>
<body class="biolife-body biolife-body__home-10">

<!-- Preloader -->
<div id="biof-loading">
    <div class="biof-loading-center">
        <div class="biof-loading-center-absolute" >
            <div class="dot dot-one"></div>
            <div class="dot dot-two"></div>
            <div class="dot dot-three"></div>
        </div>
    </div>
</div>





<!-- Page Contain -->
@yield('home')

@include('admin.frontend.footer')

<!-- Scroll Top Button -->
<a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
@livewireScripts
<script src={{asset('frontend/assets/js/jquery-3.4.1.min.js')}}></script>
<script src={{asset('frontend/assets/js/bootstrap.min.js')}}></script>
<script src={{asset('frontend/assets/js/jquery.countdown.min.js')}}></script>
<script src={{asset('frontend/assets/js/jquery.nice-select.min.js')}}></script>
<script src={{asset('frontend/assets/js/jquery.nicescroll.min.js')}}></script>
<script src={{asset('frontend/assets/js/slick.min.js')}}></script>
<script src={{asset('frontend/assets/js/biolife.framework.js')}}></script>
<script src={{asset('frontend/assets/js/functions.js')}}></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session:: get('alert-type', 'info')}}"
    switch(type){
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