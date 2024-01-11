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
                 <h4 class="box-title">Edit Project Details</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('pro.update', $editData[0]->id)}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="add_item">
                                @foreach ($editData as $edit)
                                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" value="{{ $edit->name }}"  class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Location <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="location"  required="" class="form-control">
                                                            <option value="" selected="" >Select Location</option>
                                                            @foreach ($loc as $lc)
                                                                <option value="{{ $lc->id }}"{{ ($edit->location ==
                                                                    $lc->id)? "selected":"" }}>{{ $lc->name }}</option> 
                                                            @endforeach  
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Acreage <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="size" value="{{ $edit->size}}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
    
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

    
@endsection