<?php
require('osrfMessage.php');
require_once('parse.php');
require_once('parse_result.php');

function token($arr, $m, $s)
{
//$arr = array(2,3); // input
//$m = 'add'; //input
//$s = 'opensrf.math'; //input
$endpoint = 'localhost'; //input
if ($endpoint)
{
$a = new osrfMessage($m, $s, $arr, $endpoint);
}
else
$a = new osrfMessage($m, $s, $arr);
#$c = $a->toArray();
//echo "Encoded url<br /><pre>".$a->toArray()."</pre><HR />";


//echo "Header sent<br /><pre>";
//print_r ($a->header());

echo "</pre><HR />";
	
	{
	$response = $a->send();
	if ($response) 
	{
	$response->parse();
$a->set_guid($response->x_opensrf_thread);
$a->to = $response->x_opensrf_from;
echo "<pre>";
print_r ($a->header);
echo "</pre>";

	}
	
	else echo "Unable to reach the service";
	}
//echo "<HR />";
return $response;
}
//
?>
