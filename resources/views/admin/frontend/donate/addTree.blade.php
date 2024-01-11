@extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        
        <div class="container-full">
        <!-- Content Header (Page header) -->
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Add Trees</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('store.trees')}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name"  class="form-control"  > 
                                                    
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Price<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="price"  class="form-control"  >     
                                                </div>
                                            </div> 
                                        </div>   
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Brief Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="briefDesc" id="textarea" class="form-control"  placeholder="Narration..."></textarea>
                                                <div class="help-block"></div></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Detailed Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="longDesc" id="textarea" class="form-control"  placeholder="Narration..."></textarea>
                                                <div class="help-block"></div></div>
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5> Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image" class="form-control" id="image" > 
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                             
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