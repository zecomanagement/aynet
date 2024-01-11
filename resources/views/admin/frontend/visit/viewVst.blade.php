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
                <h3 class="box-title">Visit List</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Client Name</th>
                              <th>Visit Date</th>
                              <th>Phone Number</th>
                              <th>Email</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($visit as $key=> $vst)
                            <tr>
                                <td> {{ $key+1 }}</td>
                                <td> {{ $vst->name }} </td>
                                <td>{{ date('d-m-Y', strtotime($vst->date)) }}</td>
                                <td>{{ $vst->mobile }}</td>
                                <td>{{ $vst->email }}</td>
                                
                                <td>
                                    <a href="{{route('edit.visit', $vst->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Client Name</th>
                            <th>Visit Date</th>
                            <th>Phone Number</th>
                            <th>Email</th>
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