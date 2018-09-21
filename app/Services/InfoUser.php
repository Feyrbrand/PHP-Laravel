<?php

namespace App\Services; 

// get Userinfo for auth
class InfoUser
{
	public static function get_user_agent() 
	{
		return  $_SERVER['HTTP_USER_AGENT'];
	}

	// get ip
	// get all possible IPs from current user
	// check all possible states - forwarded, forwarded for, remote addr, local ip 
	//
	 public static function get_ip() 
	 {
		$mainIp = '';
		if (getenv('HTTP_CLIENT_IP'))
			$mainIp = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$mainIp = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$mainIp = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$mainIp = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$mainIp = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$mainIp = getenv('REMOTE_ADDR');
		else
			$mainIp = 'UNKNOWN';
	
		return $mainIp;
	}
	// get browser
	// not part of the challenge, but it was fun do to
	// state the current browser
	//
	public static function  get_browser() 
	{
		$user_agent= self::get_user_agent();
		$browser        =   "Unknown Browser";
		$browser_array  =   array(
			'/msie/i'       =>  'Internet Explorer',
			'/Trident/i'    =>  'Internet Explorer',
			'/firefox/i'    =>  'Firefox',
			'/safari/i'     =>  'Safari',
			'/chrome/i'     =>  'Chrome',
			'/edge/i'       =>  'Edge',
			'/opera/i'      =>  'Opera',
			'/netscape/i'   =>  'Netscape',
			'/maxthon/i'    =>  'Maxthon',
			'/konqueror/i'  =>  'Konqueror',
			'/ubrowser/i'   =>  'UC Browser',
			'/mobile/i'     =>  'Handheld Browser'
		);
		foreach ($browser_array as $regex => $value) 
		{
			if (preg_match($regex, $user_agent)) 
			{
				$browser    =   $value;
			}
		}
		return $browser;
	}
	// get header information
	// need: accept-language, host, accept-charset, accept, referer
	
	// get host
	//
	public static function get_host()
	{
	//	$host = request() -> getHttpHost();
		$host = request() -> url();
		return $host;  
	}
	
	public static function get_header()
	{
		$header_array = request() -> header();
	// 	print_r($header_array); die(); 
	
		foreach ($header_array as $key => $item)
		{ 
			foreach ($item as $innerkey => $inneritem)
			{
				$string = explode(',', $inneritem);
				//print_r($string); 
				//	{
					/*
					list($innerkey, $value) = explode('=', $inneritem);
						$value = trim($value, '"');
						echo ($match[1].' -> '.$value."\n");
				
					}	*/
		
			}	
		}
		/*$headerJSON = json_encode($header_array);
		print_r($headerJSON);
		die(); */
		return $header_array;
		//array_keys()
		//array_values  
	}
	/*foreach ($header_array as $key => $item)  {
		foreach ($header_array as $innerkey => $inneritem)  {
			list($innerkey, $value) = explode('=', $inneritem);
				$value = trim($value, '"');
				echo ($match[1].' -> '.$value."\n");
	*/
	public static function get_md5($str)
	{
		return md5($str); 
	}			
}