@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        
        <div class="container-full">
        <!-- Content Header (Page header) -->
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Edit Details</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('plot.update', $editPlot->id)}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="add_item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name"  class="form-control" value="{{$editPlot->name}}"> 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>  
                                        
                                         
                                        

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Unit Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="unit_price"  class="form-control" value="{{$editPlot->unit_price}}" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
 
                                    </div>

                                    <div class="row">
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>No. of Items <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="amount" class="form-control" value="{{$editPlot->amount}}"> 
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Brief Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="brief_desc" id="textarea" class="form-control"  placeholder="Narration...">{{$editPlot->brief_desc}}</textarea>
                                                <div class="help-block"></div></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Detailed Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="long_desc" id="textarea" class="form-control"  placeholder="Narration...">{{$editPlot->long_desc}}</textarea>
                                                <div class="help-block"></div></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Product Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image" class="form-control" id="image" > 
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div> <!-- End row -->
                            </div>
                                    
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                               
                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>

        </div>
    </div>

@endsection