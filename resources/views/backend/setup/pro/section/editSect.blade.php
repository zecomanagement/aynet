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
                 <h4 class="box-title">Edit Sections</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('sect.update', $editData[0]->id)}}">
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                                @foreach ($editData as $edit)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Project <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="pro_id"  required="" class="form-control">
                                                        <option value="" >Select Project</option>
                                                        @foreach ($pro as $pr)
                                                            <option value="{{ $pr->id }}"{{ ($edit->pro_id ==
                                                                $pr->id)? "selected":"" }}>{{ $pr->name }}</option> 
                                                        @endforeach  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="add_item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" value="{{ $edit->name }}" class="form-control" required=""  > 
                                                        
                                                    </div>
                                                </div> 
                                            </div>
    
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Acreage<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="size" value="{{ $edit->size }}" class="form-control" required=""  > 
                                                        
                                                    </div>
                                                </div> 
                                            </div>
    
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Planting Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="pl_date" value="{{ $edit->pl_date }}"  class="form-control" required="" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Maturity Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="mat_date" value="{{ $edit->mat_date }}" class="form-control" required="" > 
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
                                @endforeach
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