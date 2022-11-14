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
					<h3 class="page-title">Ads List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Ads List</li>
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
			<a href="#" class="btn add-btn" onclick="addads()"><i class="fa fa-plus"></i>Add Ads</a>
		</div>
		<div class="tab-content">
			<div class="tab-pane show active" id="interview_candidates">
				<div class="payroll-table">
					<div class="table-responsive">
						<table class="table table-hover custom-table datatable" id="cfi">
							<thead>
								<tr>
									<th>Image</th>
									<th>Link</th>
									<th>View</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
									<tr>
										<td><img alt="" title="Image" class="avatar" src="{{URL::to('public/ads/')}}/{{$val->ads_image}}"></td>
										<td>{{$val->ads_link}}</td>
										<td>
										<a onclick="viewads({{$val->ads_id}})" title="View Post"> <i class="fa fa-eye"></i></a>
										</td>
										<td>
	                    				<a onclick="editads({{$val->ads_id}})" title="Edit Post"> <i class="fa fa-pencil"></i></a>
										</td>
										<td>
	                    				<a onclick="deleteads({{$val->ads_id}})" title="Delete Post"> <i class="fa fa-trash"></i></a>
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
	function addads(){
		window.location.replace('{{url("/addads")}}');
	}
	function viewads($id){
		window.location.replace('{{url("/viewads")}}/'+$id);
	}
	function editads($id){
		window.location.replace('{{url("/editads")}}/'+$id);
	}
	function deleteads($id){
		$.get('{{ URL::to("/deleteads")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection