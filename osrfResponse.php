<?php
class osrfResponse
{
	public $data;
	public $result;
	public $x_opensrf_from;
	public $x_opensrf_thread;

	function __construct($dta) {
		$this->data = $dta;
	}

	function parse() {
		$con = $this->data;
		$result_1 = parse_http_response($con);
		$result_ = json_decode($result_1[1]);
		$variables = get_object_vars($result_[0]);
		$keys = array_keys($variables);
		$variable_f = get_object_vars($variables[$keys[1]]->payload);
		$key_f = array_keys(get_object_vars($variables[$keys[1]]->payload));
		$this->result = $variable_f[$key_f[1]]->content;
		$this->x_opensrf_from = $result_1[0]['x-opensrf-from'];
		$this->x_opensrf_thread = $result_1[0]['x-opensrf-thread'];
	}

	function parse_resp() {
		$con = $this->data;
		$result_1 = stdclass_to_array($con);
		return $result_1['result'][0];
	}
}
?>
