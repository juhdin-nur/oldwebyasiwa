<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('lang'))
{
	function lang($str='')
	{
		$this->ci =& get_instance();    // get a reference to CodeIgniter.
		return $this->lang->line($str);
	}
}