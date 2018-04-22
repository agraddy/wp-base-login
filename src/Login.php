<?php
namespace agraddy\base;

class Login {
	public $config = [];

	function __construct() {
	}

	function config($key, $value) {
		$this->config[$key] = $value;
	}
}

?>
