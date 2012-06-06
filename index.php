<?php
require_once('osrfMessage.php');
require_once('parse.php');

$arr = array(2,3); // input
$m = 'add'; //input
$s = 'opensrf.math'; //input
$endpoint = 'evergreen.owwl.org'; //input
if ($endpoint)
{
$a = new osrfMessage($m, $s, $arr, $endpoint);
}
else
$a = new osrfMessage($m, $s, $arr);
#$c = $a->toArray();
echo "Encoded url<br /><pre>".$a->toArray()."</pre><HR />";


echo "Header sent<br /><pre>";
print_r ($a->header());

echo "</pre><HR />";
	{
	$con = $a->send();
	if ($con) 
	
	{
	$result1 = parse_http_response($con);
	echo "Parsed Response <br /><pre>";
	print_r ($result1);
	echo "</pre>";



$result = json_decode($result1[1]);
	
echo "<HR /> Result <pre>";
$variables = get_object_vars($result[0]);
$keys = array_keys($variables);
$variable_f = get_object_vars($variables[$keys[1]]->payload);
$key_f = array_keys(get_object_vars($variables[$keys[1]]->payload));
print_r ($variable_f[$key_f[1]]->content);                                                 ///// FINAL RESULT
echo "</pre>";
	}
	
	
	else echo "Unable to reach the service";
	}echo "</pre><HR />";
	
/*
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_HEADER, 1);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

 $server_result = curl_exec($ch);
echo curl_errno($ch); 
 echo '<pre>';
 print_r ($server_result);
 echo '</pre>';




$data = $a->toArray();
$a->ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($a->ch, CURLOPT_POST, 1);
curl_setopt($a->ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($a->ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a->ch, CURLOPT_HTTPHEADER, $header);
//curl_setopt($a->ch, CURLOPT_HTTPHEADER, $header);

$result1 = curl_exec($a->ch);
$result = json_decode($result1);
echo '<HR />';
 echo '<pre>';
 echo $result1;
 echo '</pre>';
echo '<HR />';
?*/
?>
