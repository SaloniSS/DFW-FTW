<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->CLIENT_ID = $this->config->item('login')->web->client_id;
		$this->user_id = $this->session->user_id;
	}

	private function exitIfNotLoggedIn() {
		if (!$this->user_id) {
			header('Location: /');
		}
	}

	public function landing()
	{
		$data['google_signin_client_id'] = $this->CLIENT_ID;
		$this->load->view('landing', $data);
	}

	public function form() {
		$this->exitIfNotLoggedIn();
		$data = [];

		$this->load->view('form', $data);
	}

	public function results() {
		$this->exitIfNotLoggedIn();
		$data = [];

		$this->load->view('results', $data);
	}

	public function exit() {
		$data = [];
		$this->load->view('exit', $data);
	}
}
