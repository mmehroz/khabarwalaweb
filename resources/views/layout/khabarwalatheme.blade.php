<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="News | Khabarwala">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="News | Khabarwala">
        <meta name="robots" content="noindex, nofollow">
        <title>Khabarwala</title>
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/assets/img/favicon.png') !!}" />
		<link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('public/assets/css/buttons.dataTables.min.css') !!}"/>
		<link rel="stylesheet" href="{!! asset('public/assets/css/font-awesome.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('public/assets/css/line-awesome.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('public/assets/plugins/morris/morris.css') !!}" />
		<link rel="stylesheet" href="{!! asset('public/assets/css/dataTables.bootstrap4.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('public/assets/css/select2.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('public/assets/css/selectpicker.css') !!}">
		<link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap-datetimepicker.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('public/assets/css/style.css') !!}" />
        <script src="{!! asset('public/assets/js/jquery-3.2.1.min.js') !!}" ></script>
<style type="text/css">
button.dt-button
{
background: #063f6f;
color: white;
}  
button.dt-button:hover:not(.disabled), div.dt-button:hover:not(.disabled), a.dt-button:hover:not(.disabled) {
	    border: 1px solid #666;
background: #063f6f;
background-image: linear-gradient(to bottom, #063f6f 0%, #4a4a4a 100%);
}
</style>
</head>
	<body class="mini-sidebar">
		<div class="main-wrapper">
			<div class="header">
				<div class="header-left">
                    <a href="{{url('/')}}" class="logo">
						<img src="{!! asset('public/assets/img/favicon.png') !!}" width="120" height="60" alt="">
					</a>
                </div>
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				<div class="page-title-box">
					<h3>Khabarwala</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				<ul class="nav user-menu">
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
								<?php
								$getimage = DB::table('users')
								->select('users.users_image')
								->where('users_id','=',session()->get('id'))
								->where('status_id','=',1)
								->first();
								?>
								<img src="{{URL::to('public/adminprofile/')}}/{{$getimage->users_image}}" alt="">
							<span class="status online"></span></span>
							<span>{{session()->get("name")}}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{url('/')}}"><i class="fa fa-power-off" style="padding-right: 7px;"></i>Logout</a>
							<a class="dropdown-item" href="{{url('/profile')}}"><i class="fa fa-user" style="padding-right: 7px;"></i>My Profile</a>
						</div>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{url('/')}}">Logout</a>
						<a class="dropdown-item" href="{{url('/profile')}}">My Profile</a>
					</div>
				</div>
			</div>
			<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span>Khabarwala Web</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="{{url('/admindashboard')}}">Admin Dashboard</a></li>
								<li><a href="{{url('/postList')}}">Post List</a></li>
								<li><a href="{{url('/userList')}}">User List</a></li>
								<li><a href="{{url('/adsList')}}">Ads List</a></li>
								<li><a href="{{url('/reporterList')}}">Reporter List</a></li>
								<li><a href="{{url('/restrictreporterpostList')}}">Restrict Reporter Post List</a></li>
								</ul>
							</li>
								</ul>
									<ul>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span>Khabarwala App</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="{{url('/appuserlist')}}">User List</a></li>
								<li><a href="{{url('/apppostlist')}}">Post List</a></li>
								<li><a href="{{url('/reportapppostlist')}}">Report Post List</a></li>
								</ul>
							</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			@yield('khabarwala')
        </div>
	    <script src="{!! asset('public/assets/js/popper.min.js') !!}"></script>
        <script src="{!! asset('public/assets/js/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('public/assets/js/jquery.slimscroll.min.js') !!}"></script>
		<script src="{!! asset('public/assets/js/select2.min.js') !!}"></script>
		<script src="{!! asset('public/assets/plugins/morris/morris.min.js') !!}"></script>
		<script src="{!! asset('public/assets/plugins/raphael/raphael.min.js') !!}"></script>		
		<script src="{!! asset('public/assets/js/chart.js') !!}"></script>
		<script src="{!! asset('public/assets/js/jquery.dataTables.min.js') !!}"></script>		
		<script src="{!! asset('public/assets/js/dataTables.bootstrap4.min.js') !!}"></script>
		<script src="{!! asset('public/assets/js/moment.min.js') !!}"></script>		
		<script src="{!! asset('public/assets/js/bootstrap-datetimepicker.min.js') !!}"></script>
		<script src="{!! asset('public/assets/js/app.js') !!}"></script>
		<script src="{!! asset('public/assets/js/data-table-custom.js') !!}"></script>
		<script src="{!! asset('public/assets/js/sweetalert.js') !!}"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
		<script src="{!! asset('public/assets/js/selectpicker.js') !!}"></script>
		<script type="text/javascript"></script>
</body>
</html>