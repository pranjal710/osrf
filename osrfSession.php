<?php
class osrfSession
{
public $server;
public $fm_IDL;

function __construct($u="localhost") 
	{
		$this->server = $u;
		$this->fm_IDL = "http://".$u."/reports/fm_IDL.xml";
	}

function login($user, $pass)
	{
	return open_ils_login($user, $pass, $this->server);
	}
	
function loadcache($option)
	{
	if ($option == FALSE) include ("./../../fieldmapper.php");
	}

function checkhost()
	{
	$ch_idl = curl_init($this->fm_IDL);
	curl_setopt($ch_idl, CURLOPT_NOBODY, true);
	curl_exec($ch_idl);
	$retcode = curl_getinfo($ch_idl, CURLINFO_HTTP_CODE); // $retcode > 400 -> not found, $retcode = 200, found.
	curl_close($ch_idl);
	return $retcode;
	}

function request()
	{
		$service = func_get_arg(0); 
		$method = func_get_arg(1);
		$arr = array();
		$k = 2;
		while (func_get_arg($k) !== FALSE) {
			$add = func_get_arg($k);
			if(is_object($add)) $add = $add->encodeForOpenSRF();
			$arr[] = $add;
			$k++;
			}
		$res = open_ils_simple_request($arr, $method, $service, $this->server);
		$new_obj = new osrfResponse($res);
		return $new_obj;
	} 
}
?>