<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->CLIENT_ID = $this->config->item('login')->web->client_id;
	}

	public function login()
	{
		$id_token = $this->input->post('id_token');

		if ($id_token) {
			$client = new Google_Client();
			$payload = $client->verifyIdToken($id_token);
			if ($payload) {
				$data = [
					"user_id" => $payload['sub'],
					"name" => $payload['given_name'],
					"email" => $payload['email']
				];

				$this->session->set_userdata([
					"user_id" => $data["user_id"],
				]);

				$user = $this->db->get_where('user', ['user_id' => $data["user_id"]]);
				if (!$user) {
					$this->db->insert('user', $data);
				} else {
					$this->db->replace('user', $data);
				}

				header('Location: /form');
			} else {
				header('Location: /');
			}
		} else {
			header('Location: /');
		}

	}

	public function logout()
	{
		$data['google_signin_client_id'] = $this->CLIENT_ID;
		$this->session->unset_userdata(['user_id']);
		$this->load->view('logout', $data);
	}
}