<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function view($page) {
		$this->load->view('test/' . $page);
	}
}
