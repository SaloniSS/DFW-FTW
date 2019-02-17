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

	private function login() {
		$this->user_id = $this->session->user_id;
		if (!$this->user_id) {
			header('Location: /');
		} else {
			$userQuery = $this->db->get_where('question', ['user_id' => $this->user_id])->result();
			if ($userQuery) {
				$this->user = $userQuery[0];
			} else {
				$this->db->insert('question', ['user_id' => $this->user_id]);
				$userQuery2 = $this->db->get_where('question', ['user_id' => $this->user_id]);
				$this->user = $userQuery2->result()[0];
			}
		}
	}

	public function store() {
		$this->login();

		foreach ($this->columns as $column) {
			$x = $this->input->post($column);
			if (!$x) $x = 0;
			$this->userFinal[$column] = $x;
		}
		$this->userFinal["user_id"] = $this->user->user_id;

		$this->db->replace('question', $this->userFinal);

		header('Location: /results');
	}

}