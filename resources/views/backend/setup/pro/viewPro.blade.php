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
                <h3 class="box-title">Our Projects</h3>
                <a href="{{ route('pro.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Project</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th> 
                              <th>Location</th>
                              <th>Acreage</th>
                              
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key=> $pro)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->locName->name }}</td>
                                <td>{{ $pro->size }}</td>
                                
                                
                                <td>
                                    <a href="{{ route('pro.edit', $pro->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            
                            <th>Name</th>
                            <th>Location</th>
                            <th>Acreage</th>
                            
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