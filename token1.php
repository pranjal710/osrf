<?php
require_once('osrfMessage.php');
require_once('parse.php');
require_once('parse_result.php');

{
$arr = array(pranjal,prabhasH1); // input
$m = 'open-ils.auth.authenticate.init'; //input
$s = 'open-ils.auth'; //input
$endpoint = 'localhost'; //input
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
	$response = $a->send();
	if ($response) 
	{
	$token = $response->parse();
	}
	
	else echo "Unable to reach the service";
	}
echo "<HR />";
return $token;
}
//
?>
