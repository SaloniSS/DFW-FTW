<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->columns = [
			"size",
			"children",
			"art0",
			"art1",
			"art2",
			"art3",
			"art4",
			"nature",
			"sport0",
			"sport1",
			"sport2",
			"sport3",
			"sport4",
			"music0",
			"music1",
			"transit",
			"industry"
		];
	}

	

}