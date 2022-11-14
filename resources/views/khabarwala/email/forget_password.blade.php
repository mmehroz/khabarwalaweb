<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="News | Khabarwala">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="News | Khabarwala">
        <meta name="robots" content="noindex, nofollow">
        <title>Forgot Password - Khabarwala</title>
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/assets/img/favicon.png') !!}" />
        <link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('public/assets/css/font-awesome.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('public/assets/css/style.css') !!}" />
		<style type="text/css">
			a:hover, a:active, a:focus {
			    text-decoration: none;
			    outline: none;
			    color: #4a4a4a!important;
			}
		</style>
    </head>
    <body class="account-page" >
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
						<div class="account-wrapper">
							<div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
						Khabarwala News
							</div>
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
							    <!-- <tr>
						      		<td align="center" bgcolor="#e9ecef">
							        	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								          	<tr>
								            	<td align="center" valign="top" style="padding: 20px 24px;">
								            		<a href="https://bizzworldcommunications.com/" target="_blank" style="display: inline-block;">
								                		<img src="{!! asset('public/images/logo-khabarwala.png') !!}" alt="Khabarwala" border="0" width="48" style="display: block; width: 278px; max-width: 100%; min-width: 48px;">
								            		</a>
								            	</td>
								          	</tr>
							        	</table>
							    	</td>
							    </tr> -->
							    <tr>
							      <td align="center" bgcolor="#e9ecef">
							        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							              <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Reset Your Password</h1>
							            </td>
							          </tr>
							        </table>
							      </td>
							    </tr>
							    <tr>
							      <td align="center" bgcolor="#e9ecef">
							        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							              <p style="margin: 0; color: #000;">You recently requested to reset your password for <b>Khabarwala</b>. Click below button to reset it.</p>
							            </td>
							          </tr>
							          <tr>
							            <td align="left" bgcolor="#ffffff">
							              <table border="0" cellpadding="0" cellspacing="0" width="100%">
							                <tr>
							                  <td align="center" bgcolor="#ffffff" style="padding: 12px;">
							                    <table border="0" cellpadding="0" cellspacing="0">
							                      <tr>
							                        <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
							                          <a href="{{url('forget')}}/{{$verify_token}}" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; background-color: #0d558f;text-decoration: none; border-radius: 6px;">Reset Your Password</a>
							                        </td>
							                      </tr>
							                    </table>
							                  </td>
							                </tr>
							              </table>
							            </td>
							          </tr>
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							              <p style="margin: 0;  color: #000;">If you're having trouble clicking the password reset button, copy and paste the below URL, into your browser.</p>
							              <p style="margin: 0;"><a href="{{url('forget')}}/{{$verify_token}}" target="_blank" style="word-break: break-all;">{{url('forget')}}/{{$verify_token}}</a></p>
							            </td>
							          </tr>
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							              <p style="margin: 0;"><b>Thank you!</b><br> </p>
							            </td>
							          </tr>
							        </table>
							      </td>
							    </tr>
							    <tr>
							      <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
							        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
							          <tr>
							            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
							              <p style="margin: 0;">&copy; <b>Khabarwala</b> 2020. All Right Reserved. </p>
							            </td>
							          </tr>
							        </table>
							      </td>
							    </tr>
							</table>
						</div>
				</div>
			</div>
        </div>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery-3.2.1.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/popper.min.js"></script>
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/app.js"></script>
    </body>
</html>