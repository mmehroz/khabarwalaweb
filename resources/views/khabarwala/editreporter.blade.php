@extends('layout.khabarwalatheme')
@section('khabarwala')
<div class="page-wrapper">
    <div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Reporter</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{url('/reporterList')}}">Reporter List</a></li>
						<li class="breadcrumb-item active">Edit Reporter</li>
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
							<h4 class="card-title mb-0">Edit Reporter</h4>
						</div>
						<form action="{{ URL::to('/submiteditreporter')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
                		<input type="hidden" name="hdnuserid" id="hdnuserid" value="{{$data->users_id}}" class="form-control"/>
						<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Name</label>
									<input type="text" name="name" placeholder="Enter Reporter Name" title="Enter Reporter Name"  class="form-control required_colom"  id="name" value="{{$data->users_name}}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Email</label>
									<input type="email" name="email" placeholder="Enter Reporter Email" title="Enter Reporter Email"  class="form-control required_colom"  id="email" value="{{$data->users_email}}" required readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Select Role</label><br>
									@if($data->role_id == 2)
									<input type="radio" name="role" required value="2" checked> Reporter (Full Access)
									<input type="radio" name="role" required value="3"> Reporter (Restrict Access)
									@endif
									@if($data->role_id == 3)
									<input type="radio" name="role" required value="2"> Reporter (Full Access)
									<input type="radio" name="role" required value="3" checked> Reporter (Restrict Access)
									@endif
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