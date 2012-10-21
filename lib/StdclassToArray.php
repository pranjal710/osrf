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
* Stdclass_to_array
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/

/**
* Stdclass_To_array
*
* @param array $ar array to convert to object
*
* @return array
*/
function Stdclass_To_array($ar)
{
    if (is_object($ar)) {
        $ar = get_object_vars($ar);
    }
    if (is_array($ar)) {
        return array_map(__FUNCTION__, $ar);
    } else {
        return $ar;
    }
} 
?>
