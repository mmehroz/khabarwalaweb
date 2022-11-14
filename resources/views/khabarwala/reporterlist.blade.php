@extends('layout.khabarwalatheme')
@section('khabarwala')
<style type="text/css">
	.card {
	    padding: 1.25rem;
	    flex: 1 1 auto;
	}
</style>
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Reporter List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Reporter List</li>
					</ul>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div class="account-title">
				<p class="alert alert-success" >{{session('message')}}</p>
			</div>
		@endif
		<div class="col-auto float-right ml-auto">
			<a href="#" class="btn add-btn" onclick="addreporter()"><i class="fa fa-plus"></i>Add Reporter</a>
		</div>
		<div class="tab-content">
			<div class="tab-pane show active" id="interview_candidates">
				<div class="payroll-table">
					<div class="table-responsive">
						<table class="table table-hover custom-table datatable" id="cfi">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Role</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
									<tr>
										<td>{{$val->users_name}}</td>
										<td>{{$val->users_email}}</td>
										@if($val->role_id == 2)
										<td>Reporter (Full Access)</td>
										@endif
										@if($val->role_id == 3)
										<td>Reporter (Restrict Access)</td>
										@endif
										<td>
	                    				<a onclick="editreporter({{$val->users_id }})" title="Edit Reporter"> <i class="fa fa-pencil"></i></a>
										</td>
										<td>
	                    				<a onclick="deletereporter({{$val->users_id }})" title="Delete Reporter"> <i class="fa fa-trash"></i></a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function addreporter(){
		window.location.replace('{{url("/addreporter")}}');
	}
	function editreporter($id){
		window.location.replace('{{url("/editreporter")}}/'+$id);
	}
	function deletereporter($id){
		$.get('{{ URL::to("/deletereporter")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection