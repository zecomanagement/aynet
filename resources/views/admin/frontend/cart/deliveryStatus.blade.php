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
                <h3 class="box-title">Delivery Status Report</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th>
                              <th>Mobile</th>
                              <th>County</th>
                              <th>Sub County</th>
                              <th>Ward</th>
                              <th>Address</th>
                              <th>Order Amount</th>
                              <th>Status</th>
                              <th width="10%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($status as $key=> $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->user->mobile }}</td>
                                <td>{{ $row->county->county_name }}</td>
                                <td>{{ strtoupper($row->subCounty->sub_county_name) }}</td>
                                <td>{{ strtoupper($row->ward->ward_name) }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->order->total }}</td>
                                <td>{{ $row->order->delivery_status }}</td>
                                
                                <td>
                                  
                                    <a href="" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Mobile</th>
                              <th>County</th>
                              <th>Sub County</th>
                              <th>Ward</th>
                              <th>Address</th>
                              <th>Order Amount</th>
                              <th>Status</th>
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