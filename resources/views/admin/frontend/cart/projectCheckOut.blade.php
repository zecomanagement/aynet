<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="icon" href="">

    <title>Aynet</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href={{asset('backend/css/vendors_css.css')}}>
	  
	<!-- Style-->  
	<link rel="stylesheet" href={{asset('backend/css/style.css')}}>
	<link rel="stylesheet" href={{asset('backend/css/skin_color.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
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
 
  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
@include('admin.frontend.vheader')

<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">Prepare Land</h1>
</div>
<div class="page-contain checkout">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container sm-margin-top-37px">
            <form action="{{route('cart.project.items.store')}}" method="POST">
            @csrf
            <div class="row">
                
                <!--Order Summary-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        
                            <div class="title-block">
                                <h3 class="title">Order Summary</h3>
                                <a href="#" class="link-forward">Edit cart</a>
                            </div>
                            <div class="cart-list-box short-type">
                                <span class="number"></span>
                                <ul class="cart-list">
                                    @foreach ($cart as $row)
                                        <li class="cart-elem">
                                            <div class="cart-item">
                                                <div class="product-thumb">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img src={{ asset('upload/plots/'.trim($row->options->get('image'), '"'))}} width="113" height="113" alt="shop-cart" ></figure>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <span class="txt-quantity">Qty: {{$row->qty}}</span>
                                                    <a href="#" class="pr-name">{{$row->name}}</a>
                                                </div>
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">Ksh</span>{{$row->price*$row->qty}}</span></ins>
                                                    
                                                </div>
                                            </div>
                                        </li>  
                                    @endforeach
                                    
                                    
                                </ul>
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Subtotal</b>
                                            <span class="stt-price">{{$subTotal}}</span>
                                        </div>
                                    </li>
                                    
                                    
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">total:</b>
                                            <span class="stt-price">Ksh {{$subTotal}}</span>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>   
                    </div>
                </div>
                
                

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        <h3><b>Delivery Information</b></h3>
                        <hr>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name"  class="form-control" >
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Email<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email"  class="form-control" >
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Mobile<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="mobile"  class="form-control" >
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <h5>More Instructions<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="instructions" id="textarea" class="form-control"  placeholder="Enter Details..."></textarea>
                                    <div class="help-block"></div></div>
                                </div>
                            </div> 
                        </div>
                        <div>
                            <button type="submit" name="btn-sbmt" class="btn btn-success">Place Order</button>
                        </div>
                    </div>
                    
                    
                </div>
            
            </div>
            </form>
        </div>
    </div>
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
    
	<script src={{asset('frontend/assets/js/jquery-3.4.1.min.js')}}></script>
    <script src={{asset('frontend/assets/js/bootstrap.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.countdown.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.nice-select.min.js')}}></script>
    <script src={{asset('frontend/assets/js/jquery.nicescroll.min.js')}}></script>
    <script src={{asset('frontend/assets/js/slick.min.js')}}></script>
    <script src={{asset('frontend/assets/js/biolife.framework.js')}}></script>
    <script src={{asset('frontend/assets/js/functions.js')}}></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<!-- Sunny Admin App 
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>-->

    <script type="text/javascript">
        $(function(){
          $(document).on('click', '#delete', function(e){
              e.preventDefault();
              var link = $(this).attr("href");
    
                Swal.fire({
                title: 'Are you sure?',
                text: "Delete data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete!'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                    'Deleted!',
                    'Data Deleted Successfully.',
                    'success'
                  )
                }
              })
          });
        });
    
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    
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








