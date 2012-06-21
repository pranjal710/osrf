<?php 

abstract class fieldmapper_class{
private $values = array();

function __set($field, $value) 
{
if (in_array($field, $this->$properties))
{
$this->values[$field] = $value;
}
else
   throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
}

function __get($field) 
{
if (in_array($field, $this->$values)) {
            return $this->$values[$field];
        }
else
{
      throw new Exception('fieldmapper class '.get_called_class().' has no '.$field.' . Invalid Field Parameter');
}
        /*
$trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $field .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
        */
}

}

?>
