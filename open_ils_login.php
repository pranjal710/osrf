<?php
require('token.php');

function open_ils_login($username, $password)
{
$arr = array($username);
$m = 'open-ils.auth.authenticate.init';
$s = 'open-ils.auth';


$response0 = token($arr, $m, $s);

$seed = $response0->result;
$password = md5($seed . md5($password));

$arr = array("username"=>$username, "password"=>$password, "type"=>"opac"); 
$response1 = token(array($arr), $m = 'open-ils.auth.authenticate.complete', $s = 'open-ils.auth');

$variables = get_object_vars($response1->result); 
$keys = array_keys($variables);
$login_response = array(
"ilsevent"=>$variables[$keys[0]],
"textcode"=>$variables[$keys[1]],
"desc"=>$variables[$keys[2]],
"pid"=>$variables[$keys[3]],
"stacktrace"=>$variables[$keys[4]],
"authtoken"=>$variables[$keys[5]]->authtoken,
"authtime"=>$variables[$keys[5]]->authtime);
return $login_response;
}

?>
