<?php 

abstract class fieldmapper_class{
private $values = array();

function __set($field, $value) 
{
$this->values[$field] = $value;
}

function __get($field) 
{
if (array_key_exists($field, $this->$values)) {
            return $this->$values[$field];
        }
else
return NULL;
        
}

}

?>
