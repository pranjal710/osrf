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
    /**
     * Raw data from an OpenSRF response.
     *
     * @var mixed
     */
    public $data;

    /**
    * Constructor.
    *
    * @param string $data data
    *
    * @return void
    */
    function __construct($data)
    {
        $this->data = $data;
    }

    /**
    * Parse an OpenSRF response.
    *
    * @return object Result
    */
    function parse()
    {
        $first = $this->parse_Http_response($this->data);
        $result = '[{"__c":'.$first[0]['[{"__c"'];
        $result_list = array();
        if ($result) {
            $messages = json_decode($result, true);
            foreach ($messages as $msg) {
                if ($msg["__p"]["type"] == "RESULT") {
                    $result_list[] = $this->decodeFromOpenSRF(
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


    /**
     * is_open_ils_event
     *
     * @param array $o response array
     *
     * @return bool
     */
    function Is_Open_Ils_event()
    {
        return is_array($this->data) && array_key_exists("ilsevent", $this->data);
    }

    /**
     * Parse a http response
     *
     * @param string $string HTTP Response string
     *
     * @return array
     */
    function parse_Http_response($string)
    {
        $headers = array();
        $content = '';
        $str = strtok($string, "\n");
        $h = null;
        while ($str !== false) {
            if ($h and trim($str) === '') {
                $h = false;
                continue;
            }
            if ($h !== false and false !== strpos($str, ':')) {
                $h = true;
                list($headername, $headervalue) = explode(':', trim($str), 2);
                $headername = strtolower($headername);
                $headervalue = ltrim($headervalue);
                if (isset($headers[$headername])) {
                    $headers[$headername] .= ',' . $headervalue;
                } else {
                    $headers[$headername] = $headervalue;
                }
            }
            if ($h === false) {
                $content .= $str."\n";
            }
            $str = strtok("\n");
        }
        return array($headers, trim($content));
    }

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
            // Recursion.
            return array_map(array($this, __FUNCTION__), $data);
        }

        $class = $data['__c'];
        $new = new $class();
        foreach ($data['__p'] as $i => $value) {
            $field = $new->_properties[$i];
            if (!$field) {
                continue;
            }
            if (is_array($value)) {
                $new->$field = $this->decodeFromOpenSRF($value);
            } else {
                $new->$field = $value;
            }
        }
        return $new;
    }
}
?>
