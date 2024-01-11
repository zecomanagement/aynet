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
                <h3 class="box-title">Products</h3>
                <a href="{{ route('plot.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Plot</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th>
                              
                              <th>Unit Price</th>
                              <th>Number in Stock</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($plot as $key=> $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $row->name }}</td>
                            
                                <td>{{ $row->unit_price }}</td>
                                <td>{{ $row->amount }}</td>
                                <td>
                                    <a href="{{route('plot.edit', $row->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-danger" ><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            
                            <th>Unit Price</th>
                            <th>Number in Stock</th>
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