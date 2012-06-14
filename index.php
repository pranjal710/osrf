<?php
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
if ($flag = '1')
{

echo "Username : ".$_POST['username']."<br />Password : ".$_POST['password']."<br />";

$response0 = token($arr = array($_POST['username']), $m = 'open-ils.auth.authenticate.init', $s = 'open-ils.auth');
echo "x-opensrf-thread : ".$response0->x_opensrf_thread."<br />";
echo "x-opensrf-from : ".$response0->x_opensrf_from."<br />";//,$_POST['password']
echo "Authentication Token : ". $response0->result."<br />";

$seed = $response0->result;
$password = md5($seed . md5($_POST['password']));
echo "<br /> Password : ".$password."<br />";

$response1 = token($arr = array('None', $_POST['username'], $password, 'None'), $m = 'open-ils.auth.authenticate.complete', $s = 'open-ils.auth');
echo "x-opensrf-thread : ".$response1->x_opensrf_thread."<br />";
echo "x-opensrf-from : ".$response1->x_opensrf_from."<br />";//,$_POST['password']
echo "Authentication Token : ". $response1->result."<br />";

}
?>
