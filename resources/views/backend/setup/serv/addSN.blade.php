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
                 <h4 class="box-title">Add Service</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('sn.store')}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="add_item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name[]"  class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>    
                                         

                                        <div class="col-md-2" style="padding-top: 25px;">
                                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                             
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

    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">

                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <h5>Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name[]"  class="form-control" > 
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>    

                        <div class="col-md-2" style="padding-top: 25px;">
                           <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span> 
                           <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span> 
                        </div>
                     

                </div>
            </div>
        </div>
    </div>


    <!-- adding and removing extra fields -->
    <script type="text/javascript">
        $(document).ready(function(){
            var counter = 0;
            $(document).on("click", ".addeventmore",function(){
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });

            $(document).on("click", ".removeeventmore", function(event){
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            })
        });

    </script>
@endsection