@extends('layout.khabarwalatheme')
@section('khabarwala')
<?php
$getpath = DB::table('directory')
->select('directory.directory_path')
->get();
$sendvideo = $getpath[2]->directory_path;
?>
<style>
.img-responsive
{
	width: 24%;
    margin-left: 1%;
    margin-top: 1%;
}
</style>
<div class="page-wrapper">
    <div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">App Post</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/apppostlist')}}">Post List</a></li>
						<li class="breadcrumb-item active">View App Post</li>
					</ul>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div class="account-title">
				<p class="alert alert-success" >{{session('message')}}</p>
			</div>
		@endif
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<div><h4><li>{{ $error }}</li></h4> </div>
					@endforeach
				</ul>
			</div>
		@endif
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-0">
						<div class="card-header">
							<h4 class="card-title mb-0">View App Post</h4>
						</div>
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Title</label>
									<input type="text" name="tittle" placeholder="Enter Post Title" title="Enter Post Title"  class="form-control required_colom" id="tittle" value="{{$data->post_title}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<video width="320" height="240" controls>
										    <source src="{{$sendvideo}}{{$data->post_video}}.webm" type="video/ogg">
										</video>
								</div>
							</div>
						</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
@endsection