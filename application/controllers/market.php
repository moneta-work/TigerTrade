<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Market extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('category_model');
		$this->load->model('subcategory_model');
		$data['menu'] = $this->load->view('shared/menu');
	}

	function index()
	{
		$data['categories'] = $this->category_model->get_all_categories();
		$data['subcategories'] = $this->subcategory_model->get_all_subcategories();
		$data['title'] = 'Market Home';
		$this->layout->view('market/home', $data);
	}

	function new_category()
	{
		$data['title'] = 'New Category';
		$this->layout->view('forms/new_category', $data);
	}
	
	function new_subcategory()
	{
		$data['title'] = 'New Subcategory';
		$this->layout->view('forms/new_subcategory', $data);
	}

	//shows details of a specific ad
	function category($category_id)
	{
		$data['category'] = $this->category_model->get_category($category_id);
		$data['subcategories'] = $this->category_model->get_subcategories($category_id);
		$data['title'] = 'Category Home';
		$this->layout->view('market/category_home', $data);
	}
	
	function subcategory($category_id)
	{
		$data['subcategory'] = $this->subcategory_model->get_subcategory($category_id);
		$data['title'] = 'Subcategory Home';
		$this->layout->view('market/subcategory_home', $data);
	}

	//edit ad by id
	function edit($category_id)
	{

	}

	//update ad by id
	function update($category_id)
	{

	}

	//create an ad
	function create()
	{

	}

	//delete a specific ad
	function delete($category_id)
	{

	}
}