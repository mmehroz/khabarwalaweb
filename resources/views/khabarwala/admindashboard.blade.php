@extends('layout.khabarwalatheme')
@section('khabarwala')

<!-- Page Wrapper -->
<div class="page-wrapper">
	<!-- Page Content -->
    <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="welcome-box">
					<div class="welcome-img">
						<a href="{{URL::to('/profile') }}">
						<img alt="" title="Click To Change Image" src="{{URL::to('public/adminprofile/')}}/{{$data->users_image}}"></a>
					</div>
					<div class="welcome-det">
						<h3>Welcome, {{$data->users_name}}</h3>
						<p>{{$data->users_email}}</p>
					</div>
				</div>
				<br>
				@if(session('message'))
					<div><p class="alert alert-success" >{{session('message')}}</p> </div>
				@endif
			</div>
		</div>
		<div class="row">
			<?php
			$taskpostcount = DB::table('post')
            ->where('status_id','=',1)
            ->select('post.*')
            ->count();
            $taskusercount = DB::table('siteusers')
            ->where('status_id','=',1)
            ->select('siteusers.*')
            ->count();
            $taskcommentcount = DB::table('postcomment')
            ->where('status_id','=',1)
            ->select('postcomment.*')
            ->count();
			?>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i style="color: white" class="fa fa-pencil-square-o"></i></span>
						<div class="dash-widget-info">
							<h4>{{$taskpostcount}}</h4>
							<span>No. Of Post</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i style="color: white" class="fa fa-user"></i></span>
						<div class="dash-widget-info">
							<h4>{{$taskusercount}}</h4>
							<span>No. Of Users</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i style="color: white" class="fa fa-comments"></i></span>
						<div class="dash-widget-info">
							<h4>{{$taskcommentcount}}</h4>
							<span>No. Of Comments</span>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>				
		</div>
		<!-- /Page Content -->

    </div>
	<!-- /Page Wrapper -->
	
</div>
<!-- /Main Wrapper -->
		</script>
		@endsection