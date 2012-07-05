<?php 
abstract class fieldmapper_class
	{
		private $_values = array();
		function __set($field, $value) 
			{ 
				$flag = 1;
				for ($x = 0 ; $this->_properties[$x] != NULL ; $x++) {
					if ($this->_properties[$x] == $field) {
					$this->_values[$field] = $value;
					$flag = 2;
					}
				}
				if ($flag == 1)
					throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
			}
		function __get($field) 
			{
				if ($field == "_properties") {
					return $this->$field;
				}
				else if (array_key_exists($field, $this->_values)) {
					if (isset($this->_values[$field])) {
						return $this->_values[$field];
					}
					else return NULL;
				}
				else {
					throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
				}
			}

		function encodeForOpenSRF() 
			{ 
				$t = array();
				$t['__c'] = get_called_class();
				$t['__p'] = array();
				for ($count = 0 ; $count < (count($this->_properties)) ; $count++) {
					$key = $this->_properties[$count];
					if (is_object($this->_values[$key])) {
					$t['__p'][] = $this->_values[$key]->encodeForOpenSRF();
					}
					else
					$t['__p'][] = $this->_values[$key];
				}
				return $t;
			}
	}
?>