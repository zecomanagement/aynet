@extends('admin.admin_master')
@section('admin')

<head>
    <meta name="csrf-token" content="{{ csrf_token()}}">
</head>

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
                       <form method="POST" action="{{ route('pro.ord.store')}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">
                            
                            <div class="row">
                                <div class="col-md-2">
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
                                                <h5>Project<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="hidden" name="type" value="project"  class="form-control" >
                                                    <select name="pr_id[]" id="pr_id"  class="form-control">
                                                        <option value="" selected="" >Select Type</option>
                                                        @foreach ($pro as $pr)
                                                            <option value="{{ $pr->id }}">{{ $pr->name }}</option> 
                                                        @endforeach  
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Section<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sect_id[]" id="sect_id"  class="form-control">
                                                        <option value="">Select Section</option>
                                                   
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Sub-Section<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sub_sect_id[]" id="sub_sect_id"  class="form-control">
                                                        <option value="">Select Subsection</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Proposed Value <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="amount[]"  class="form-control" > 
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

        $(document).ready(function(){
            $('#pr_id').change(function(){

                //ajax setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                // Find the specific unit id
                $('#sect_id').empty();
                    var id = $(this).val();
                    //alert(id);

                    //ajax call for Section

                    $.ajax({
                        type: "GET",
                        url: "/order/getSect/" +id,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('#sect_id').html(data) // Method 1
                            
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });

                $('#sect_id').change(function(){
                //ajax call for subsections
                
                    var id = $(this).val();
                    

                    $.ajax({
                        type: "GET",
                        url: "/order/getSubSect/" +id,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('#sub_sect_id').html(data) // Method 1     
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                });
            });
        });

    </script>
@endsection