@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
          
      <!-- Main content -->
		<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit User</h4>

   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

    <form method="POST" action="{{route('user.update', $editData->id)}}">
      @csrf
        <div class="row">

          <div class="col-12">
              
            <div class="row">

             <div class="col-md-6">
           <div class="form-group">
			    <h5>Role <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="role" id="role" required class="form-control">
					    <option value="">Select Role</option>
					    <option value="Admin" {{( $editData -> role == "Admin" ? "selected" : "")}}>Admin</option>
					    <option value="Student" {{( $editData -> role == "Student" ? "selected" : "")}}>Student</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
                <div class="form-group">
                    <h5>User Name <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="name" class="form-control" value={{ $editData -> name}} required=""></div>
                </div>
           </div>

       </div>
       <!-- End Row -->

       <div class="row">
           <div class="col-md-6">
                <div class="form-group">
                    <h5>E-mail <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="email" name="email" class="form-control" value={{ $editData -> email}} required=""></div>
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

@endsection