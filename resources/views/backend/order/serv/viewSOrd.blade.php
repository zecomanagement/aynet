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
                <h3 class="box-title">Service Orders</h3>
                <a href="{{ route('srv.ord.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Order</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Client Name</th>
                              <th>Service</th>
                              <th>Price per Acre</th>
                              <th>Acres</th>
                              <th>Amount</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($order as $key=> $ord)
                            <tr>
                                <td><a href="{{url('/order/sv/prof/'.$ord->id)}}">{{ $key+1 }}</a></td>
                                <td> {{ $ord->client->name }} </td>
                                <td>{{ $ord->service->name }}</td>
                                <td>{{ $ord->service->ppa }}</td>
                                <td>{{ $ord->qty }}</td>
                                <td>{{ $ord->amount }}</td>
                                <td>
                                    <a href="{{ route('srv.ord.edit', $ord->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('srv.ord.delete', $ord->id)}}" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                
                            </tr>   
                          @endforeach
                          
                          
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Client Name</th>
                            <th>Service</th>
                            <th>Price per Acre</th>
                            <th>Acres</th>
                            <th>Amount</th>
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