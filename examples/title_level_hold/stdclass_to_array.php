<?php
function stdclass_to_array($ar) {
		if (is_object($ar)) {
			$ar = get_object_vars($ar);
		}
 
		if (is_array($ar)) {
			return array_map(__FUNCTION__, $ar);
		}
		else {
			// Return array
			return $ar;
		}
	}
 
?>
