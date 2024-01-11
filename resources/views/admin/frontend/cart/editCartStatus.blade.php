@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        
        <div class="container-full">
        <!-- Content Header (Page header) -->
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Edit Delivery Status</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('cart.order.update', $editStatus->id)}}">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Delivery Status <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="delivery_status"   class="form-control">
                                                <option value="" selected="">Select Role</option>
                                                <option value="Pending"{{ ($editStatus->delivery_status == "Pending" ? "selected": "") }}>Pending</option>
                                                <option value="Dispatched" {{ ($editStatus->delivery_status == "Dispatched" ? "selected": "") }}>Dispatched</option>
                                                <option value="Delivered" {{ ($editStatus->delivery_status == "Delivered" ? "selected": "") }}>Deliverd</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- End row -->

                            
                                  
                               
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                               
                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>

        
        
        </div>
    </div>
@endsection