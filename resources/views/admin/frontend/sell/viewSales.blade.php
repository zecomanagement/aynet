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
                <h3 class="box-title">Tree Sales List</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Client Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>County</th>
                              <th>Ward</th>
                              <th>Tree Name</th>
                              <th>Quantity</th>
                              <th>Unit Price</th>
                              <th>Total</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($sales as $key=> $sale)
                            <tr>
                                <td> {{ $key+1 }}</td>
                                <td> {{ $sale->name }} </td>
                                <td>{{ $sale->mobile }}</td>
                                <td>{{ $sale->email }}</td>
                                <td>{{ $sale->county->county_name }}</td>
                                <td>{{ $sale->ward->ward_name }}</td>
                                <td>{{ $sale->tr_name }}</td>
                                <td>{{ $sale->quantity }}</td>
                                <td>{{ $sale->price }}</td>
                                <td>{{ $sale->total }}</td>
                                
                                
                                <td>
                                    <a href="" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Client Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>County</th>
                              <th>Ward</th>
                              <th>Tree Name</th>
                              <th>Quantity</th>
                              <th>Unit Price</th>
                              <th>Total</th>
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