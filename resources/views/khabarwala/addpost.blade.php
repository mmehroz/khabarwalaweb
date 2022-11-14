@extends('layout.khabarwalatheme')
@section('khabarwala')
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/dropzone/css/dropzone.css" />
		<link rel="stylesheet" href="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/codemirror/theme/monokai.css" />
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/modernizr/modernizr.js"></script> -->
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
						<li class="breadcrumb-item active">Add Post</li>
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
							<h4 class="card-title mb-0">Add Post</h4>
						</div>
						<form action="{{ URL::to('/submitaddpost')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Select Language</label><br>
									  <input type="radio" name="language" required value="Urdu" > Urdu
									  <input type="radio" name="language" required value="English"> English
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Title</label>
									<input type="text" name="tittle" placeholder="Enter Post Title" title="Enter Post Title"  class="form-control required_colom" required id="tittle" dir="rtl" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Description</label>
									<textarea rows="5" cols="5" class="form-control" placeholder="Enter Post Description" title="Enter Post Description" id="description"  name="description" lang="ur" style="height: 125px;"dir="rtl" required></textarea>
								<!-- 	<textarea class="form-control" id="txtnote" name="txtnote" value="" rows="25" required
                        <div id="summernote" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 200, "dialogsInBody": true, "dialogsFade": false, "codemirror": { "theme": "ambiance" } }' ></div></textarea> -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Post Category</label>
									<select class="form-control " placeholder="Select Post Category" name="postcategory" title="Select Post Category"  required>
										<option value="">Select Post Category</option>
		                   				@foreach($data as $category)
		                        		<option value={{$category->postcategory_id}}>{{$category->postcategory_name}}</option>
		                    			@endforeach 
		                            </select>
		                		</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Video Link</label>
									<input type="text" name="videolink" placeholder="Enter Video Link To Share" title="Enter Video Link To Share"  class="form-control required_colom"  id="videolink" value="">
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
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
<script>
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
		<!-- <script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/gauge/gauge.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/snap-svg/snap.svg.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/vendor/summernote/summernote.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/javascripts/theme.js"></script>
		<script src="http://mobilelinkusa.com/mobilelinkrecap/public/javascripts/theme.init.js"></script> -->
@endsection