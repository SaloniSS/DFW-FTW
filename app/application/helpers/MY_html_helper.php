<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('link_tag'))
{
	function link_tag($href = '', $vendor = false, $rel = 'stylesheet', $type = 'text/css', $title = '', $media = '')
	{
		$CI =& get_instance();
		$CI->load->helper(['asset']);

		$link = asset($href, $vendor);

		if (!empty($link))
		{
			$tag = '<link href="';

			$tag .= $link . '" ';
			$tag .= 'rel="'.$rel.'" type="'.$type.'" ';

			if ($media !== '')
			{
				$tag .= 'media="'.$media.'" ';
			}

			if ($title !== '')
			{
				$tag .= 'title="'.$title.'" ';
			}

			$tag .= "/>\n";
		
			return $tag;
		}
		else
		{
			return "";
		}
	}
}

if (!function_exists('style_link_tag'))
{
	function style_link_tag($name = '', $vendor = false)
	{
		$CI =& get_instance();
		$link = "";
		if (!$vendor)
		{
			$link .= "stylesheet/";
		}
		$link .= $name . ".css";
		return link_tag($link, $vendor);
	}
}

if ( ! function_exists('script_tag'))
{
	function script_tag($src = '', $vendor = false, $type = 'text/javascript')
	{
		$CI =& get_instance();
		$CI->load->helper(array('asset'));

		$link = "";
		if (!$vendor)
		{
			$link = 'script/';
		}
		$link .= $src . '.js';
		$link = asset($link, $vendor);

		if (!empty($link))
		{
			$tag = '<script src="';
			$tag .= $link . '" ';
			$tag .= '" type="'.$type.'" ';
			$tag .= "></script>\n";
			return $tag;			
		}
		else
		{
			return "";
		}
	}
}
?>