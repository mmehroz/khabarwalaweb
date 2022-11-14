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

class khabarwalaController extends Controller
{
    public function adminlogin(Request $request){
    	// dd($request->ip());
	if($request->username != ""){
			if($request){
			$task = DB::table('users')
			->select('users.*')
			->where('users_email','=',$request->username)
			->where('users_password','=',$request->pass)
			->where('status_id','=',1)
			->first();
			if($task){
			 session()->put([
			  'id' => $task->users_id,
			  'name' => $task->users_name,
			  'image' => $task->users_image,
			  'email' => $task->users_email,
			  'role' => $task->role_id,
			  ]);
			 if(session()->get("email")){
			 	if (session()->get('role') == 1) {
			 		return redirect('/admindashboard');
			 	}else{
			 		return redirect('/webpost');
			 	}
			}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
			}
							
			}else{
				return redirect('/')->with('message','Kindly Reachout Khabarwala for Credential');
			}
	
			}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
			}	
			
			}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
			}	
	}
	public function admindashboard(){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('users')
			->select('users.*')
			->where('users_id','=',session()->get('id'))
			->where('status_id','=',1)
			->first();
			return view('khabarwala.adminDashboard',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function postList(){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('post')
			->join('postcategory','postcategory.postcategory_id', '=','post.postcategory_id')
			->where('status_id','=',1)
			->select('post.*','postcategory.postcategory_name')
			->get();
			return view('khabarwala.postList',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function addpost(){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('postcategory')
			->select('postcategory.*')
			->get();
			return view('khabarwala.addpost',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submitaddpost(Request $request){
		if(session()->get("email")){
			$validate = $this->validate($request, [
            'language' 		=> 'required',
            'tittle' 		=> 'required',
            'description' 	=> 'required',
            'postcategory' 	=> 'required',
            ]);
            $this->validate($request,[
	        'input.*'=>'mimes:jpeg,bmp,png,jpg|max:5120',
	        'input'  => 'max:10',
	         ]);
            $this->validate($request,[
	        'video.*'=>'mimes:mp4,x-m4v|max:5120',
	        'video'  => 'max:3',
	         ]);
            $uniqueid = rand(1,9999);
            $status;
            if(session()->get("role") == 3){
            $status = 3;
        	}else{
        	$status = 1;
        	}
        	if(!empty($request->videolink)){
        	$getembedlink = explode("/", $request->videolink);
        	$embedlink = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$getembedlink[3].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        	}else{
        		$embedlink = null;
        	}
			$adds[] = array(
				'post_language'		=> $request->language,
				'post_title' 		=> $request->tittle,
				'post_description' 	=> $request->description,
				'postcategory_id' 	=> $request->postcategory,
				'post_videolink' 	=> $embedlink,
				'uniquepostkey' 	=> $uniqueid,
				'users_id' 			=> session()->get('id'),
				'status_id' 		=> $status,
				'created_at' 		=> date('Y-m-d h:i:s'),
			);
			DB::table('post')->insert($adds);
			$lastid = DB::getPdo()->lastInsertId();
			$images = $request->input;
        	$index = 0 ;
        	$filename = array();
            if ($request->has('input')) {
            	foreach($images as $ima ){
            		if( $request->input[$index]->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $gettodaydate = $lastid;
						$extension = $request->input[$index]->extension();
			            $filename[$index]  = date('Y-m-d')."_".$numb."_".$index."_.".$extension;
			            $filename[$index] = $request->input[$index]->move(public_path('postimages/'.$gettodaydate),$filename[$index]);
					    $img = Image::make($filename[$index])->resize(800,800, function($constraint) {
			                    $constraint->aspectRatio();
			            });
			            $img->save($filename[$index]);
					    $filename[$index] = date('Y-m-d')."_".$numb."_".$index."_.".$extension;
			        	$addimg[] = array(
							'postimage_name' 	=> $filename[$index],
							'status_id' 		=> 1,
							'post_id' 			=> $lastid,
						);
						
			        	$index++;
            		}
            	}
            	DB::table('postimage')->insert($addimg);
        	}
            else{
            	        $filename = 'no_image.png'; 
                }
            $videos = $request->video;
        	$indexvideo = 0;
        	$videofilename = array();
            if ($request->has('video')) {
            	foreach($videos as $vd ){
            		if( $request->video[$indexvideo]->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $gettodaydate = $lastid;
						$extension = $request->video[$indexvideo]->extension();
			            $videofilename[$indexvideo]  = date('Y-m-d')."_".$numb."_".$indexvideo."_.".$extension;
			          	$videofilename[$indexvideo] = $request->video[$indexvideo]->move(public_path('postvideos/'.$gettodaydate),$videofilename[$indexvideo]);
			          	$videofilename[$indexvideo]  = date('Y-m-d')."_".$numb."_".$indexvideo."_.".$extension;
						$addvid[] = array(
							'video_name' 	=> $videofilename[$indexvideo],
							'status_id' 	=> 1,
							'post_id' 		=> $lastid,
						);
			            $indexvideo++;
            		}
	        	}
	        	DB::table('postvideo')->insert($addvid);
        	}
            else{
            	        $videofilename = 'no_video.png'; 
                }
			// $client = new \GuzzleHttp\Client();
  //       $url = "http://localhost/khabarwalaapp/apppost";
  //       $response = $client->post($url,[
  //           'headers' 	=> ['token' => 'PUWCc3zBDABZOKwU3rhWYDyrD1wQGqFFUeld8vGgVIbueAZnRRe2XkLZs4FAWOAhN7OwyQynJfBFzNLxwjzItMs3omTJeThxd6pJ'],
  //           'json' => [
  //               'title' 	=> $request->merchid,
  //               'video' 	=> $request->account,
  //               'poster' 	=> $request->expiry,
  //           ],
  //       ]);
		if($lastid){
            return redirect('/postList')->with('message','Post Added Successfully');
        }else{
            return redirect('/postList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function editpost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('post')
			->join('postcategory','postcategory.postcategory_id', '=','post.postcategory_id')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('post.*','postcategory.postcategory_name')
			->first();
			$taskimage = DB::table('postimage')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('postimage.postimage_name')
			->get();
			$taskvideo = DB::table('postvideo')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('postvideo.video_name')
			->get();
			$taskpostcategory = DB::table('postcategory')
			->select('postcategory.*')
			->get();
			$allData = array("postdata" => $task,"imagedata" => $taskimage, "videodata" => $taskvideo, "categorydata" => $taskpostcategory);
			return view('khabarwala.editpost',['data' => $allData]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function removeimage($name){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('postimage')
				->where('postimage_name','=',$name)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function removevideo($name){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('postvideo')
				->where('video_name','=',$name)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submiteditpost(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'tittle' 		=> 'required',
            'description' 	=> 'required',
            'postcategory' 	=> 'required',
            ]);
            $this->validate($request,[
	        'input.*'=>'mimes:jpeg,bmp,png,jpg|max:5120',
	        'input'  => 'max:10',
	         ]);
            $this->validate($request,[
	        'video.*'=>'mimes:mp4,x-m4v|max:5120',
	        'video'  => 'max:3',
	         ]);
			$images = $request->input;
        	$index = 0 ;
        	$filename = array();
            if ($request->has('input')) {
            	foreach($images as $ima ){
            		if( $request->input[$index]->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $gettodaydate = $request->hdnpostid;
						$extension = $request->input[$index]->extension();
			            $filename[$index]  = date('Y-m-d')."_".$numb."_".$index."_.".$extension;
			            $filename[$index] = $request->input[$index]->move(public_path('postimages/'.$gettodaydate),$filename[$index]);
					    $img = Image::make($filename[$index])->resize(800,800, function($constraint) {
			                    $constraint->aspectRatio();
			            });
			            $img->save($filename[$index]);
					    $filename[$index] = date('Y-m-d')."_".$numb."_".$index."_.".$extension;
			        	$addimg[] = array(
							'postimage_name' 	=> $filename[$index],
							'status_id' 		=> 1,
							'post_id' 			=> $request->hdnpostid
						);
						$index++;
            		}
            	}
            	DB::table('postimage')->insert($addimg);
        	}
            else{
            	        $filename = 'no_image.png'; 
                }
            $videos = $request->video;
        	$indexvideo = 0 ;
        	$videofilename = array();
            if ($request->has('video')) {
            	foreach($videos as $vd ){
            		if( $request->video[$indexvideo]->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $gettodaydate = $request->hdnpostid;
						$extension = $request->video[$indexvideo]->extension();
			            $videofilename[$indexvideo]  = date('Y-m-d')."_".$numb."_".$indexvideo."_.".$extension;
			            $videofilename[$indexvideo] = $request->video[$indexvideo]->move(public_path('postvideos/'.$gettodaydate),$videofilename[$indexvideo]);
			            $videofilename[$indexvideo]  = date('Y-m-d')."_".$numb."_".$indexvideo."_.".$extension;
					    $addvid[] = array(
							'video_name' 	=> $videofilename[$indexvideo],
							'status_id' 	=> 1,
							'post_id' 		=> $request->hdnpostid,
						);
						$indexvideo++;
            		}
	        	}
	        	DB::table('postvideo')->insert($addvid);
        	}
            else{
            	        $videofilename = 'no_video.png'; 
                }
            $getembedlink = explode("/", $request->videolink);
        	$embedlink = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$getembedlink[3].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
				$updatepost  = DB::table('post')
				->where('post_id','=',$request->hdnpostid)
				->update([
			   	'post_title' 		=> $request->tittle,
				'post_description' 	=> $request->description,
				'postcategory_id' 	=> $request->postcategory,
				'post_videolink' 	=> $embedlink,
				'updated_at' 		=> date('Y-m-d h:i:s'),
				'updated_by' 		=> session()->get('id'),
				]);
		if($updatepost){
            return redirect('/postList')->with('message','Post Updated Successfully');
        }else{
            return redirect('/postList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function viewpost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('post')
			->join('postcategory','postcategory.postcategory_id', '=','post.postcategory_id')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('post.*','postcategory.postcategory_name')
			->first();
			$taskimage = DB::table('postimage')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('postimage.postimage_name')
			->get();
			$taskvideo = DB::table('postvideo')
			->where('post_id','=',$id)
			->where('status_id','!=',2)
			->select('postvideo.video_name')
			->get();
			$allData = array("postdata" => $task,"imagedata" => $taskimage, "videodata" => $taskvideo);
			return view('khabarwala.viewpost',['data' => $allData]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function profile(){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('users')
			->select('users.*')
			->where('users_email','=',session()->get('email'))
			->where('status_id','=',1)
			->first();
			return view('khabarwala.profile',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submitprofile(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'name' 		=> 'required',
            'email' 	=> 'required',
            'password' 	=> 'required',
            ]);
            $this->validate($request,[
	        'input'=>'mimes:jpeg,bmp,png,jpg|max:5120',
	         ]);
      		$images = $request->input;
        	$filename;
        	$name = $request->name;
            if ($request->has('input')) {
            		if( $request->input->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $extension = $request->input->extension();
			            $filename  = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			            $filename = $request->input->move(public_path('adminprofile/'),$filename);
					    $img = Image::make($filename)->resize(800,800, function($constraint) {
			                    $constraint->aspectRatio();
			            });
			            $img->save($filename);
					    $filename = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			        	
            		}
		            }else{
            	        $filename = 'no_image.jpg'; 
        	        }
        	        $updateprofile;
                	if ($filename != "no_image.jpg") {
                		$updateprofile  = DB::table('users')
						->where('users_id','=',session()->get('id'))
						->update([
					   	'users_name' 		=> $request->name,
						'users_email' 		=> $request->email,
						'users_password' 	=> $request->password,
						'users_image' 		=> $filename,
						]);
                	}else{
                		$updateprofile  = DB::table('users')
						->where('users_id','=',session()->get('id'))
						->update([
					   	'users_name' 		=> $request->name,
						'users_email' 		=> $request->email,
						'users_password' 	=> $request->password,
						]);
                	}
		if($updateprofile){
            return redirect('/admindashboard')->with('message','Profile Updated Successfully');
        }else{
            return redirect('/admindashboard')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function forgetpassword(){
      return view('forgetpassword');
    }
	public function forget_submit(Request $get){
		if($get->email == ""){
            return redirect('/')->with('message','Please Enter Email');
        }
      $verify_token =  $this->generateRandomString(100);
      $data = array();
      $data['verify_token'] = $verify_token;
      $cmd = DB::table('users')
                 ->where('users_email', $get->email)
                 ->update(['verify_token' => $verify_token]);
      if($cmd){
        $toemail = $get->email;
              Mail::send('khabarwala.email.forget_password', ['name' => 'Khabarwala',
                    'email' => 'admin@khabarwala.com','verify_token' => $verify_token,],
                function ($message) use ($toemail) {
                  $message->to($toemail)
                ->subject('Activation Link');
                });
        return redirect('/')->with('message','Check Your Email'); 
      } else{
        return redirect('/forgetpassword')->with('message','Something went wrong'); 
      }
    }
	public function forget($verify_token){
      $result =  DB::table('users')
                 ->where('verify_token', '=',$verify_token)
                 ->select('users.users_id')->first();

      if(!empty($result)){
        $data = array();
        $data['verify_token'] = $verify_token;
       return view('khabarwala.resetpassword',$data);
      } else{
         return redirect('/')->with('message','Link Expired.');
      }
    }
	
    public function reset_submit(Request $get){
      	if($get->verify_token){
		      $cmd = DB::table('users')
		                 ->where('verify_token', $get->verify_token)
		                 ->update(['users_password' => $get->password,'verify_token' => '']);
		      if($cmd){
		        return redirect('/')->with('message','Password Has been Reset Successfully.'); 
		      } else{
		        return redirect('/')->with('message','Something Went Wrong'); 
		      }	
		}else{

			return redirect('/')->with('message','verify token required');
		}
    }

    public  function generateRandomString($length = 20){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
	}
	public function deletepost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('post')
				->where('post_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
			$updatepostimages  = DB::table('postimage')
				->where('post_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
			$updatepostvideos  = DB::table('postvideo')
				->where('post_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function markimportant($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('post')
				->where('post_id','=',$id)
				->update([
			   	'post_important' 	=> date('Y-m-d h:i:s'),
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function viewcomments($id){
		if(session()->get("email") && session()->get("role") == 1){
			$taskcomments = DB::table('postcomment')
			->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
			->where('postcomment.post_id','=',$id)
			->where('postcomment.status_id','=',1)
			->select('postcomment.*','siteusers.*')
			->get();
			return view('khabarwala.viewcomments',['data' => $taskcomments]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function deletecomment($id){
		if(session()->get("email") && session()->get("role") == 1){
				$deletecmt = DB::table('postcomment')
				->where('postcomment_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function userList(){
		if(session()->get("email") && session()->get("role") == 1){
			$users = DB::table('siteusers')
			->where('status_id','=',1)
			->select('siteusers.*')
			->get();
			return view('khabarwala.userlist',['data' => $users]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function blockuser($id){
		if(session()->get("email") && session()->get("role") == 1){
				$block = DB::table('siteusers')
				->where('siteusers_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function adsList(){
		if(session()->get("email") && session()->get("role") == 1){
			$ads = DB::table('ads')
			->where('status_id','=',1)
			->select('ads.*')
			->get();
			return view('khabarwala.adslist',['data' => $ads]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function addads(){
		if(session()->get("email") && session()->get("role") == 1){
			return view('khabarwala.addads');
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submitaddads(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'link' 		=> 'required',
            ]);
            $this->validate($request,[
	        'input'=>'mimes:jpeg,bmp,png,jpg|max:5120|required',
	         ]);
      		$images = $request->input;
        	$filename;
        	$name = $request->name;
            if ($request->has('input')) {
            		if( $request->input->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $extension = $request->input->extension();
			            $filename  = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			            $filename = $request->input->move(public_path('ads/'),$filename);
					    $img = Image::make($filename)->resize(800,800, function($constraint) {
			                    $constraint->aspectRatio();
			            });
			            $img->save($filename);
					    $filename = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			        	
            		}
		            }else{
            	        $filename = 'no_image.jpg'; 
        	        }
        	        $adds[] = array(
						'ads_image'			=> $filename,
						'ads_link' 			=> $request->link,
						'users_id' 			=> session()->get('id'),
						'status_id' 		=> 1,
						'created_at' 		=> date('Y-m-d h:i:s'),
					);
					$addads = DB::table('ads')->insert($adds);
		if($addads){
            return redirect('/adsList')->with('message','Ads Added Successfully');
        }else{
            return redirect('/adsList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function viewads($id){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('ads')
			->where('ads_id','=',$id)
			->where('status_id','=',1)
			->select('ads.*')
			->first();
			return view('khabarwala.viewads',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function editads($id){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('ads')
			->where('ads_id','=',$id)
			->where('status_id','=',1)
			->select('ads.*')
			->first();
			return view('khabarwala.editads',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submiteditads(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'link' 		=> 'required',
            ]);
            $this->validate($request,[
	        'input'=>'mimes:jpeg,bmp,png,jpg|max:5120',
	         ]);
      		$images = $request->input;
        	$filename;
        	$name = $request->name;
            if ($request->has('input')) {
            		if( $request->input->isValid()){
			            $number = rand(1,999);
				        $numb = $number / 7 ;
				        $extension = $request->input->extension();
			            $filename  = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			            $filename = $request->input->move(public_path('ads/'),$filename);
					    $img = Image::make($filename)->resize(800,800, function($constraint) {
			                    $constraint->aspectRatio();
			            });
			            $img->save($filename);
					    $filename = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
			        	
            		}
		            }else{
            	        $filename = 'no_image.jpg'; 
        	        }
        	        $updateads;
                	if ($filename != "no_image.jpg") {
                		$updateads  = DB::table('ads')
						->where('ads_id','=',$request->hdnadsid)
						->update([
					   	'ads_image' 		=> $filename,
						'ads_link' 			=> $request->link,
						'updated_at' 		=> date('Y-m-d h:i:s'),
						'updated_by' 		=> session()->get('id'),
						]);
                	}else{
                		$updateads  = DB::table('ads')
						->where('ads_id','=',$request->hdnadsid)
						->update([
					   	'ads_link' 			=> $request->link,
						'updated_at' 		=> date('Y-m-d h:i:s'),
						'updated_by' 		=> session()->get('id'),
						]);
                	}
		if($updateads){
            return redirect('/adsList')->with('message','Ads Updated Successfully');
        }else{
            return redirect('/adsList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function deleteads($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('ads')
				->where('ads_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	//**************
	public function reporterList(){
		if(session()->get("email") && session()->get("role") == 1){
			$reporter = DB::table('users')
			->where('role_id','!=',1)
			->where('status_id','=',1)
			->select('users.*')
			->get();
			return view('khabarwala.reporterlist',['data' => $reporter]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function addreporter(){
		if(session()->get("email") && session()->get("role") == 1){
			return view('khabarwala.addreporter');
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submitaddreporter(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'name' 		=> 'required',
            'email' 	=> 'required|unique:users,users_email',
            'role' 		=> 'required',
            ]);
            $password = "khabarwala-".rand(1,999999);
           	$reporter[] = array(
				'users_name'		=> $request->name,
				'users_email' 		=> $request->email,
				'users_password' 	=> $password,
				'users_image' 		=> "no_image.jpg",
				'role_id' 			=> $request->role,
				'status_id' 		=> 1,
				'created_at' 		=> date('Y-m-d h:i:s'),
			);
			$addreporter = DB::table('users')->insert($reporter);
		if($addreporter){
			$toemail = $request->email;
		     Mail::send('khabarwala.email.reportercredentials', ['name' => 'Khabarwala',
                'email' => 'admin@khabarwala.com','name' => $request->name,'email' => $request->email,'password' => $password,],
            function ($message) use ($toemail) {
            $message->to($toemail)
            ->cc('avidhaus.mehroz@gmail.com')
            ->subject('Login Credential To Access Khabarwala As Reporter');
            });
            return redirect('/reporterList')->with('message','Reporter Added Successfully');
        }else{
            return redirect('/reporterList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function editreporter($id){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('users')
			->where('users_id','=',$id)
			->where('status_id','=',1)
			->select('users.*')
			->first();
			return view('khabarwala.editreporter',['data' => $task]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function submiteditreporter(Request $request){
		if(session()->get("email") && session()->get("role") == 1){
			$validate = $this->validate($request, [
            'name' 		=> 'required',
            'role' 		=> 'required',
            ]);
           	$updateuser  = DB::table('users')
				->where('users_id','=',$request->hdnuserid)
				->update([
			   	'users_name' 		=> $request->name,
				'role_id' 			=> $request->role,
				'updated_at' 		=> date('Y-m-d h:i:s'),
				'updated_by' 		=> session()->get('id'),
			]);
        if($updateuser){
            return redirect('/reporterList')->with('message','Reporter Updated Successfully');
        }else{
            return redirect('/reporterList')->with('message','Oops! Something Went Wrong');
        }
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function deletereporter($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('users')
				->where('users_id','=',$id)
				->update([
			   	'status_id' 		=> 2,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function restrictreporterpostList(){
		if(session()->get("email") && session()->get("role") == 1){
			$task = DB::table('post')
			->join('postcategory','postcategory.postcategory_id', '=','post.postcategory_id')
			->where('status_id','=',3)
			->select('post.*','postcategory.postcategory_name')
			->get();
			return view('khabarwala.restrictreporterpostList',['data' => $task]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	public function approvepost($id){
		if(session()->get("email") && session()->get("role") == 1){
			$updatepost  = DB::table('post')
				->where('post_id','=',$id)
				->update([
			   	'status_id' 	=> 1,
				]);
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}	
	}
	//**************
}