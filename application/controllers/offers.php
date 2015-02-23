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
		$data['pending'] = $this->offer_model->get_pending_offers($this->ion_auth->user()->id());
		$data['accepted'] = $this->offer_model->get_buyer_accepted_offers($this->ion_auth->user()->id());
		$data['declined'] = $this->offer_model->get_buyer_declined_offers($this->ion_auth->user()->id());
		$this->layout->view('offers/sent', $data);
	}

	function received()
	{
		$data['title'] = 'Received Offers';
		$this->layout->view('offers/received', $data);
	}

}
?>