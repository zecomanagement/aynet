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
                 <h4 class="box-title">Edit Extension</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('update.ext', $editExt->id)}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="add_item">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" value="{{ $editExt->name }}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                            </div>    
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Phone Number <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" value="{{ $editExt->mobile }}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" value="{{ $editExt->email }}" class="form-control" > 
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
                                                    <h5>Location <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="location" value="{{ $editExt->location }}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                            </div>    
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Nearest Landmark <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="location_desc" value="{{ $editExt->location_desc }}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="date" value="{{ $editExt->date }}" class="form-control" > 
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
 
                            </div>
                                    
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                               
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