@extends('user.user_master')
@section('user')

<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>Exams</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
						<thead>
							<tr>
								<th width="5%">ID</th>
								<th>Code</th>
								<th>Subject Name</th>
								<th>ECTS</th>
								<th>Category</th>
								<th>Professor</th>
								<th>Grade</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $exam)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$exam->code}}</td>
								<td>{{$exam->name}}</td>
								<td>{{$exam->ects}}</td>
								<td>{{$exam->category}}</td>
								<td>{{$exam->professor}}</td>
								<td>{{$exam->grade}}</td>
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