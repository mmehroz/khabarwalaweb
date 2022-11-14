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
					<h3 class="page-title">Post List</h3>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div class="account-title">
				<p class="alert alert-success" >{{session('message')}}</p>
			</div>
		@endif
		<div class="col-auto float-right ml-auto">
			<a href="#" class="btn add-btn" onclick="addpost()"><i class="fa fa-plus"></i>Add Post</a>
		</div>
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
									<th>Likes</th>
									<th>Dis Likes</th>
									<th>Comments</th>
									<th>Important</th>
									<th>View</th>
									<th>Edit</th>
									<th>Delete</th>
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
								$postlikecount = DB::table('postact')
	                            ->where('post_id','=',$val->post_id)
	                            ->where('postact_type','=',"Like")
	                            ->select('postact.*')
	                            ->count();
	                            $postdislikecount = DB::table('postact')
	                            ->where('post_id','=',$val->post_id)
	                            ->where('postact_type','=',"DisLike")
	                            ->select('postact.*')
	                            ->count();
	                            $postcommentscount = DB::table('postcomment')
	                            ->where('post_id','=',$val->post_id)
	                            ->where('status_id','=',1)
	                            ->select('postcomment.*')
	                            ->count();
								?>
									<tr>
										@if($postimage != "no_image.jpg")
										<td><img alt="" title="Post Image" class="avatar" src="{{URL::to('public/postimages/')}}/{{$val->post_id}}/{{$postimage}}"></td>
										@else
										<td><img alt="" title="Post Image" class="avatar" src="{{URL::to('public/adminprofile/no_image.jpg')}}"></td>
										@endif
										<td>{{$val->post_title}}</td>
										<td>{{$val->postcategory_name}}</td>
										<td>{{$postlikecount}}</td>
										<td>{{$postdislikecount}}</td>
										<td><a onclick="viewcomments({{$val->post_id}})" title="View Comments" style="cursor: pointer;">{{$postcommentscount}}</a></td>
										<td>
										@if($val->post_important == null)
										<a onclick="markimportant({{$val->post_id}})" title="Mark Important"> <i class="fa fa-star-o"></i></a>
										@else
										<a> <i class="fa fa-star"></i></a>
										@endif
										</td>
										<td>
										<a onclick="viewpost({{$val->post_id}})" title="View Post"> <i class="fa fa-eye"></i></a>
										</td>
										<td>
	                    				<a onclick="editpost({{$val->post_id}})" title="Edit Post"> <i class="fa fa-pencil"></i></a>
										</td>
										<td>
	                    				<a onclick="deletepost({{$val->post_id}})" title="Delete Post"> <i class="fa fa-trash"></i></a>
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
	function viewcomments($id){
		window.location.replace('{{url("/viewcomments")}}/'+$id);
	}
	function markimportant($id){
		swal("Successfully!", "Mark As Importat!", "success");
		$.get('{{ URL::to("/markimportant")}}/'+$id);
	}
	function addpost(){
		window.location.replace('{{url("/addpost")}}');
	}
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
</script>
@endsection