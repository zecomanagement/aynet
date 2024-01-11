@extends('admin.frontend.master')
@section('home')

<!-- HEADER -->
@include('admin.frontend.member_header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@livewireStyles

<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">Edit Sell Order</h1>
</div>

<!--Navigation section-->
<div id="main-content" class="main-content">
    <div class="container">

        <div class="row">

            <!--Form Sign In-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="signin-container">
                    <form action="{{route('update.sales', $editSales->id)}}" name="frm-login" method="POST">
                        @csrf
                        <p class="form-row">
                            <label for="fid-name">Name:<span class="requite">*</span></label>
                            <input type="text"  name="name" value="{{$editSales->name}}"  class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Phone:<span class="requite">*</span></label>
                            <input type="text"  name="mobile" value="{{$editSales->mobile}}" class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Email:<span class="requite">*</span></label>
                            <input type="email"  name="email" value="{{$editSales->email}}" class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Tree Name:<span class="requite">*</span></label>
                            <input type="text"  name="tr_name" value="{{$editSales->tr_name}}" class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Average Age:<span class="requite">*</span></label>
                            <input type="text"  name="av_age" value="{{$editSales->av_age}}"  class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Average Circumfrence(cm):<span class="requite">*</span></label>
                            <input type="text"  name="circumference" value="{{$editSales->circumference}}"  class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Price:<span class="requite">*</span></label>
                            <input type="text"  name="price" id="price" value="{{$editSales->price}}" class="txt-input">
                        </p>
                        <p class="form-row">
                            <label for="fid-pass">Quantity:<span class="requite">*</span></label>
                            <input type="text"  name="quantity" id="qty" value="{{$editSales->quantity}}"  class="txt-input">
                        </p>

                        <p class="form-row">
                            <label for="fid-pass">Total:<span class="requite">*</span></label>
                            <input type="text"  name="total" id="total" value="{{$editSales->total}}" class="txt-input">
                        </p>
                       
                        
                        <p class="form-row wrap-btn">
                            <button class="btn btn-submit btn-bold" type="submit">Submit</button>
                            
                        </p>
                    </form>
                </div>
            </div>

            <!--Go to Register form-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="register-in-container">
                    <div class="intro">
                        <h4 class="box-title">New Customer?</h4>
                        <p class="sub-title">Create an account with us and you’ll be able to:</p>
                        <ul class="lis">
                            <li>Check out faster</li>
                            <li>Access your order history</li>
                            <li>Track new orders</li>
                            <li>Save items to your Wishlist</li>
                        </ul>
                        <a href="#" class="btn btn-bold">Create an account</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#qty').on('input paste',function(){
            let qty = $(this).val();
            let price = $('#price').val();
            var total = qty * price;
            $('#total').val(total);
        });
    });

</script>





@endsection