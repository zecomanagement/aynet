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
                <h3 class="box-title">Project Sections</h3>
                <a href="{{ route('sect.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Section</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Project</th>
                              <th>Section Name</th>
                              <th>Acreage</th>
                              <th>Plant Date</th>
                              <th>Maturity Date</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key=> $pr)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> {{ $pr->project->name }} </td>
                                <td>{{ $pr->name }}</td>
                                <td>{{ $pr->size }}</td>
                                <td>{{ $pr->pl_date }}</td>
                                <td>{{ $pr->mat_date }}</td>
                                <td>
                                    <a href="{{ route('sect.edit', $pr->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('sect.delete', $pr->id)}}" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Project</th>
                            <th>Section Name</th>
                            <th>Acreage</th>
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