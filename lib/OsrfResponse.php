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
     * Raw OpenSRF response.
     *
     * @var mixed
     */
    public $raw;

    /**
     * Raw OpenSRF request details, for makeshift troubleshooting.
     *
     * @var mixed
     */
    public $rawRequest;

    /**
     * Parsed OpenSRF response.
     *
     * @var mixed
     */
    public $parsed;

    /**
    * Constructor.
    *
    * @param string $raw raw
    *
    * @return void
    */
    public function __construct($raw)
    {
        $this->raw = $raw;
    }

    /**
    * Parse an OpenSRF response.
    *
    * @return object Result
    *
    * @throws Exception
    */
    public function parse()
    {
        //Perform initial parsing.
        $this->parsed = $this->parse_Http_response($this->raw);
        //A response may contain multiple messages...

        //Track STATUS(es) of the response
        $this->status = array();
        $problematicStatus = false;

        //Track RESULT(s) of the response
        $results = array();
        //Extract relevant messages into a result.

        foreach ($this->parsed['osrfmessages'] as $msg) {
            //@todo decodeFromOpenSRF() seems to take a JSON payload, that is itself nested in a payload via __c and __p?
            //As in, calling it first is meaningless.
            switch ($msg["__p"]["type"]) {
            case 'RESULT':
                $results[] = $this->decodeFromOpenSRF(
                    $msg["__p"]["payload"]["__p"]["content"]
                );
                break;
            case 'STATUS':
                $statusCode = $this->decodeFromOpenSRF(
                   $msg["__p"]["payload"]["__p"]["statusCode"]
                );
                $statusMsg = $this->decodeFromOpenSRF(
                   $msg["__p"]["payload"]["__p"]["status"]
                );
                $this->status[] = array(
                    'statusCode' => $statusCode,
                    'statusMsg' => $statusMsg,
                );
                //See http://stuff.coffeecode.net/OpenSRF/OpenSRF/tags/legacy_openils/HEAD/doc/OpenSRF-Messaging-Protocol.html
                //Heuristic: throw exception if one or more STATUS(es) seem problematic.
                if (
                    $statusCode == 400 ||
                    $statusCode == 403 ||
                    $statusCode == 404 ||
                    $statusCode == 408 ||
                    $statusCode == 417
                ) {
                    $problematicStatus = $statusCode . ': '.$statusMsg;
                }
            break;
            }
        }
        if ($problematicStatus) {
            throw new Exception("Problematic STATUS(es) in osrfResponse: " . $problematicStatus);
        }

        switch (count($results)){
        case 0:
            throw new Exception("No RESULT(s) in osrfMessage");
        case 1:
            //Return our single RESULT
            return $results[0];
        default:
            //Return our multiple RESULTS
            return $results;
        }
    }


    /**
     * is_open_ils_event
     *
     * @param array $o response array
     *
     * @return bool
     */
    public function Is_Open_Ils_event()
    {
        return is_array($this->raw) && array_key_exists("ilsevent", $this->raw);
    }

    /**
     * Parse a http response
     *
     * @param string $string HTTP Response string
     *
     * @return array
     *
     * @throws Exception
     */
    protected function parse_Http_response($string)
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
        //Re-create, then parse, the actual osrfMessage(s).
        if (!isset($headers['[{"__c"'])){
            throw new Exception("did not get osrfMessage from network");
        }
        $osrfMessage = '[{"__c":'.$headers['[{"__c"'];
        $osrfMessage = json_decode($osrfMessage, true);
        return array(
            'headers' => $headers,
            'content' => trim($content),
            'osrfmessages' => $osrfMessage
        );
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
    protected function decodeFromOpenSRF($data)
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
