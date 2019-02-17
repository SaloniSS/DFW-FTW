<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('asset'))
{
	function asset($name, $vendor = false)
	{
		$CI =& get_instance();
		$CI->load->helper(['file']);

		$link = '/public/';

		if ($vendor)
		{
			$link .= 'vendor/';
		}

		$link .= $name;
		$time = get_file_info(APPPATH . ".." . $link)['date'];
		$link .= '?t=' . $time;
		if (!empty($time))
		{
			return $link;
		}
	}
}

?>