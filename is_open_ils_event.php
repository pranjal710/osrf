<?php
/**
* opensrf_php
*
* PHP version 5
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
/**
* Is_open_ils_event
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/

/**
* is_open_ils_event
*
* @param array $o response array
*
* @return bool
*/
function Is_Open_Ils_event($o)
{
    return is_array($o) && array_key_exists("ilsevent", $o);
}
?>
