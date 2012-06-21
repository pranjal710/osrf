<?php 
abstract class fieldmapper_class
	{
		private $values = array();
		function __set($field, $value) 
			{
				if (in_array($field, $this->$properties)) {
					$this->values[$field] = $value;
				}
				else
					throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
			}
		function __get($field) 
			{
				if (in_array($field, $this->$values)) {
					if (isset($this->$values[$field])) {
						return $this->$values[$field];
					}
					else return NULL;
				}
				else {
					throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
				}
			}

		function encodeForOpenSRF() 
			{
				$a = '"__c" => "'.get_called_class().'",\n';
				$b = '"__p" => array(';
				for ($count = 0 ; $count < (count($this->properties)) ; $count++) {
					$b = $b.'\n"'.$this->properties[$count].'",';
				}
				$b = substr($b , 0, -1);
				$b = $b.'\n)';
				$array_formed = 'array(\n'.$a.$b.'\n);';
				return $array_formed;
			}
	}
?>