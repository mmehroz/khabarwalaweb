@extends('layout.khabarwalatheme')
@section('khabarwala')
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
					<h3 class="page-title">POST</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/postList')}}">Post List</a></li>
						<li class="breadcrumb-item active">Edit Post</li>
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
							<h4 class="card-title mb-0">Edit Post</h4>
						</div>
						<form action="{{ URL::to('/submiteditpost')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
                		<input type="hidden" name="hdnpostid" id="hdnpostid" value="{{$data['postdata']->post_id}}" class="form-control"/>
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Title</label>
									<input type="text" name="tittle" placeholder="Enter Post Title" title="Enter Post Title"  class="form-control required_colom" id="tittle" value="{{$data['postdata']->post_title}}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea rows="5" cols="5" class="form-control" placeholder="Enter Post Description" title="Enter Post Description" id="description"  name="description" style="height: 125px" required>{{$data['postdata']->post_description}}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Post Category</label>
									<select class="form-control " placeholder="Select Post Category" name="postcategory" title="Select Post Category"  required>
										@foreach($data['categorydata'] as $category)
		                        		<option @if ($data['postdata']->postcategory_id == $category->postcategory_id) {{"selected"}} @endif  value={{$category->postcategory_id}}>{{$category->postcategory_name}}</option>
		                    			@endforeach 
		                            </select>
		                		</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Video Link</label>
									<input type="text" name="videolink" placeholder="Enter Video Link To Share" title="Enter Video Link To Share"  class="form-control required_colom"  id="videolink" value="{{$data['postdata']->post_videolink}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Image</label>
									<input type="file" id="gallery-photo-add" name="input[]" title="Click To Upload Image" accept="image/x-png,image/gif,image/jpeg,image/*" class="form-control" multiple>
								</div>
								<label class="col-form-label" style="color: red">Select Only Image File (You May Upload Multiple Image At Once)</label>
								<div class="gallery"></div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Video</label>
									<input type="file" name="video[]" title="Click To Upload Video" accept="video/mp4,video/x-m4v,video/*" class="form-control required_colom" id="videofile" value="" multiple>
								</div>
								<label class="col-form-label" style="color: red">Select Only Video File (You May Upload Multiple Video At Once)</label>
							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-md-11">
								<div class="form-group">
									
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
					</form>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<center><label class="col-form-label" style="color: red; font-size: 30px">POST IMAGES | CLICK ON IMAGE TO REMOVE</label></center>
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
									<center><label class="col-form-label" style="color: red; font-size: 30px">POST VIDEOS | CLICK ON VIDEO TO REMOVE</label></center>
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
function removeimage($name){
	$.get('{{ URL::to("/removeimage")}}/'+$name);
}
function removevideo($name){
	$.get('{{ URL::to("/removevideo")}}/'+$name);
}
$(document).on('click','#img',function(){
  $('#img').remove();
});
$(document).on('click','#vid',function(){
  $('#vid').remove();
});
$(function() {
    // Multiple images preview in browser
   	var imagesPreview = function(input, placeToInsertImagePreview) {
	if (input.files) {
            var filesAmount = input.files.length;
		for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
				reader.onload = function(event) {
                    $($.parseHTML('<img>')).addClass("img-responsive").attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
            // document.getElementById("divimg").style.display = "none";
        }
    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
	</script>
@endsection