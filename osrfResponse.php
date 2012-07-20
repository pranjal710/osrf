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
* OsrfResponse
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
class OsrfResponse
{
    public $data;
    public $result;
    public $x_opensrf_from;
    public $x_opensrf_thread;
    /**
    * constructor
    *
    * @param string $dta data
    *
    * @return void
    */
    function __construct($dta)
    {
        $this->data = $dta;
    }
    /**
    * parse
    *
    * @return void
    */
    function parse()
    {
        $con = $this->data;
        $result_1 = Parse_Http_response($con);
        $result_ = json_decode($result_1[1]);
        $variables = get_object_vars($result_[0]);
        $keys = array_keys($variables);
        $variable_f = get_object_vars($variables[$keys[1]]->payload);
        $key_f = array_keys(get_object_vars($variables[$keys[1]]->payload));
        $this->result = $variable_f[$key_f[1]]->content;
        $this->x_opensrf_from = $result_1[0]['x-opensrf-from'];
        $this->x_opensrf_thread = $result_1[0]['x-opensrf-thread'];
    }
    /**
    * parseResp
    *
    * @return void
    */
    function parseResp()
    {
        $con = $this->data;
        $result_1 = Stdclass_To_array($con);
        return $result_1;
    }
}
?>
