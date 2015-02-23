<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ad extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('ad_model');
		$data['menu'] = $this->load->view('shared/menu');
	}

	function index()
	{
		$data['title'] = 'Ad Home';
		$this->layout->view('ad/ad_view', $data);
	}

	//shows details of a specific ad
	function details($ad_id)
	{

	}

	//edit ad by id
	function edit($ad_id)
	{

	}

	//update ad by id
	function update($ad_id)
	{

	}

	//shows form to create a new ad
	function new_ad()
	{
		$data['title'] = 'New Ad';
		$this->layout->view('forms/new_ad', $data);
	}

	//shows form to create a new ad
	function make_offer()
	{
		$data['title'] = 'Make an Offer';
		$this->layout->view('forms/make_offer', $data);
	}

	//shows form to create a new ad
	function make_offer($ad_id)
	{
		$data['title'] = 'Make an Offer';
		$this->layout->view('forms/make_offer', $data);
	}
	
	//shows form to create a new ad
	function review_offer()
	{
		$data['title'] = 'Review Offer';
		$this->layout->view('forms/offer_response', $data);
	}

	//create an ad
	function create()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		//if validation fails
		if ($this->form_validation->run() == false)
		{
			$data['error'] = true;
		}
		//if validation passes
		else
		{
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|img|jpeg|pdf';
			$config['max_size'] = '100';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';

			$this->load->library('upload', $config);

			$title = $this->security->xss_clean($this->input->post('title'));
			$description = $this->security->xss_clean($this->input->post('description'));
			$price = $this->security->xss_clean($this->input->post('price'));

			$user_id = 1;

			$this->ad_model->insert_new_ad($title, $description, $price, $user_id);

			$data['created'] = true;
			
		}
		$data['title'] = 'New Ad';
		$this->layout->view('forms/new_ad', $data);
	}

	//delete a specific ad
	function delete($ad_id)
	{

	}
}