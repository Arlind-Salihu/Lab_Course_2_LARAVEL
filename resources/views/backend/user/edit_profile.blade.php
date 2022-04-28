@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">
	  <div class="container-full">
          
      <!-- Main content -->
		<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Manage Profile</h4>

   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

    <form method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
      @csrf
        

       <div class="row">
           <div class="col-md-6">
                <div class="form-group">
                    <h5>Name <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="name" class="form-control" value="{{ $editData -> name}}" required=""></div>
                </div>
           </div>
           <div class="col-md-6">
           <div class="form-group">
                    <h5>E-mail <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="email" name="email" class="form-control" value="{{ $editData -> email}}" required=""></div>
                </div>
           </div>
       </div>
       <!-- End Row -->

       <div class="row">
           <div class="col-md-6">
                <div class="form-group">
                    <h5>Mobile Number <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="mobile" class="form-control" value="{{ $editData -> mobile}}" required=""></div>
                </div>
           </div>
           <div class="col-md-6">
           <div class="form-group">
                    <h5>Address <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="address" class="form-control" value="{{ $editData -> address}}" required=""></div>
                </div>
           </div>
       </div>
       <!-- End Row -->

       <div class="row">

          <div class="col-12">
              
            <div class="row">

             <div class="col-md-6">
           <div class="form-group">
			    <h5>Gender <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="gender" id="gender" required class="form-control">
					    <option value="">Select Role</option>
					    <option value="Male" {{( $editData -> gender == "Male" ? "selected" : "")}}>Male</option>
					    <option value="Female" {{( $editData -> gender == "Female" ? "selected" : "")}}>Female</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
                <div class="form-group">
                    <h5>Profile Image <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="file" name="image" class="form-control" id="image"></div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <img id="showImage" src="{{ (!empty($admin -> image))? url ('upload/admin_images/'.$admin -> image):url('upload/no_image.jpg') }}"
                        alt="" style="width:100px; height:100px; border: 1px solid #000000">
                    </div>
                </div>
           </div>

       </div>
       <!-- End Row -->

               <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
               </div>
            </div>
       </div>
    </form>
    </div>
</form>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>
<!-- /.content -->


	  </div>
  </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
           var reader = new FileReader();
           reader.onload = function(e){
               $('#showImage').attr('src', e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection