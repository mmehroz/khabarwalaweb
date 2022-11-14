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
					<h3 class="page-title">ADS</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/adsList')}}">Ads List</a></li>
						<li class="breadcrumb-item active">Edit Ads</li>
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
							<h4 class="card-title mb-0">Edit Ads</h4>
						</div>
						<form action="{{ URL::to('/submiteditads')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
                		<input type="hidden" name="hdnadsid" id="hdnadsid" value="{{$data->ads_id}}" class="form-control"/>
						<div class="card-body">
				
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Link</label>
									<input type="text" name="link" placeholder="Enter Link To Share" title="Enter Link To Share"  class="form-control required_colom"  id="videolink" required value="{{$data->ads_link}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Image</label>
									<input type="file" id="gallery-photo-add" name="input" title="Click To Upload Image" accept="image/x-png,image/gif,image/jpeg,image/*" class="form-control">
								</div>
								<label class="col-form-label" style="color: red">Select Only Image File</label>
								<div class="gallery"></div>
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
									<center><label class="col-form-label" style="color: red; font-size: 30px">ADS IMAGE</label></center>
								</div>
							</div>
						</div>
						<div class="row" style="margin-left: 20px">
							<br>
			                 <div id="img">
			                    <img id="imgview" class="img-fluid img-thumbnail" src="{{ URL::to('public/ads/')}}/{{$data->ads_image}}" style="height: 225px;width: 225px"/>
			                </div>
			                </a>
						</div>
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
@endsection