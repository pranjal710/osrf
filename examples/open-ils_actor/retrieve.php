<?php
function tree($a, &$obj)
{
    $f = 1;
    if (array_key_exists('__p', $a)) {
	//if($field != null) $obj->$field = new aou;
	tree($a['__p'], $obj);
    $f = 2;
    }

    else {
    for ( $j = 0 ; $j < (count($a)) ; $j++) {
		if (is_array($a[$j]) && (!(empty($a[$j])))) {
			if (array_key_exists('__p', $a[$j])) {
				$k = new aou(); $field = $k->_properties[$j];
				$obj->$field = new aou();
				tree($a[$j], $obj->$field);
				$f = 2;
			}
			else {
				for ( $k = 0 ; $k < (count($a[$j])) ; $k++)
				  {
					if (is_array($a[$j][$k]) && (!(empty($a[$j][$k]))))
					tree($a[$j][$k], $obj);
				  }
			}
		}
    
	}    
   }
    
    if ($f == 1) {
		$obj->name = $a[6];
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
					
	$authtoken = $ses->login('username', 'password');      ////  Authentication token
	
	$hold = new aou();
	
	$response = $ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", $authtoken, $hold)->parseResp();
	
	if ($response) {
		if (Is_Open_Ils_event($response)) {
			echo "Could not place hold because of error: " . $response['result']["desc"];
		} 
		else {
			$obj = new aou();
			tree($response['result'], $obj); 
echo "<pre>"; print_r ($obj); echo "</pre>";
		}
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>

