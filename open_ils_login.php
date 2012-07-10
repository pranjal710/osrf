<?php
if ($fm_IDL_loadcache == FALSE) include ("./../../fieldmapper.php");
if (!(file_exists('classfieldmapper.php'))) echo "Error: Classfieldmapper file not present.<br />";
include ("classfieldmapper.php");
include ("./../../decodejson2obj.php");
include ("./../../is_open_ils_event.php");

require('open_ils_simple_request.php');
require('stdclass_to_array.php');
function open_ils_login($username, $password, $server) {
	$arr = array($username);
	$m = 'open-ils.auth.authenticate.init';
	$s = 'open-ils.auth';
	$response0 = open_ils_simple_request($arr, $m, $s, $server);
	$seed = $response0->result;
	$password = md5($seed . md5($password));
	$arr = array("username"=>$username, "password"=>$password, "type"=>"opac"); 
	$response1 = open_ils_simple_request(array($arr), $m = 'open-ils.auth.authenticate.complete', $s = 'open-ils.auth', $server);
	$login_response = stdclass_to_array($response1);
	if ($login_response['result']['ilsevent']=='0') {
		return $login_response['result']['payload']['authtoken'];
	}
	else echo "Login Error! <br /> ";//return $login_response['result'];
}
?>
