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
					<h3 class="page-title">App Post Comments</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/apppostlist')}}">Post List</a></li>
						<li class="breadcrumb-item active">App Post Comments</li>
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
									<th>Comment</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
									<tr>
										<td><img alt="" title="Image" class="avatar" src="{{$profileimage}}{{$val->user_profilepicture}}"></td>
										<td>{{$val->user_fullname}}</td>
										<td>{{$val->comment_text}}</td>
										<td>
	                    				<a onclick="deleteappcomment({{$val->comment_id}})" title="Delete Comment"> <i class="fa fa-trash"></i></a>
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
	function deleteappcomment($id){
		$.get('{{ URL::to("/deleteappcomment")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection