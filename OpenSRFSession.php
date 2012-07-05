<?php
class OpenSRFSession
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

function request($service, $method, $auth, $hold)
	{
		$arr = array ($auth, $hold);
		$res = open_ils_simple_request($arr, "open-ils.circ.holds.create", "open-ils.circ");
		$new_obj = new osrfResponse($res);
		return $new_obj;
	} 
}
?>
