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
	return open_ils_login($user, $pass);
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

function request($service, $method, $auth, $hold)
	{
		if(is_object($hold)) $hold = $hold->encodeForOpenSRF();
		$arr = array ($auth, $hold);
		$res = open_ils_simple_request($arr, "open-ils.circ.holds.create", "open-ils.circ");
		$new_obj = new osrfResponse($res);
		return $new_obj;
	} 
}
?>
