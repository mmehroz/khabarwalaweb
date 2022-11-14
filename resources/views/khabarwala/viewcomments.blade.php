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
					<h3 class="page-title">POST Comments</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/postList')}}">Post List</a></li>
						<li class="breadcrumb-item active">Post Comments</li>
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
										<td><img alt="" title="Image" class="avatar" src="{{$val->siteusers_image}}"></td>
										<td>{{$val->siteusers_name}}</td>
										<td>{{$val->postcomment_comment}}</td>
										<td>
	                    				<a onclick="deletecomment({{$val->postcomment_id}})" title="Delete Comment"> <i class="fa fa-trash"></i></a>
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
	function deletecomment($id){
		$.get('{{ URL::to("/deletecomment")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection