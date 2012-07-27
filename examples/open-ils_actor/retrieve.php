<?php
include ("./../../osrfSession.php");

$ses = new osrfSession("localhost"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {
	
	try {
		$ses->loadFieldmapper(false); //FALSE to parse fieldmapper and create new fieldmapper class, TRUE for all other cases.
	} catch (Exception $e_load_idl) {
						echo 'Error: ', $e_load_idl->getMessage() , "\n";
					}
					
	$authtoken = $ses->login('username', 'password');      ////  Authentication token
	
	$response = $ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", $authtoken)->parseResp();
	//echo "<pre>"; print_r ($ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", $authtoken, $hold)); echo "</pre>";
	if ($response) {
		if (Is_Open_Ils_event($response)) {
			echo "Could not place hold because of error: " . $response['result']["desc"];
		} 
		else {
		echo "<pre>"; print_r (decodejson2obj(json_encode($response['result']))); echo "</pre>";
		}
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>

