<?php 
abstract class fieldmapper_class
	{
		private $_values = array();
		function __set($field, $value) 
			{
				if ($field == "_properties") {
                    			$this->$field = $value;
                		}
                		else if (in_array($field, $this->_properties)) {
					$this->_values[$field] = $value;
				}
				else
					throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
			}
		function __get($field) 
			{
				if ($field == "_properties") {
					return $this->$field;
				}
				else if (in_array($field, $this->_values)) {
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
					$t['__p'][] = $this->_values[$key];
				}
				return $t;
			}
	}
?>
