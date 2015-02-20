<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$data['menu'] = $this->load->view('shared/menu');
	}

	function index()
	{
		$data['title'] = 'User Home';
		$this->layout->view('user/user_home', $data);

	}
	
	
}
?>