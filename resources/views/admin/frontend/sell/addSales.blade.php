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
@include('admin.frontend.outgrower_header')	
<div class="wrapper">
    <div id="main-content" class="main-content">
        
        <div class="container">
        <!-- Content Header (Page header) -->
            <section class="content">
    
                <!-- Basic Forms -->
                
                    <div class="row">
                    <div class="col">
                        <form method="POST" action="{{ route('store.sales')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-12">
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Phone <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="mobile"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Tree Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="tr_name"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Average Age <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="av_age"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Circumference <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="circumference"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Price <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price" id="price" class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Quantity <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="quantity" id="qty"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Total <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="total" id="total"  class="form-control" > 
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>County<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="county_id" id="county_id"  class="form-control">
                                                    <option value="">Select County</option>
                                                    @foreach ($county as $row)
                                                        <option value="{{ $row->id }}">{{ $row->county_name }}</option> 
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Sub County<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="sub_county_id" id="sub_county_id"  class="form-control">
                                                    <option value="">Select SubCounty</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Ward<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="ward_id" id="ward_id"  class="form-control">
                                                    <option value="">Select Section</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit"> 
                                
                            </div>
                        </form>
    
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                
    
            </section>
    
        </div>
    </div>
  

  
  
  <div class="control-sidebar-bg"></div>
  @include('admin.frontend.footer')
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
    
	<script src={{asset('backend/js/vendors.min.js')}}></script>
    <script src={{asset('assets/icons/feather-icons/feather.min.js')}}></script>	
	<script src={{asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}></script>
	<script src={{asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}></script>
	<script src={{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}></script>

    
	
	<!-- Sunny Admin App -->
    
    <script src={{asset('assets/icons/feather-icons/feather.min.js')}}></script>	
    <script src={{asset('assets/vendor_components/datatable/datatables.min.js')}}></script>
	<script src={{asset('backend/js/pages/data-table.js')}}></script>

	<script src={{asset('backend/js/template.js')}}></script>
	<script src={{asset('backend/js/pages/dashboard.js')}}></script>

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

<script type="text/javascript">
    $(document).ready(function(){
        $('#qty').on('input paste',function(){
            let qty = $(this).val();
            let price = $('#price').val();
            var total = qty * price;
            $('#total').val(total);
        });
    });

    $(document).ready(function(){
            $('#county_id').change(function(){
                //ajax setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                // Find the specific sub_county_id
                $('#sub_county_id').empty();
                    var id = $(this).val();
                    //alert(id);

                    //ajax call for SubCounties

                    $.ajax({
                        type: "GET",
                        url: "/sales/getSubCounty/" +id,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('#sub_county_id').html(data) // Method 1
                            
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });

                $('#sub_county_id').change(function(){
                //ajax call for wards
                
                    var id = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: "/sales/getWard/" +id,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('#ward_id').html(data) // Method 1     
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                });
            });
        });

</script>	
</body>
</html>




















