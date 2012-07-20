<?php
include ("./../../osrfSession.php");

$ses = new osrfSession("hostname"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {
	
	try {
		$ses->loadFieldmapper(FALSE); //FALSE to parse fieldmapper and create new fieldmapper class, TRUE for all other cases.
	} catch (Exception $e_load_idl) {
						echo 'Error: ', $e_load_idl->getMessage() , "\n";
					}
					
	$authtoken = $ses->login('username', 'password');      ////  Authentication token
	
	$hold = new aou();
	
	$response = $ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", $authtoken, $hold)->parseResp();
	
	if ($response) {
		if (Is_Open_Ils_event($response)) {
			echo "Could not place hold because of error: " . $response['result']["desc"];
		} 
		else echo "<pre>"; print_r ($response['result']); echo "</pre>";
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>
