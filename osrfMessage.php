<?php
/**

*/

class osrfMessage
{
public $ch;
public $guid;
public $_method;
public $param = array();
public $to;
public $header;
public $service;
public $__curl;
public $server_result;

    function __construct($x, $z, $y, $u="opensrf") // x=method, y=param, z=service, u=endpoint
    {
        if (is_string($x)) {
            $this->_method = $x;
        } elseif (is_object($x)) {
            $this->_method = $x;
            // radix::dump($x);
        }
        if (is_string($z)) {
            $this->service = $z;
        } elseif (is_object($z)) {
            $this->service = $z;
        }
		$this->param = $y;
		$this->endpoint = $u;
		
    }
	
	function set_guid($guid)
	{
	 $this->guid = $guid;
	}
	
	
	function get_guid()
	{
	return $this->guid;
	}
    /**
    
	
    
    public function getMethod()
    {
        return $this->_method;
    }
    /**
    */
	
	function header()
{
include_once ("header.php");
return $this->header;
}
/*
	function header($to , $guid)
{


}
	*/
    function toArray()
    {
include_once ("url1.php");
$url4 = url_data1 ($this->_method, $this->param);
return $url4;
    }
	
	
	
	
	function send()
{
$endpoint = $this->endpoint;
$data = $this->toArray();
$header = $this->header();
$url_post = 'http://'.$endpoint.'/osrf-http-translator';
 $this->__curl = curl_init();
 
 curl_setopt($this->__curl, CURLOPT_URL, $url_post);
 curl_setopt($this->__curl, CURLOPT_HEADER, 1);
 curl_setopt($this->__curl, CURLOPT_POST, 1);
 curl_setopt($this->__curl, CURLOPT_POSTFIELDS, $data);
 curl_setopt($this->__curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($this->__curl, CURLOPT_HTTPHEADER, $header);

$this->server_result = curl_exec($this->__curl);
if (curl_error($this->__curl) <> 0 )
{
$error = 'Curl error: ' . curl_error($this->__curl);

return $error;
}
return $this->server_result;
/*
echo curl_errno($this->curl); 
 echo '<pre>';
 print_r ($server_result);
 echo '</pre>';
*/
}



	
/*
echo curl_errno($this->curl); 
 echo '<pre>';
 print_r ($server_result);
 echo '</pre>';
*/
}
?>
