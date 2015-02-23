<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$data['menu'] = $this->load->view('shared/menu');
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
	}

	function index()
	{
		$data['title'] = 'Offers';
		$this->layout->view('offers/home', $data);
	}

}
?>