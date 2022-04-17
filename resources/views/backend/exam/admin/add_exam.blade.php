@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
          
      <!-- Main content -->
		<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Exam</h4>

   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

    <form method="POST" action="{{route('exam.store')}}">
      @csrf
        <div class="row">

          <div class="col-12">
              
            <div class="row">

             <div class="col-md-6">
           <div class="form-group">
			    <h5>Category <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="category" id="category" required class="form-control">
					    <option value="">Select Category</option>
					    <option value="Regular">Regular</option>
					    <option value="Not Regular">Not Regular</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
           <div class="form-group">
			    <h5>Professor <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="professor" id="professor" required class="form-control">
					    <option value="">Select Professor</option>
					    <option value="Filan Fisteku 1">Filan Fisteku 1</option>
					    <option value="Filan Fisteku 2">Filan Fisteku 2</option>
              <option value="Filan Fisteku 3">Filan Fisteku 3</option>
					    <option value="Filan Fisteku 4">Filan Fisteku 4</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
           <div class="form-group">
			    <h5>Code <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="code" id="code" required class="form-control">
					    <option value="">Select Code</option>
					    <option value="ABC">ABC</option>
              <option value="ACB">ACB</option>
					    <option value="BAC">BAC</option>
              <option value="BCA">BCA</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
           <div class="form-group">
			    <h5>ECTS <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="ects" id="ects" required class="form-control">
					    <option value="">Select ECTS</option>
					    <option value="1">1</option>
              <option value="2">2</option>
					    <option value="3">3</option>
              <option value="4">4</option>
					    <option value="3">5</option>
              <option value="4">6</option>
              <option value="4">15</option>
				    </select>
                    </div>
				</div>
           </div>

           <div class="col-md-6">
           <div class="form-group">
			    <h5>Subject Name <span class="text-danger">*</span></h5>
				<div class="controls">
				    <select name="name" id="name" required class="form-control">
					    <option value="">Select Subject Name</option>
					    <option value="LAB 1">LAB 1</option>
					    <option value="LAB 2">LAB 2</option>
              <option value="SHK1">SHK1</option>
              <option value="SHK2">SHK2</option>
				    </select>
                    </div>
				</div>
           </div>
       </div>
       <!-- End Row -->

       <div class="row">
       <div class="col-md-6">
                <div class="form-group">
                    <h5>Grade <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="grade" class="form-control" required=""></div>
                </div>
           </div>
       </div>
       <!-- End Row -->
               <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">
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