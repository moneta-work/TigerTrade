<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('offer_model');
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

	function sent()
	{
		$data['title'] = 'Sent Offers';
		$data['pending'] = $this->category_model->get_pending_offers();
		$data['accepted'] = $this->category_model->get_buyer_accepted_offers();
		$data['declined'] = $this->category_model->get_buyer_declined_offers();
		$this->layout->view('offers/sent', $data);
	}

	function received()
	{
		$data['title'] = 'Received Offers';
		$this->layout->view('offers/received', $data);
	}

}
?>