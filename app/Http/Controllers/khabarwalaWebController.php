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

class khabarwalaWebController extends Controller
{
    public function webpost(){
		$task = DB::table('post')
			->where('status_id','=',1)
			->orderBy('post_id','DESC')
			->select('post.*')
			->limit(2)
			->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function categorieswebpost($id){
		$data = DB::table('post')
		->where('status_id','=',1)
		->where('post_id','<',$id)
		->orderBy('post_id','DESC')
		->limit(2)
		->select('post.*')
		->get();

		if (sizeof($data)>0) {
		$view = view("khabarwala.web.ajaxView",compact('data'))->render();
			return response()->json(['html'=>$view]);
		}else{
			$view = view("khabarwala.web.nodata")->render();
			return response()->json(['html'=>$view]);
		}
	}
	public function catpakistan(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',2)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function catinternational(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',3)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function catbussiness(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',4)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function catsports(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',5)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function catscitech(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',6)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function cattvsows(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',7)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function catlifestyle(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',8)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function cathealth(){
		$task = DB::table('post')
		->where('status_id','=',1)
		->where('postcategory_id','=',9)
		->select('post.*')
		->get();
		return view('khabarwala.web.webpost',['data' => $task]);
	}
	public function getdislikeclientip($id){
		$ip = $_SERVER['REMOTE_ADDR'];
			$getipifexist = DB::table('postact')
			->where('post_id','=',$id)
			->where('postact_userip','=',$ip)
			->select('postact.*')
			->first();
			if ($getipifexist != null) {
				if($getipifexist->postact_type == "Like"){
					$updateact  = DB::table('postact')
					->where('postact_userip','=',$ip)
					->update([
				   	'postact_type' 		=> "DisLike",
					]);
				}
				if($getipifexist->postact_type == "DisLike"){
					$updateact  = DB::table('postact')
					->where('postact_userip','=',$ip)
					->update([
				   	'postact_type' 	=> "Like",
					]);
				}
				print_r("Post Act Updated");
			}else{
				$adds[] = array(
					'postact_userip'	=> $ip,
					'post_id' 			=> $id,
					'postact_type' 		=> "DisLike",
					'created_at'		=> date('Y-m-d h:i:s'),
				);
				DB::table('postact')->insert($adds);
				print_r("Post Act Added");
			}
	}
	public function getlikeclientip($id){
		$ip = $_SERVER['REMOTE_ADDR'];
			$getipifexist = DB::table('postact')
			->where('post_id','=',$id)
			->where('postact_userip','=',$ip)
			->select('postact.*')
			->first();
			if ($getipifexist != null) {
				if($getipifexist->postact_type == "Like"){
					$updateact  = DB::table('postact')
					->where('postact_userip','=',$ip)
					->update([
				   	'postact_type' 		=> "DisLike",
					]);
				}
				if($getipifexist->postact_type == "DisLike"){
					$updateact  = DB::table('postact')
					->where('postact_userip','=',$ip)
					->update([
				   	'postact_type' 	=> "Like",
					]);
				}
				print_r("Post Act Updated");
			}else{
				$adds[] = array(
					'postact_userip'	=> $ip,
					'post_id' 			=> $id,
					'postact_type' 		=> "Like",
					'created_at'		=> date('Y-m-d h:i:s'),
				);
				DB::table('postact')->insert($adds);
				print_r("Post Act Added");
			}

	}
	public function submitcomment($id,$cmt){
		if(session()->get('email')){
			$checkblockusers = DB::table('siteusers')
			->where('siteusers_email','=',session()->get('email'))
			->where('status_id','=',1)
			->select('siteusers.*')
			->first();
			if (!empty($checkblockusers)) {
				$adds[] = array(
				'postcomment_comment'	=> $cmt,
				'post_id' 				=> $id,
				'siteusers_email' 		=> session()->get('email'),
				'created_at'			=> date('Y-m-d'),
				'status_id'				=> 1,
			);
				DB::table('postcomment')->insert($adds);
				print_r("Success");
			}else{
				return redirect('/webpost')->with('message','Not Allowed To Comment');	
			}
		}else{
			return redirect('/webpost')->with('message','Login To Comment');
		}
	}
	public function viewpostdetails($id){
			$task = DB::table('post')
			->where('post_id','=',$id)
			->where('status_id','=',1)
			->select('post.*')
			->first();
		return view('khabarwala.modal.viewpostdetails',['data' => $task]);
	}
	public function submitdetailcomment(Request $request){
		if(session()->get('email')){
			$saved;
			$ans;
			$checkblockusers = DB::table('siteusers')
			->where('siteusers_email','=',session()->get('email'))
			->where('status_id','=',1)
			->select('siteusers.*')
			->first();
			if (!empty($checkblockusers)) {
			$adds[] = array(
				'postcomment_comment'	=> $request->postcomment,
				'post_id' 				=> $request->hdnpostid,
				'siteusers_email' 		=> session()->get('email'),
				'created_at'			=> date('Y-m-d'),
				'status_id'				=> 1,
			);
			$saved = DB::table('postcomment')->insert($adds);
			$ans = array("no" => "Comment Added Successfully");
			}else{
				return redirect('/webpost')->with('message','Not Allowed To Comment');	
			}
			if ($saved) {
				echo json_encode($ans);
			}else{
				echo json_encode(false);
			}
		}else{
			return redirect('/webpost')->with('message','Login To Comment');
		}
	}
	public function singlepostpage($id){
			$task = DB::table('post')
			->where('post_id','=',$id)
			->where('status_id','=',1)
			->select('post.*')
			->first();
		return view('khabarwala.web.singlepostpage',['val' => $task]);
	}
}