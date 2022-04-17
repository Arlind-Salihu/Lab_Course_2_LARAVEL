@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Exam List</h3>
                  <a href="{{route('exam.admin.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">ID</th>
								<th>Code</th>
								<th>Subject Name</th>
								<th>Category</th>
								<th>Professor</th>
								<th>Grade</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $exam)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$exam->code}}</td>
								<td>{{$exam->name}}</td>
								<td>{{$exam->category}}</td>
								<td>{{$exam->professor}}</td>
								<td>{{$exam->grade}}</td>
								<td>
                                    <a href="{{ route('exam.edit', $exam->id) }}" class="btn btn-primary">Edit</a>
									<a href="{{ route('exam.delete', $exam->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                </td>
							</tr>
                            @endforeach
						</tbody>
						<tfoot>

						</tfoot>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->
        </section> 
		<!-- /.content -->
	  
	  </div>
  </div>

@endsection