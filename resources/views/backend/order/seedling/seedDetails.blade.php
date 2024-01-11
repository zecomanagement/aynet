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
                <div class="widget-user-header bg-black" >
                  <h3 class="widget-user-username">{{ $order->client->name }}</h3>
                  <h6 class="widget-user-desc"></h6>
                  
                </div>
                <div class="widget-user-image">
                    <!-- Condition for image upload or applying default -->
                  <img style="width: 90px; height: 90px;" class="rounded-circle" src="{{ (!empty($order->client->image))? url('upload/user_images/'.$order->client->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Mobile No.</h5>
                        <span class="description-text">{{ $order->client->mobile }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Occupation</h5>
                        <span class="description-text"></span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Email</h5>
                        <span class="description-text">{{ $order->client->email }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>

              <div class="col-12">
                <div class="box">
                    <div class="box-header">
                      <a href="" style="float: right; margin-right:4px;"  class="btn btn-rounded btn-success mb-5">STATEMENT</a>
                      <a href="{{url('accounts/make_payment/'.$order->client->id)}}" style="float: right; margin-right:4px;" class="btn btn-rounded btn-success mb-5">RECEIPT</a>
                      <a href="" style="float: right; margin-right:4px;" class="btn btn-rounded btn-success mb-5">DOCUMENTS</a>
                      <a href="" style="float: right; margin-right:4px;" class="btn btn-rounded btn-success mb-5">INVOICE</a> 
                    </div>
                    <div class="box-body">
                        <div class="col-12 col-lg-12">
                            <div class="box">
                              
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                          <tr>
                                            
                                            <th scope="col">Nursery</th>
                                            <th scope="col">Seedlings</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            @if ($order->nursery->name != null)
                                              <td>{{$order->nursery->name}}</td>
                                            @else
                                             --
                                            @endif
                                            
                                            
                                            <td>{{$order->species->name}}</td>
                                            <td>{{$order->uPrice}}</td>
                                            <td>{{$order->qty}}</td>
                                            <td>{{$order->amount}}</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                  </div>
                                  <div class="table-responsive">
                                    <table class="table mb-0">
                                        
                                        <tbody style="float:right; font-weight:bold">
                                          <tr>
                                           
                                              <td>Order Balance: {{$order->orderBalance($order->id)}}</td>
                                          </tr>

                                        </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!-- /.box-body -->
                      
                      
                      
                    </div>
                </div>  
            </div>

           

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="box">
                
                <div class="box-body">
                    <div class="col-12 col-lg-12">
                        <div class="box">
                          
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="table-responsive">
                              <table class="table table-borderless mb-0">
                                <h5 style="font-weight:bold;">Receipts</h5>
                                <thead>
                                    <tr>
                                      <th>Date</th>
                                        <th>Payment Mode</th>
                                        <th>Reference</th>
                                        <th>Amount</th> 
                                        <th>Document</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($order->amountAllocated != null)
                                        @foreach($order->amountAllocated as $value)
                                            <!-- Add Receipt table -->
                                            <tr>
                                              <td>{{ date('d-M-Y', strtotime($value->created_at)) }}</td> 
                                              <td>{{ $value->alloc->payMode }}</td> 
                                              <td>{{ $value->alloc->reference }}</td> 
                                              <td>{{ $value->amount }}</td> 
                                              <td><a class="btn btn-sm btn-success"
                                                    title = "Payslip" target = "_blank" href="{{ route('order.allocation.receipt', $value->id)}}"
                                                    >Receipt</a>
                                              </td>    
                                            </tr>   
                                        @endforeach
                                    @endif
                                    
                                    
                                    
                                </tbody>
                                
                              </table>
                            </div>

                              
                          </div>
                          <!-- /.box-body -->
                </div>
            </div>  
        </div>
      </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->
@endsection