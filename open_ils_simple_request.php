<?php
require('osrfMessage.php');
require('parse.php');
require('osrfResponse.php');

function open_ils_simple_request($arr, $m, $s, $server) {
	$endpoint = $server;
	if ($endpoint) {
	$a = new osrfMessage($m, $s, $arr, $endpoint);
	}
	else $a = new osrfMessage($m, $s, $arr);
			
			$response = $a->send();
			if ($response) {
				$response->parse();
				return $response;
			}
	else throw new Exception('Service Unavailable');
}
?>
