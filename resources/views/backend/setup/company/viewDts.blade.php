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
                <h3 class="box-title">Company Info</h3>
                <a href="{{ route('details.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Details</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th>
                              <th>Country</th>
                              <th>Location</th>
                              
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key=> $details)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $details->name }}</td>
                                <td>{{ $details->country }}</td>
                                <td>{{ $details->phLocation }}</td>
                                
                                <td>
                                    <a href="{{ route('details.edit', $details->id) }}" class="btn btn-info" >Edit</a>
                                    
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            
                            <th>Name</th>
                            <th>Country</th>
                            <th>Location</th>
                            
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