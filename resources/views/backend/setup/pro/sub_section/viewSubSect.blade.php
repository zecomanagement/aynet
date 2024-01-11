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
                <h3 class="box-title">Sub-Sections</h3>
                <a href="{{ route('sub.sect.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Sub Section</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Name</th>
                              <th>Project</th> 
                              <th>Section</th>
                              <th>Planted Seedlings</th>
                              <th>Acreage</th>
                              <th>No. Of Trees</th>
                              <th>Unit Price</th>
                              <th>Plant Date</th>
                              <th>Maturity Date</th>
                              <th width="15%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key=> $sub)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $sub->name }}</td>
                                <td>{{ $sub->project->name }}</td>
                                <td>{{ $sub->section->name }}</td>
                                <td>{{ $sub->species->name }}</td>
                                <td>{{ $sub->size }}</td>
                                <td>{{ $sub->trees }}</td>
                                <td>{{ $sub->uPrice }}</td>
                                <td>{{ $sub->pl_date }}</td>
                                <td>{{ $sub->mat_date }}</td>
                                
                                
                                <td>
                                    <a href="{{route('sub.sect.edit', $sub->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            
                            <th>Name</th>
                            <th>Project</th> 
                            <th>Section</th>
                            <th>Planted Seedlings</th>
                            <th>Acreage</th>
                            <th>No. Of Trees</th>
                            <th>Unit Price</th>
                            <th>Plant Date</th>
                            <th>Maturity Date</th>
                            
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