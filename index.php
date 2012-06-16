<?php
<<<<<<< HEAD
include ("open_ils_login.php");
$t = open_ils_login('pranjal', 'prabhasH1');
echo "<pre>";
print_r ($t);
echo "</pre>";
?>
=======
require('parse.php');
require('token.php');

$flag = '0';
if ((isset($_POST['username'])) && (isset($_POST['password'])))
{
$flag = '1';
}
?>
<html>
<form action="index.php" method="POST">
Username : <input type="text" name="username" value="" /><br />
Password : <input type="password" name="password" value="" /><br />
<input type="submit" name="Submit" value="Submit" />
</form>
<HR />
<strong>Response</strong><br /><br />
</html>


<?php
if ($flag == '1')
{
$arr = array($_POST['username']);
$m = 'open-ils.auth.authenticate.init';
$s = 'open-ils.auth';

echo "Username : ".$_POST['username']."<br />Password : ".$_POST['password']."<br />";

$response0 = token($arr, $m, $s);
echo "x-opensrf-thread : ".$response0->x_opensrf_thread."<br />";
echo "x-opensrf-from : ".$response0->x_opensrf_from."<br />";//,$_POST['password']
echo "Authentication Token : ". $response0->result."<br />";

//$b->set_guid($response0->x_opensrf_thread);
//$b->to = $response0->x_opensrf_from;

//echo "<br /><br /><br />To ".$b->to."<br />"; //works
//echo "guid ".$b->guid."<br /><br /><br />";//works

//$global_to = $response0->x_opensrf_from;
//$global_guid = $response0->x_opensrf_thread;

$seed = $response0->result;
$password = md5($seed . md5($_POST['password']));
echo "<br /> Password : ".$password."<br />";


$arr = array("workstation"=>"None", "username"=>$_POST['username'], "password"=>$password, "type"=>"None"); 
print_r ($arr);
$response1 = token($arr, $m = 'open-ils.auth.authenticate.complete', $s = 'open-ils.auth');
echo "x-opensrf-thread : ".$response1->x_opensrf_thread."<br />";
echo "x-opensrf-from : ".$response1->x_opensrf_from."<br />";//,$_POST['password']
echo "Authentication Token : ". $response1->result."<br />";

}
?>
>>>>>>> f9e50c03f3c8090ca64ba8f4ebb0e605c7bbc2f2
