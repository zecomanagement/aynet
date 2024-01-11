@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">{{ $cartOrder->user->name }}</h3>
                                

                            </div>

                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Total</h5>
                                            <span class="description-text">{{ $cartOrder->total }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <h5 class="description-header">Status</h5>
                                            <span class="description-text">{{ $cartOrder->delivery_status }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <h5 class="description-header">Name</h5>
                                            <span class="description-text">{{ $cartOrder->user->name }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>




                        <!-- /.box -->
                    </div>

                    <div class="col-12">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">Delivery Details</h3>

                            </div>

                            <div class="box-footer">
                                @foreach ($delivery as $delivery)
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">County</h5>
                                                <span class="description-text">{{ $delivery->county->county_name }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 br-1 bl-1">
                                            <div class="description-block">
                                                <h5 class="description-header">Sub County</h5>
                                                <span class="description-text">{{ $delivery->subCounty->sub_county_name }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <div class="col-sm-4 br-1 bl-1">
                                            <div class="description-block">
                                                <h5 class="description-header">Address</h5>
                                                <span class="description-text">{{ $delivery->address }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>

                                        <!-- /.col -->
                                    </div>  
                                @endforeach
                                
                                <!-- /.row -->
                            </div>
                        </div>




                        <!-- /.box -->
                    </div>
                    
                    <div class="col-12">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            

                            <div class="box-body">
                                <div class="table-responsive">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                            @foreach ($cartItems as $item)
                                                <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{$item->quantity*$item->price}} </td>
                                                </tr>
                                            @endforeach
                                            
                                       
                                        
                                        
                                    </tbody>
                                    
                                  </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                        </div>

                    </div>

                    <div class="col-12">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">{{ $cartOrder->user->name }}</h3>
                            </div>

                            <div class="box-body">
                                <div class="table-responsive">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                            @foreach ($cartItems as $item)
                                                <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{$item->quantity*$item->price}} </td>
                                                </tr>
                                            @endforeach
                                            
                                       
                                        
                                        
                                    </tbody>
                                    
                                  </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
