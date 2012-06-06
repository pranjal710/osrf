<?php
/*function connection($endpoint, $data, $header)
{
$url6 = 'http://'.$endpoint.'/osrf-http-translator';
 $this->curl = curl_init();
 
 curl_setopt($this->curl, CURLOPT_URL, $url6);
 curl_setopt($this->curl, CURLOPT_HEADER, 1);
 curl_setopt($this->curl, CURLOPT_POST, 1);
 curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
 curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($this->curl, CURLOPT_HTTPHEADER, $header);

$server_result = curl_exec($this->curl);
echo curl_errno($this->curl); 
 echo '<pre>';
 print_r ($server_result);
 echo '</pre>';

}*/

function connection($endpoint, $data, $header)
{
$url_post = 'http://'.$endpoint.'/osrf-http-translator';
$__curl = curl_init();
 
 curl_setopt($__curl, CURLOPT_URL, $url_post);
 curl_setopt($__curl, CURLOPT_HEADER, 1);
 curl_setopt($__curl, CURLOPT_POST, 1);
 curl_setopt($__curl, CURLOPT_POSTFIELDS, $data);
 curl_setopt($__curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($__curl, CURLOPT_HTTPHEADER, $header);

$server_result = curl_exec($__curl);
return $server_result;
}
?>