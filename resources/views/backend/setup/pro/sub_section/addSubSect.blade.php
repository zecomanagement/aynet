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
                 <h4 class="box-title">Add Sub-Sections</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('sub.sect.store')}}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Project <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="pro_id"  id="pro_id" class="form-control">
                                                        <option value="" >Select Project</option>
                                                        @foreach ($pro as $pr)
                                                            <option value="{{ $pr->id }}">{{ $pr->name }}</option> 
                                                        @endforeach  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Section <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sect_id" id="sect_id" required="" class="form-control">
                                                        <option value="" >Select Section</option>
                                                        @foreach ($sect as $st)
                                                            <option value="{{ $st->id }}">{{ $st->name }}</option> 
                                                        @endforeach  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            
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
                                                <h5>Seedling <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="sp_id"   class="form-control">
                                                        <option value="" >Select Seedling</option>
                                                        @foreach ($seed as $sd)
                                                            <option value="{{ $sd->id }}">{{ $sd->name }}</option> 
                                                        @endforeach  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Acreage<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="size"  class="form-control"   > 
                                                    
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Trees<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="trees" id="trees" class="form-control" > 
                                                    
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Unit Price<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="uPrice" id="uPrice" class="form-control"  > 
                                                    
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Value<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="value" id="total" class="form-control" readonly> 
                                                    
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Planting Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="pl_date"  class="form-control"  > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Maturity Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="mat_date"  class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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

    
<script>
    $(document).ready(function(){
        $('#pro_id').change(function(){

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
                    url: "/setup/getSect/" +id,
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('#sect_id').html(data) // Method 1
                        
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $('#uPrice').on('input paste',function(){
                let qty = $(this).val();
                let ppa = $('#trees').val();
                var total = qty * ppa;
                $('#total').val(total);
            });
        
    });
</script>
    
@endsection