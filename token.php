<?php
require('osrfMessage.php');
require('parse.php');
require('osrfResponse.php');

function token($arr, $m, $s)
{
$endpoint = 'localhost'; //input
if ($endpoint)
{
$a = new osrfMessage($m, $s, $arr, $endpoint);
}
else
$a = new osrfMessage($m, $s, $arr);

	{
	$response = $a->send();
	if ($response) 
	{
	$response->parse();
	}
	
	else echo "Unable to reach the service";
	}

return $response;
}
//
?>
