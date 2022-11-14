@extends('layout.khabarwalatheme')
@section('khabarwala')
<div class="page-wrapper">
    <div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">POST</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/postList')}}">Post List</a></li>
						<li class="breadcrumb-item active">View Post</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" onclick="editpost({{$data['postdata']->post_id}})"><i class="fa fa-pencil"></i>Edit Post</a>
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
							<h4 class="card-title mb-0">View Post</h4>
						</div>
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Title</label>
									<input type="text" name="tittle" placeholder="Enter Post Title" title="Enter Post Title"  class="form-control required_colom" id="tittle" value="{{$data['postdata']->post_title}}" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea rows="5" cols="5" class="form-control" placeholder="Enter Post Description" title="Enter Post Description" id="description"  name="description" style="height: 125px" readonly>{{$data['postdata']->post_description}}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Post Category</label>
									<input type="text" name="tittle" placeholder="Select Post Category" title="Select Post Category"  class="form-control required_colom" id="tittle" value="{{$data['postdata']->postcategory_name}}" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Video Link</label>
									<input type="text" name="videolink" placeholder="Enter Video Link To Share" title="Enter Video Link To Share"  class="form-control required_colom"  id="videolink" value="{{$data['postdata']->post_videolink}}" readonly>
								</div>
							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<center><label class="col-form-label" style="color: red; font-size: 30px">POST IMAGES</label></center>
								</div>
							</div>
						</div>
						<div class="row" style="margin-left: 20px">
							@if(isset($data['imagedata']))
							@foreach($data['imagedata'] as $myimg)
			                <?php
			                	$task = DB::table('post')
								->where('post_id','=',$data['postdata']->post_id)
								->where('status_id','!=',2)
								->select('post.post_id')
								->first();
								foreach ($task as $tasks) {
									$imgdatefolder = $tasks;
								}
								foreach ($myimg as $myimgs) {
									$getimg = $myimgs;
								}
								// print_r($getimg);die;
			                 ?><br>
			                 <div id="img">
			                    <img id="{{$getimg}}" class="img-fluid img-thumbnail" src="{{ URL::to('public/postimages/')}}/{{$imgdatefolder}}/{{$getimg}}" style="height: 225px;width: 225px" onclick="removeimage(this.id)"/>
			                </div>
			                </a>
							@endforeach
							@endif
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<center><label class="col-form-label" style="color: red; font-size: 30px">POST VIDEOS</label></center>
								</div>
							</div>
						</div>
						<div class="row" style="margin-left: 20px">
							@if(isset($data['videodata']))
							@foreach($data['videodata'] as $myvid)
			                <?php
			                	$tasks = DB::table('post')
								->where('post_id','=',$data['postdata']->post_id)
								->where('status_id','!=',2)
								->select('post.post_id')
								->first();
								foreach ($tasks as $taskss) {
									$videodatefolder = $taskss;
								}
								foreach ($myvid as $myvids) {
									$getvid = $myvids;
								}
							?><br>
			                <div id="vid">
							<video width="320" height="240" id="{{$getvid}}" onclick="removevideo(this.id)" controls>
							    <source src={{ URL::to('public/postvideos/')}}/{{$videodatefolder}}/{{$getvid}} type=video/ogg>
							    
					    	</video>
					    	</div>
					    	@endforeach
					    	@endif
					    </div>
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
	</script>
@endsection