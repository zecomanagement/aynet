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
                 <h4 class="box-title">Add Order</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('srv.ord.store')}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Member <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="mb_id"  required="" class="form-control">
                                                <option value="" selected="" >Select Member</option>
                                                @foreach ($member as $mb)
                                                    <option value="{{ $mb->id }}">{{ $mb->name }}</option> 
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
                                                <h5>Service Type <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sv_id"  id="seedType" class="form-control">
                                                        <option value="" selected="" >Select Type</option>
                                                        @foreach ($serv as $sv)
                                                            <option value="{{ $sv->id }}">{{ $sv->name }}</option> 
                                                        @endforeach  
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Price per Acre <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="ppa" id="unitPrice"  class="form-control" > 
                                                    <input type="hidden" name="type" value="service"  class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> 


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Acres <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="qty" id="qty" class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> 

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5> Price Estimate <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="amount" id="total" class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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

    

    


    <!-- adding and removing extra fields -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#seedType').change(function(){
                let seedId = $(this).val();
                $.ajax({
                    method:"GET",
                    url:"/setup/service/details/" + seedId,
                    data: seedId,
                    success: function(results){
                        $('#unitPrice').val(results);
                    }
                })
            });

            $('#qty').on('input paste',function(){
                let qty = $(this).val();
                let ppa = $('#unitPrice').val();
                var total = qty * ppa;
                $('#total').val(total);
            });
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