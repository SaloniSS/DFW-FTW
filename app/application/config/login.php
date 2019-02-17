<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$ci=& get_instance();
$ci->load->helper(['file']);

$file = read_file(BASEPATH . "../client_secret.json");
$data = json_decode($file);

$config['login'] = $data;