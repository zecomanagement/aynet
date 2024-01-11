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

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Cart Orders</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th>
                              <th>Amount</th>
                              
                              <th>Delivery Status</th>
                              <th width="10%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($cartOrder as $key=> $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $row->user->name }}</td>
                                
                                <td>{{ $row->total }}</td>
                    
                                <td>{{ $row->delivery_status }}</td>
                                
                                <td>
                                  
                                    <a href="{{route('cart.order.edit', $row->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('cart.order.show', $row->id)}}" class="btn btn-info" ><i class="fa-solid fa-eye"></i></a>
                                    
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Amount</th>
                            
                            <th>Delivery Status</th>
                            <th>Action</th>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->
@endsection