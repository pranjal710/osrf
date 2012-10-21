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
* OsrfResponse
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
class OsrfResponse
{
    public $data;
    public $result;
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
    * @return object Result
    */
    function parse()
    {
        $first = Parse_Http_response($this->data);
        $result = '[{"__c":'.$first[0]['[{"__c"'];
        $result_list = array();
        if ($result) {
            $messages = Stdclass_to_array(json_decode($result));
            foreach ($messages as $msg) {
                if ($msg["__p"]["type"] == "RESULT") {
                    $result_list[] = decodeFromOpenSRF(
                        $msg["__p"]["payload"]["__p"]["content"]
                    );
                }
            }
            
            if (count($result_list) == 1) {
                return $result_list[0];
            } else {
                return $result_list;
            }
        } else {
            print_r($this->data);
            throw new Exception("did not get osrfMessage from network");
        }
        
    }
}
?>