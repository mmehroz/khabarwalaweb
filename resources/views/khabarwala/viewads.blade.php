@extends('layout.khabarwalatheme')
@section('khabarwala')
<div class="page-wrapper">
    <div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">ADS</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/adsList')}}">Ads List</a></li>
						<li class="breadcrumb-item active">View Ads</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" onclick="editads({{$data->ads_id}})"><i class="fa fa-pencil"></i>Edit Ads</a>
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
							<h4 class="card-title mb-0">View Ads</h4>
						</div>
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Link</label>
									<input type="text" name="link" placeholder="Enter Link To Share" title="Enter Link To Share"  class="form-control required_colom"  id="link" value="{{$data->ads_link}}" readonly>
								</div>
							</div>
						</div>
						</div>
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
	function editads($id){
		window.location.replace('{{url("/editads")}}/'+$id);
	}
	</script>
@endsection