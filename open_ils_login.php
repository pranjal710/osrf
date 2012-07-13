<?php
require('open_ils_simple_request.php');
require('stdclass_to_array.php');
function open_ils_login($username, $password, $server) {
	$arr = array($username);
	$m = 'open-ils.auth.authenticate.init';
	$s = 'open-ils.auth';
	
	try {
		$response0 = open_ils_simple_request($arr, $m, $s, $server);
	} catch (Exception $e0) {
				echo 'Error: ',  $e0->getMessage(), "\n";
	}
	
	$seed = $response0->result;
	$password = md5($seed . md5($password));
	$arr = array("username"=>$username, "password"=>$password, "type"=>"opac"); 
	
	try {
		$response1 = open_ils_simple_request(array($arr), $m = 'open-ils.auth.authenticate.complete', $s = 'open-ils.auth', $server);
	} catch (Exception $e1) {
				echo 'Error: ',  $e1->getMessage(), "\n";
	}
	
	$login_response = stdclass_to_array($response1);
	if ($login_response['result']['ilsevent']=='0') {
		return $login_response['result']['payload']['authtoken'];
	}
	else throw new Exception('Login Error');//return $login_response['result'];
}
?>
