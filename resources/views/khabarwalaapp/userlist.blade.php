@extends('layout.khabarwalatheme')
@section('khabarwala')
<?php
$getpath = DB::table('directory')
->select('directory.directory_path')
->get();
$profileimage = $getpath[0]->directory_path;
?>
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
					<h3 class="page-title">App User List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">App User List</li>
					</ul>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div class="account-title">
				<p class="alert alert-success" >{{session('message')}}</p>
			</div>
		@endif
		<div class="tab-content">
			<div class="tab-pane show active" id="interview_candidates">
				<div class="payroll-table">
					<div class="table-responsive">
						<table class="table table-hover custom-table datatable" id="cfi">
							<thead>
								<tr>
									<th>Image</th>
									<th>Name</th>
									<th>Email</th>
									<th>Profile</th>
									<th>Block</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
									<tr>
										<td><img alt="" title="Image" class="avatar" src="{{$profileimage}}{{$val->user_profilepicture}}"></td>
										<td>{{$val->user_fullname}}</td>
										<td>{{$val->user_email}}</td>
										<td>
	                    				<a onclick="userprofile('{{$val->verify_token}}')" title="User Profile"> <i class="fa fa-user-md"></i></a>
										</td>
										<td>
	                    				<a onclick="blockappuser({{$val->user_id}})" title="Block"> <i class="fa fa-ban"></i></a>
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
	function blockappuser($id){
		$.get('{{ URL::to("/blockappuser")}}/'+$id);
		window.location.reload();
	}
	function userprofile($token){
		window.location.replace('{{ URL::to("/userprofile")}}/'+$token);
	}
</script>
@endsection