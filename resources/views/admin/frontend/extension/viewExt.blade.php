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
                <h3 class="box-title">Land Preparation List</h3>
                
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
                              <th>Sub County</th>
                              <th>Ward</th>
                              <th>Date</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($extension as $key=> $ext)
                            <tr>
                                <td> {{ $key+1 }}</td>
                                <td> {{ $ext->name }} </td>
                                <td>{{ $ext->mobile }}</td>
                                <td>{{ $ext->email }}</td>
                                <td>{{ $ext->county->county_name }}</td>
                                <td>{{ $ext->subCounty->sub_county_name }}</td>
                                <td>{{ $ext->ward->ward_name }}</td>
                                
                                <td>{{ date('d-m-Y', strtotime($ext->date)) }}</td>
                                
                                <td>
                                    <a href="{{route('edit.ext', $ext->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
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
                              <th>Sub County</th>
                              <th>Ward</th>
                              <th>Date</th>
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