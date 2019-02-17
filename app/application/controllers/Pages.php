<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->data = [];
	}

	private function login() {
		$this->user_id = $this->session->user_id;
		if (!$this->user_id) {
			header('Location: /');
		} else {
			$userQuery = $this->db->get_where('user', ['user_id' => $this->user_id])->result();
			if ($userQuery) {
				$this->user = $userQuery[0];
				$this->data["name"] = $this->user->name;
			}
		}
	}

	public function landing()
	{
		$this->data['google_signin_client_id'] = $this->config->item('login')->web->client_id;
		$this->load->view('landing', $this->data);
	}

	public function form() {
		$this->login();


		$this->data['head'] = $this->load->view('components/head', $this->data, TRUE);
		$this->load->view('form', $this->data);
	}

	public function results() {
		$this->login();

		$userAnswers = $this->db->get_where('question', ['user_id' => $this->user_id])->result()[0];
		unset($userAnswers->user_id);

		$this->data["answers"] = json_encode($userAnswers);

		$this->data["texts"] = [];
		foreach ($userAnswers as $key => $value) {
			$x = $key . $value;

			if (file_exists(VIEWPATH . "text/" . $x . ".php"))
			{
				array_push($this->data["texts"], $this->load->view('text/' . $x, $this->data, TRUE));
			}
		}

		$this->data['head'] = $this->load->view('components/head', $this->data, TRUE);
		$this->load->view('results', $this->data);
	}

	public function exit() {
		$this->load->view('exit', $this->data);
	}
}
