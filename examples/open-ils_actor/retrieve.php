<?php
function tree($a, $n = 0)
{
    $f = 1;
    if (array_key_exists('__p', $a)) {
	$n = $n + 2;
	tree($a['__p'], $n);
    $f = 2;
    }

    else if (is_array($a[0]) && (!(empty($a[0])))) {
    $n = $n + 2;
	for ( $j = 0 ; is_array($a[$j]) ; $j++) {
	    tree($a[$j], $n);
	}
    $f = 2;
    }
    
    if ($f == 1) {
	    for ( $i = 0 ; $i < $n; $i++ ) {
		    echo "&nbsp;&nbsp;";
		}
		echo $a[6]."<br />";
	}
}
?>

<?php
include ("./../../osrfSession.php");

$ses = new osrfSession("localhost"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {
	
	try {
		$ses->loadFieldmapper(false); //FALSE to parse fieldmapper and create new fieldmapper class, TRUE for all other cases.
	} catch (Exception $e_load_idl) {
						echo 'Error: ', $e_load_idl->getMessage() , "\n";
					}
					
	$authtoken = $ses->login('pranjal', 'prabhasH1');      ////  Authentication token
	
	$hold = new aou();
	
	$response = $ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", $authtoken, $hold)->parseResp();
	
	if ($response) {
		if (Is_Open_Ils_event($response)) {
			echo "Could not place hold because of error: " . $response['result']["desc"];
		} 
		else tree($response['result']);
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>
