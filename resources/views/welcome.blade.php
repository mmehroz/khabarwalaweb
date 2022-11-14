@extends('layout.logintheme')
@section('content')
<style>
.account-box
{
	width:380px;
    background-color: rgba(0, 0, 0, 0.35);
    border: 1px solid #969292;
}
.account-subtitle
{
	color:#fff;
}
.account-box label
{
	color:#fff;
}
.text-muted:hover
{
	color: #ffffff !important;
    font-style: italic;
}
</style>
    <body class="account-page" style="color:#fbfbfb;background:url({{ url('public/images/khabarwala-bg.jpg') }});background-size: cover; background-repeat:no-repeat;background-position: center;background-attachment:fixed;position: static;">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!---<a href="{{url('/canLogin')}}" class="btn btn-primary apply-btn">Apply Job</a>--->
				<div class="container">
				
					<!-- Account Logo -->
					
					<!-- /Account Logo -->
					<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6">
					<div class="account-box">
					<div class="account-logo">
						<!-- <a href="{{url('/')}}"><img src="{!! asset('public/assets/img/final logo remakasde.png') !!}" alt="Dreamguy's Technologies"></a> -->
					
								<a href="{{url('/')}}"><img src="{!! asset('public/images/logo-khabarwala.png') !!}" alt="Khabarwala" style="width: 170px;margin-bottom: px;"></a>
					</div>
								
						<div class="account-wrapper">
							
							@if(session('message'))
								<!-- <div class="account-title">{{session('message')}}</div> -->
								<div class="account-title">   <p class="alert alert-success" >{{session('message')}}</p>
								
								</div>
							@endif
							<hr style="margin-top: 0px;margin-bottom: 12px;border-top:1px solid #969292;">
							<h3 class="account-title" style="margin-bottom: 2px;">Login</h3>
                            <p class="account-subtitle">Access to our dashboard</p>
							
							<!-- Account Form -->
							<form method="Post" action="{{url('/adminlogin')}}" style="margin-top: 30px;">
								{{ csrf_field() }}
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="email" name="username" required="">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
									<div class="col-auto">
											<a class="text-muted" href="{{url('/forgetpassword')}}">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="pass" required="">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<!-- <div class="account-footer">
									<p style="color: #000000;">Don't have an account yet? <a href="{{url('/register')}}">Register</a></p>
								</div> -->
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
					</div>
						</div>
				</div>
			</div>
        </div>
		
    </body>

	@endsection