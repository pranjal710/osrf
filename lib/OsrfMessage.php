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

use \GuzzleHttp\Client;

/**
* OsrfMessage
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
class OsrfMessage
{
    public $ch;
    public $guid;
    public $method;
    public $param = array();
    public $to;
    public $data;
    public $header;
    public $service;
    public $curl;
    public $server_result;
    public $endpoint;

    /**
    * Constructor.
    *
    * @param string $x method name
    *
    * @param string $z service name
    *
    * @param string $y parameter
    *
    * @param string $u endpoint
    *
    * @return string
    */
    function __construct($x, $z, $y, $u="opensrf")
    {
        if (is_string($x)) {
            $this->method = $x;
        } elseif (is_object($x)) {
            $this->method = $x;
        }
        if (is_string($z)) {
            $this->service = $z;
        } elseif (is_object($z)) {
            $this->service = $z;
        }
        $this->param = $y;
        $this->endpoint = $u;
    }

    /**
    * setter
    *
    * @return void
    */
    function setGuid()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                    .substr($charid, 0, 8).$hyphen
                    .substr($charid, 8, 4).$hyphen
                    .substr($charid, 12, 4).$hyphen
                    .substr($charid, 16, 4).$hyphen
                    .substr($charid, 20, 12)
                    .chr(125);// "}"

        }
            $this->guid = $uuid;
    }

    /**
    * getter
    *
    * @return int
    */
    function getGuid()
    {
        return $this->guid;
    }

    /**
    * header
    *
    * @return string
    */
    function header()
    {
        $this->setGuid();
        $this->header = array($this->service,
        time(), $this->getGuid());
        return $this->header;
    }

    /**
    * toArray
    *
    * @param string $data json_encoded string
    *
    * @return string
    */
    function toArray($data)
    {
        return "osrf-msg=" . urlencode($data);
    }

    /**
    * Creates object to send
    *
    * @param string $method The method
    *
    * @param array  $ar     Data
    *
    * @return string
    */
    function urldata($method, $ar)
    {
        $myobject3 = new stdClass;
        $myobject3->method = $method;
        $myobject3->params = $ar;
        $myobject2 = new stdClass;
        $myobject2->__c = 'osrfMethod';
        $myobject2->__p = $myobject3;
        $myobject0 = new stdClass;
        $myobject0->threadTrace = 0;
        $myobject0->type = 'REQUEST';
        $myobject0->payload = $myobject2;
        $myobject0->locale = 'en-US';
        $myobject = new stdClass;
        $myobject->__c = 'osrfMessage';
        $myobject->__p = $myobject0;
        $d = array($myobject);
        return json_encode($d);
    }

    /**
    * send
    *
    * @return object OsrfResponse
    */
    function send()
    {
        $endpoint = $this->endpoint;
        $data = $this->urldata($this->method, $this->param);
        $header = $this->header();

        $guzzleClient = new Client(
            array(
                'base_url' =>"http://" . $endpoint,
            )
        );
        $guzzleQuery = array("osrf-msg" => $data);
        $guzzleHeaders = array(
            'X-OpenSRF-service' => $header[0],
            'X-OpenSRF-xid' => $header[1],
            'X-OpenSRF-thread' => $header[2]
        );
        $guzzleResponse = $guzzleClient->post('/osrf-http-translator',
            array(
                'headers' => $guzzleHeaders,
                'body' => $guzzleQuery,
            )
        );
        $responseBody = $guzzleResponse->getBody();
        $responseHeaders = $guzzleResponse->getHeaders();
        //Use structure OsrfResponse expects.
        $returnResponse = $responseBody."\n";
        foreach ($responseHeaders as $name => $values) {
            $returnResponse .= ucfirst(strtolower($name)).": " . implode(", ", $values) . "\n";
        }
        $res = new OsrfResponse($returnResponse);
        return $res;
    }
}
?>
