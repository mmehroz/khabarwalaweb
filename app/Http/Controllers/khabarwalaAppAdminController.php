<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Item;
use Session;
use Image;
use Illuminate\Support\Facades\Mail;
use PDF;
use Excel;
use App\Exports\AlarmExport;
use File;

class khabarwalaAppAdminController extends Controller
{
    public function appuserlist(){
    	if(session()->get("email") && session()->get("role") == 1){
			$getuserlist = DB::connection('mysql2')->table('user')
			->select('user.user_id','user.user_fullname','user.user_email','user.user_profilepicture','user.verify_token')
			->where('user.status_id','=',1)
			->get();
		return view('khabarwalaapp.userlist',['data' => $getuserlist]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function userprofile($token){
		if(session()->get("email") && session()->get("role") == 1){
		$getparam;
		$checkfollowed = 0;
		$getparam = $token;
		$checktoken = DB::connection('mysql2')->table('user')
		->select('user.verify_token')
		->where('verify_token','=',$getparam)
		->where('status_id','=',1)
		->first();
		$allData;
		if(!empty($checktoken)){
		$getprofileinfo = DB::connection('mysql2')->table('user')
		->select('user_fullname as name','user_email as email','user_phoneno as phone','user.user_city as city','verify_token as id','user_id as userId','role_id as type','user_profilepicture as avatar','user_coverpicture as cover')
		->where('verify_token','=',$getparam)
		->where('status_id','=',1)
		->first();
		$getprofileinterest = DB::connection('mysql2')->table('userinterest')
		->join('intrest','intrest.intrest_id', '=','userinterest.intrest_id')
		->select('intrest.intrest_name')
		->where('userinterest.verify_token','=',$getparam)
		->where('userinterest.status_id','=',1)
		->get();
		$getfollowing = DB::connection('mysql2')->table('follower')
		->join('user','user.user_id', '=','follower.user_id')
		->select('user.user_id','user.user_fullname','user.user_profilepicture')
		->where('follower.verify_token','=',$getparam)
		->where('user.status_id','=',1)
		->count();
		$getid = DB::connection('mysql2')->table('user')
		->select('user.user_id')
		->where('user.verify_token','=',$getparam)
		->where('user.status_id','=',1)
		->first();
		$getfollowers = DB::connection('mysql2')->table('follower')
		->select('follower.verify_token')
		->where('follower.user_id','=',$getid->user_id)
		->where('follower.status_id','=',1)
		->count();
		$getpost = DB::connection('mysql2')->table('post')
		->select('post.verify_token')
		->where('post.verify_token','=',$getparam)
		->where('post.status_id','=',1)
		->count();
		$getprofileinfo->followers = $getfollowers;
		$getprofileinfo->following = $getfollowing;
		$getprofileinfo->post = $getpost;
		$getpostvideo = DB::connection('mysql2')->table('post')
		->select('post.post_video')
		->where('post.verify_token','=',$getparam)
		->where('post.status_id','=',1)
		->limit(4)
		->get();
		$allData = array("userinfo" => $getprofileinfo,"interest" => $getprofileinterest,"postvideo" => $getpostvideo);	
		}else{
			return redirect('/appuserlist')->with('message','Invalid User');
		}
		if($allData){
			return view('khabarwalaapp.userprofile',['data' => $allData]);
		}else{
			return redirect('/appuserlist')->with('message','Oops! Something Went Wrong');
		}
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function apppostlist(){
    	if(session()->get("email") && session()->get("role") == 1){
    		$apppostlist = DB::connection('mysql2')->table('post')
			->select('post.*')
			->where('post.status_id','=',1)
			->get();
			return view('khabarwalaapp.postlist',['data' => $apppostlist]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function viewappcomments($id){
		if(session()->get("email") && session()->get("role") == 1){
			$taskcomments = DB::connection('mysql2')->table('comment')
			->join('user','user.verify_token', '=','comment.verify_token')
			->where('comment.post_id','=',$id)
			->where('comment.status_id','=',1)
			->select('comment.*','user.*')
			->get();
			return view('khabarwalaapp.viewcomments',['data' => $taskcomments]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function deleteappcomment($id){
		if(session()->get("email") && session()->get("role") == 1){
				$deletecmt = DB::connection('mysql2')->table('comment')
				->where('comment_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function blockappuser($id){
		if(session()->get("email") && session()->get("role") == 1){
				$block = DB::connection('mysql2')->table('user')
				->where('user_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function deleteapppost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::connection('mysql2')->table('post')
				->where('post_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	// New Updates From 11 November 2020 Start
	public function viewapppost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$viewpost = DB::connection('mysql2')->table('post')
			->where('post.post_id','=',$id)
			->where('post.status_id','=',1)
			->select('post.*')
			->first();
			return view('khabarwalaapp.viewpost',['data' => $viewpost]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function reportapppostlist(){
    	if(session()->get("email") && session()->get("role") == 1){
    		$reportpost = DB::connection('mysql2')->table('reportpost')
			->where('reportpost.status_id','=',1)
			->select('reportpost.post_id')
			->get();
			$getreportpost = array();
			foreach ($reportpost as $reportposts) {
				$getreportpost[] = $reportposts->post_id;
			}
			// dd($getreportpost);
			$getreportapppostlist = DB::connection('mysql2')->table('post')
			->select('post.*')
			->whereIn('post.post_id',$getreportpost)
			->where('post.status_id','=',1)
			->get();
			// dd($getreportapppostlist);
			return view('khabarwalaapp.reportapppostlist',['data' => $getreportapppostlist]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function viewreporteduser($id){
		if(session()->get("email") && session()->get("role") == 1){
			$getreporteduser = DB::connection('mysql2')->table('reportpost')
			->join('user','user.verify_token', '=','reportpost.verify_token')
			->join('postreporttype','postreporttype.postreporttype_id', '=','reportpost.postreporttype_id')
			->where('reportpost.post_id','=',$id)
			->where('reportpost.status_id','=',1)
			->select('reportpost.reportpost_comment','postreporttype.postreporttype_name','user.*')
			->get();
			return view('khabarwalaapp.viewreporteduser',['data' => $getreporteduser]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
}