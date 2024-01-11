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
                <h3 class="box-title">Nurseries</h3>
                <a href="{{ route('nrs.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Nursery</a>
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
                              
                              
                              
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key=> $nrs)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $nrs->name }}</td>
                                <td>{{ $nrs->loc->name }}</td>
                                
                               
                                
                                <td>
                                    <a href="{{ route('nrs.edit', $nrs->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('nrs.delete', $nrs->id)}}" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            
                            <th>Name</th>
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