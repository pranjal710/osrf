<?php
if ($this->to <> NULL)
{
$this->header = array(
	'X-OpenSRF-to: '.$to,
	'X-OpenSRF-xid: '.time(),
	'X-OpenSRF-thread: '.$this->get_guid()
	);
}
else
{
include_once ("guid.php");
//$guid = guid();
$this->set_guid(guid());
$this->header = array(
	'X-OpenSRF-service: '.$this->service,
	'X-OpenSRF-xid: '.time(),
	'X-OpenSRF-thread: '.$this->get_guid()
	);
}
?>