@extends('layout.khabarwalatheme')
@section('khabarwala')
<?php
$getpath = DB::table('directory')
->select('directory.directory_path')
->get();
$sendthumbnail = $getpath[3]->directory_path;
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
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">App Post List</h3>
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
									<th>Thumbnail</th>
									<th>Title</th>
									<th>Likes</th>
									<th>Comments</th>
									<th>View</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
								<?php
								$postlikecount = DB::connection('mysql2')->table('likee')
	                            ->where('post_id','=',$val->post_id)
	                            ->where('status_id','=',1)
	                            ->select('likee.*')
	                            ->count();
	                            $postcommentscount = DB::connection('mysql2')->table('comment')
	                            ->where('post_id','=',$val->post_id)
	                            ->where('status_id','=',1)
	                            ->select('comment.*')
	                            ->count();
								?>
									<tr>
										<td><img alt="" title="Image" class="avatar" src="{{$sendthumbnail}}{{$val->post_thumbnail}}"></td>
										<td>{{$val->post_title}}</td>
										<td>{{$postlikecount}}</td>
										<td><a onclick="viewappcomments({{$val->post_id}})" title="View Comments" style="cursor: pointer;">{{$postcommentscount}}</a></td>
										<td>
										<a onclick="viewapppost({{$val->post_id}})" title="View Post"> <i class="fa fa-eye"></i></a>
										</td>
										<td>
	                    				<a onclick="deleteapppost({{$val->post_id}})" title="Delete Post"> <i class="fa fa-trash"></i></a>
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
	function viewappcomments($id){
		window.location.replace('{{url("/viewappcomments")}}/'+$id);
	}
	function viewapppost($id){
		window.location.replace('{{url("/viewapppost")}}/'+$id);
	}
	function deleteapppost($id){
		$.get('{{ URL::to("/deleteapppost")}}/'+$id);
		window.location.reload();
	}
</script>
@endsection