<?php 

abstract class fieldmapper_class{
private $values = array();

function __set($field, $value) 
{
if (!(array_key_exists($field, $this->$properties)))
{
   throw new Exception('Invalid Field Parameter');
}
else
$this->values[$field] = $value;
}

function __get($field) 
{
if (array_key_exists($field, $this->$values)) {
            return $this->$values[$field];
        }
else
{
      throw new Exception('Invalid Field Parameter');
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
