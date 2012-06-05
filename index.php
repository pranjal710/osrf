<?php
require_once('osrfMessage.php');

$arr = array(2,3); // input
$m = 'add'; //input
$s = 'opensrf.math'; //input
$endpoint = 'evergreen.owwl.org'; //input

$a = new osrfMessage($m, $s, $arr);
#$c = $a->toArray();
echo "<pre>".$a->toArray()."</pre><HR /><pre>";
print_r ($a->header());
echo "</pre><HR /><HR /><HR /><HR /><HR />";
	{
	$con = $a->connection($endpoint, $a->toArray(), $a->header());
	if ($con) print_r ($con);
	else echo "Unable to reach the service";
	}echo "</pre><HR /><HR /><HR /><HR /><HR />";
	
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
