<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InfoUser;  
use Illuminate\Http\Response; 

class PagesController extends Controller
{
    public function test(){
        $title = 'Welcome to my Testsite!';
        return view('pages.test') -> with('title', $title);
    }

    public function ip(){
        $mainIp = InfoUser::get_ip();
        return response() -> json([
            "ip" => $mainIp
        ]);
    }

    public function header(){
        $header = InfoUser::get_header();
        return response() -> json([
            "headerh" => $header
        ]);
    }

    public function md5(){
        $param = request()->request->get("text");
        if (!$param){
            return response()->json([
                "error" => "missing parameter!"
            ]);
        }
        $md5 = InfoUser::get_md5($param);
        return response()->json([
            "md5" => $md5,
            "original_text" => $param 
        ]);
    }

    public function info(){
        $mainIp = InfoUser::get_ip();
        $browser = InfoUser::get_browser();
        $user = InfoUser::get_user_agent(); 
        $host = InfoUser::get_host(); 
        $header = InfoUser::get_header(); 
        return response()->json([
            "ip" => $mainIp,
            "browser" => $browser,
            "user" => $user,
            "host" => $host,
            "header" => $header
        ]);
    //    return view ('pages.info') -> with('ipJSON', $ipJSON) -> with('browserJSON', $browserJSON) -> with('user', $user) -> with('hostJSON', $hostJSON); -> with('headerJSON', $headerJSON);
    
    }

}