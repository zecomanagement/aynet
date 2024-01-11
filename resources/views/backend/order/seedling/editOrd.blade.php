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
                 <h4 class="box-title">Edit Seedlings Order</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('sd.ord.update', $editData[0]->id)}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                                @foreach ($editData as $edit)
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <h5>Member <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="mb_id"  required="" class="form-control">
                                                    <option value="" selected="" >Select Member</option>
                                                    @foreach ($member as $mb)
                                                        <option value="{{ $mb->id }}"{{ ($edit->mb_id ==
                                                            $mb->id)? "selected":"" }}>{{ $mb->name }}</option> 
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
                                                <h5>Seedling Type <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sp_id"  id="seedType" class="form-control">
                                                        <option value="" selected="" >Select Type</option>
                                                        @foreach ($seed as $sd)
                                                            <option value="{{ $sd->id }}"{{ ($edit->sp_id ==
                                                                $sd->id)? "selected":"" }}>{{ $sd->name }}</option> 
                                                        @endforeach  
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Unit Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="uPrice" id="unitPrice" value="{{ $edit->uPrice }}" class="form-control" > 
                                                    <input type="hidden" name="type" value="seedling"  class="form-control" >
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> 


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Quantity <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="qty" id="qty" value="{{ $edit->qty }}" class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Value <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="amount" id="amount" value="{{ $edit->amount }}" class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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