<?php
if ($global_to)
{
$this->header = array(
	'X-OpenSRF-to: '.$global_to,
	'X-OpenSRF-xid: '.time(),
	'X-OpenSRF-thread: '.$global_guid
	);
}
else
{

//$guid = guid();
//if ($this->guid !== NULL) 
{
include_once ("guid.php");
$this->set_guid(guid());
}
$this->header = array(
	'X-OpenSRF-service: '.$this->service,
	'X-OpenSRF-xid: '.time(),
	'X-OpenSRF-thread: '.$this->get_guid()
	);
}
?>
