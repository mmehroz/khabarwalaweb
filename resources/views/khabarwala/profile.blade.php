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
					<h3 class="page-title">PROFILE</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">My Profile</li>
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
							<h4 class="card-title mb-0">Update Profile</h4>
						</div>
						<form action="{{ URL::to('/submitprofile')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Name</label>
									<input type="text" name="name" placeholder="Enter Name" title="Enter Name"  class="form-control required_colom" id="tittle" value="{{$data->users_name}}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Email</label>
									<input type="text" name="email" placeholder="Enter Email" title="Enter Email"  class="form-control required_colom" id="tittle" value="{{$data->users_email}}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Password</label>
									<input type="password" name="password" placeholder="Enter Password" title="Enter Password"  class="form-control required_colom" id="tittle" value="{{$data->users_password}}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Upload Image</label>
									<input type="file" name="input" title="Click To Upload Image" accept="image/x-png,image/gif,image/jpeg,image/*" class="form-control">
								</div>
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
@endsection