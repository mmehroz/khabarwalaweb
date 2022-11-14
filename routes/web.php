<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Khabarwala Routes Start
// Admin Panel Routes Start
Route::get('/','MyController@logout');
Route::any('/adminlogin','khabarwalaController@adminlogin');
Route::get('/admindashboard','khabarwalaController@admindashboard');
Route::get('/addpost','khabarwalaController@addpost');
Route::get('/postList','khabarwalaController@postList');
Route::any('/submitaddpost','khabarwalaController@submitaddpost');
Route::get('/editpost/{id}','khabarwalaController@editpost');
Route::get('/removeimage/{name}','khabarwalaController@removeimage');
Route::any('/submiteditpost','khabarwalaController@submiteditpost');
Route::get('/viewpost/{id}','khabarwalaController@viewpost');
Route::get('/removevideo/{name}','khabarwalaController@removevideo');
Route::get('/profile','khabarwalaController@profile');
Route::any('/submitprofile','khabarwalaController@submitprofile');
Route::get('/deletepost/{id}','khabarwalaController@deletepost');
Route::get('/markimportant/{id}','khabarwalaController@markimportant');
Route::get('/viewcomments/{id}','khabarwalaController@viewcomments');
Route::get('/deletecomment/{id}','khabarwalaController@deletecomment');
Route::get('/userList','khabarwalaController@userList');
Route::get('/blockuser/{id}','khabarwalaController@blockuser');
Route::get('/adsList','khabarwalaController@adsList');
Route::get('/addads','khabarwalaController@addads');
Route::get('/viewads/{id}','khabarwalaController@viewads');
Route::get('/editads/{id}','khabarwalaController@editads');
Route::get('/deleteads/{id}','khabarwalaController@deleteads');
Route::any('/submitaddads','khabarwalaController@submitaddads');
Route::any('/submiteditads','khabarwalaController@submiteditads');
//************
Route::get('/reporterList','khabarwalaController@reporterList');
Route::get('/addreporter','khabarwalaController@addreporter');
Route::any('/submitaddreporter','khabarwalaController@submitaddreporter');
Route::get('/editreporter/{id}','khabarwalaController@editreporter');
Route::any('/submiteditreporter','khabarwalaController@submiteditreporter');
Route::get('/deletereporter/{id}','khabarwalaController@deletereporter');
Route::get('/restrictreporterpostList','khabarwalaController@restrictreporterpostList');
Route::get('/approvepost/{id}','khabarwalaController@approvepost');
//************
// Admin Panel Routes End
// Forget Password Route Start
Route::get('/forgetpassword', 'khabarwalaController@forgetpassword');
Route::any('/forget_submit', 'khabarwalaController@forget_submit');
Route::get('/forget/{token}', 'khabarwalaController@forget');
Route::any('/reset_submit', 'khabarwalaController@reset_submit');
// Forget Password Route End
// Web Page Routes Start
Route::get('/webpost', 'khabarwalaWebController@webpost');
Route::get('/categorieswebpost/{id}', 'khabarwalaWebController@categorieswebpost');
Route::get('/catpakistan', 'khabarwalaWebController@catpakistan');
Route::get('/catinternational', 'khabarwalaWebController@catinternational');
Route::get('/catbussiness', 'khabarwalaWebController@catbussiness');
Route::get('/catsports', 'khabarwalaWebController@catsports');
Route::get('/catscitech', 'khabarwalaWebController@catscitech');
Route::get('/cattvsows', 'khabarwalaWebController@cattvsows');
Route::get('/catlifestyle', 'khabarwalaWebController@catlifestyle');
Route::get('/cathealth', 'khabarwalaWebController@cathealth');
Route::get('/getdislikeclientip/{id}', 'khabarwalaWebController@getdislikeclientip');
Route::get('/getlikeclientip/{id}', 'khabarwalaWebController@getlikeclientip');
Route::get('/submitcomment/{id}/{cmt}', 'khabarwalaWebController@submitcomment');
Route::get('/viewpostdetails/{id}', 'khabarwalaWebController@viewpostdetails');
Route::any('/submitdetailcomment', 'khabarwalaWebController@submitdetailcomment');
Route::get('/singlepostpage/{id}', 'khabarwalaWebController@singlepostpage');
// Web Page Routes End
// Gmail Login Routes Start
Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
Route::get('/callback/{provider}', 'GoogleLoginController@callback');
// Gmail Login Routes End
// Facebool Login Routes Start
Route::get('/redirect/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/callback/facebook', 'SocialAuthFacebookController@callback');
// Facebool Login Routes End
// Khabarwala Routes End
// khabarwala App Admin Panel Routes Start
Route::get('/appuserlist', 'khabarwalaAppAdminController@appuserlist');
Route::get('/userprofile/{token}', 'khabarwalaAppAdminController@userprofile');
Route::get('/apppostlist', 'khabarwalaAppAdminController@apppostlist');
Route::get('/viewappcomments/{id}','khabarwalaAppAdminController@viewappcomments');
Route::get('/deleteappcomment/{id}','khabarwalaAppAdminController@deleteappcomment');
Route::get('/blockappuser/{id}','khabarwalaAppAdminController@blockappuser');
Route::get('/deleteapppost/{id}','khabarwalaAppAdminController@deleteapppost');
Route::get('/viewapppost/{id}','khabarwalaAppAdminController@viewapppost');
Route::get('/reportapppostlist', 'khabarwalaAppAdminController@reportapppostlist');
Route::get('/viewreporteduser/{id}','khabarwalaAppAdminController@viewreporteduser');
// khabarwala App Admin Panel Routes End