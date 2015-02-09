<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ad extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('BreadcrumbComponent');
	}

	function index()
	{
		
				
		$this->breadcrumbcomponent->add('Home', base_url());
		$this->breadcrumbcomponent->add('Ad', base_url('/ad'));		
		$this->breadcrumbcomponent->add('New Ad', base_url('/ad/new_ad'));
		$this->layout->view('ad_view');
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
		$this->layout->view('new_ad');
	}

	//create an ad
	function create()
	{

	}

	//delete a specific ad
	function delete($ad_id)
	{

	}
}