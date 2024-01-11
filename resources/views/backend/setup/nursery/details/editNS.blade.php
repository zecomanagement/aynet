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
                       <form method="POST" action="{{ route('ns.update', $editData[0]->id)}}">
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                            @foreach ($editData as $edit)
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Nursery <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="n_id"  required="" class="form-control">
                                                    <option value="" >Select Nursery</option>
                                                    @foreach ($nursery as $ns)
                                                        <option value="{{ $ns->id }}"{{ ($edit->n_id ==
                                                            $ns->id)? "selected":"" }}>{{ $ns->name }}</option> 
                                                    @endforeach
                                                    
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="add_item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Seedling Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="sp_id"  required="" class="form-control">
                                                            <option value="" >Select Type</option>
                                                            @foreach ($species as $sp)
                                                                <option value="{{ $sp->id }}"{{ ($edit->sp_id ==
                                                                    $sp->id)? "selected":"" }}>{{ $sp->name }}</option> 
                                                            @endforeach  
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Amount<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="amount" value="{{ $edit->amount }}" class="form-control" required=""  > 
                                                        
                                                    </div>
                                                </div> 
                                            </div>

                                            
                                        </div>
                                </div>
                            @endforeach
                                    
    
                               
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