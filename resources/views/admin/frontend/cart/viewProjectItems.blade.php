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
                <h3 class="box-title">Project Order Items</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              
                              <th>Client Name</th>
                              <th>Order No.</th>
                              <th>Product</th>
                              <th>Quantity</th>
                      
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($projectItems as $key=> $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @if ($row->user_id)
                                    {{ $row->user->name }}
                                    @else
                                    -- 
                                    @endif
                                </td>
                                <td>
                                    @if ($row->order_id)
                                        {{ $row->order_id }} 
                                    @else
                                    -- 
                                    @endif
                                </td>

                                <td>
                                    @if ($row->name)
                                        {{ $row->name }}  
                                    @else
                                    -- 
                                    @endif
                                </td>

                                <td>
                                    @if ($row->quantity)
                                        {{ $row->quantity }} 
                                    @else
                                    -- 
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-danger" ><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Client Name</th>
                            <th>Order No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
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