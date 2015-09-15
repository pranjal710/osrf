<?php
/**
* opensrf-php
*
* PHP version 5
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
/**
* Fieldmapper_abstract_class
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
abstract class Fieldmapper_Class
{
    private $_values = array();

    /**
    * Setter Function
    *
    * @param string $field The property to assign; an array key from classfieldmapper
    *
    * @param string $value The value to assign
    *
    * @return void
    */
    function __set($field, $value)
    {
        //Only set value if it is a known property.
        if (in_array($field, $this->_properties)) {
            $this->_values[$field] = $value;
        } else {
            throw new Exception(
                'fieldmapper class '.
                get_called_class().' has no '.$field.' .
                Invalid Field Parameter'
            );
        }
    }

    /**
    * Getter Function
    *
    * @param string $field Array key from classfieldapper
    *
    * @return string
    */
    function __get($field)
    {
        if ($field == "_properties") {
            return $this->$field;
        } elseif (array_key_exists($field, $this->_values)) {
            if (isset($this->_values[$field])) {
                return $this->_values[$field];
            } else {
                return null;
            }
        } else {
            throw new Exception(
                'fieldmapper class '.
                get_called_class()
                .' has no '.$field.' . Invalid Field Parameter'
            );
        }
    }

    /**
    * encode for opensrf
    *
    * @return array
    */
    function encodeForOpenSRF()
    {
        $t = array();
        $t['__c'] = get_called_class();
        $t['__p'] = array();
        for ($count = 0 ; $count < (count($this->_properties)) ; $count++) {
            $key = $this->_properties[$count];
            if (is_object($this->_values[$key])) {
                $t['__p'][] = $this->_values[$key]->encodeForOpenSRF();
            } else {
                $t['__p'][] = $this->_values[$key];
            }
        }
        return $t;
    }
}
?>
