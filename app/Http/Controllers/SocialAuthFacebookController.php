<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Session;
use DB;

class SocialAuthFacebookController extends Controller
{
 
     public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
        $getInfo = Socialite::driver('facebook')->user();
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
