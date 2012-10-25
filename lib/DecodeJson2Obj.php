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
* Given a data structure from OpenSRF, already json decoded, turn any
* array structures like array('__c' => 'foo', '__p' => array(abc,123,...))
* into fieldmapper objects.
*
* @param string $data A data structure
*
* @return object
*/

function decodeFromOpenSRF($data)
{
    if (!is_array($data)) {
        return $data;
    } else if (!isset($data['__c']) || !class_exists($data['__c'])) {
        return array_map('decodeFromOpenSRF', $data);
    }

    $class = $data['__c'];
    $new = new $class();
    foreach ($data['__p'] as $i => $value) {
        $field = $new->_properties[$i];
        if (!$field) {
            continue;
        }
        if (is_array($value)) {
            $new->$field = decodeFromOpenSRF($value);
        } else {
            $new->$field = $value;
        }
    }
    return $new;
}

?>

