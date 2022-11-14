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
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Restrict Reportaer Post List</h3>
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
									<th>Title</th>
									<th>Category</th>
									<th>View</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Approved</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
								<?php
								$getfirstpostimage = DB::table('postimage')
								->where('post_id','=',$val->post_id)
								->where('status_id','=',1)
								->select('postimage.postimage_name')
								->first();
								if (isset($getfirstpostimage)) {
									foreach ($getfirstpostimage as $getfirstpostimages) {
									$postimage = $getfirstpostimages;
								}
								}else{
									$postimage = "no_image.jpg";	
								}
								?>
									<tr>
										@if($postimage != "no_image.jpg")
										<td><img alt="" title="Post Image" class="avatar" src="{{URL::to('public/postimages/')}}/{{$val->post_id}}/{{$postimage}}"></td>
										@else
										<td><img alt="" title="Post Image" class="avatar" src="{{URL::to('public/adminprofile/no_image.jpg')}}"></td>
										@endif
										<td>{{$val->post_title}}</td>
										<td>{{$val->postcategory_name}}</td>
										<td>
										<a onclick="viewpost({{$val->post_id}})" title="View Post"> <i class="fa fa-eye"></i></a>
										</td>
										<td>
	                    				<a onclick="editpost({{$val->post_id}})" title="Edit Post"> <i class="fa fa-pencil"></i></a>
										</td>
										<td>
	                    				<a onclick="deletepost({{$val->post_id}})" title="Delete Post"> <i class="fa fa-trash"></i></a>
										</td>
										<td>
										<a onclick="approvepost({{$val->post_id}})" title="Approved"> <i class="fa fa-check"></i></a>
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
	function editpost($id){
		window.location.replace('{{url("/editpost")}}/'+$id);
	}
	function viewpost($id){
		window.location.replace('{{url("/viewpost")}}/'+$id);
	}
	function deletepost($id){
		$.get('{{ URL::to("/deletepost")}}/'+$id);
		window.location.reload();
	}
	function approvepost($id){
		swal("Successfully!", "Post Approved", "success");
		$.get('{{ URL::to("/approvepost")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection