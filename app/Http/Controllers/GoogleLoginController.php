<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use Session;
use DB;

class GoogleLoginController extends Controller
{

  public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}
 
public function callback($provider)
{
           
    $getInfo = Socialite::driver($provider)->user();
    session()->put([
        'email'=> $getInfo->getEmail(),
        'image'=> $getInfo->getAvatar(),
        'name' => $getInfo->getName()
    ]);
    $checksiteuser = DB::table('siteusers')
        ->where('siteusers_email','=',session()->get('email'))
        ->select('siteusers.*')
        ->first();
    if ($checksiteuser) {
        return redirect()->to('/webpost');
    }else{
        $adds[] = array(
            'siteusers_name'    => session()->get('name'),
            'siteusers_email'   => session()->get('email'),
            'siteusers_image'   => session()->get('image'),
            'created_at'        => date('Y-m-d h:i:s'),
        );
        DB::table('siteusers')->insert($adds);
        return redirect()->to('/webpost');
       }
    }
}
