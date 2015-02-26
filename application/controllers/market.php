<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Market extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('ad_model');
		$this->load->model('category_model');
		$this->load->model('subcategory_model');
		$data['menu'] = $this->load->view('shared/menu');
	}

	function index()
	{
		$data['categories'] = $this->category_model->get_all_categories();
		$data['subcategories'] = $this->subcategory_model->get_all_subcategories();
		$data['ads'] = $this->ad_model->get_all_ads();
		$data['title'] = 'Market';
		$this->layout->view('market/home', $data);		
	}

	function new_category()
	{
		$data['title'] = 'New Category';
		
		if (isset($_POST) && !empty($_POST))
		{
			$category_name = $this->input->post('category_name');
			$category_description = $this->input->post('category_description');
			$this->category_model->insert_new_category($category_name, $category_description);
		}
		
		$data['categories'] = $this->category_model->get_all_categories();
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
		$data['categories'] = $this->category_model->get_all_categories();
		$data['subcategories'] = $this->subcategory_model->get_all_subcategories();
		$data['ads'] = $this->ad_model->get_ads_category($category_id);
		$data['title'] = 'Category Home';
		$this->layout->view('market/category_home', $data);
	}
	
	function subcategory($subcategory_id)
	{
		$data['categories'] = $this->category_model->get_all_categories();
		$data['subcategories'] = $this->subcategory_model->get_all_subcategories();
		$data['subcategory'] = $this->subcategory_model->get_subcategory($subcategory_id);
		$data['category'] = $this->category_model->get_category($data['subcategory']->category_id);
		$data['ads'] = $this->ad_model->get_ads_subcategory($subcategory_id);
		$data['title'] = 'Subcategory Home';
		$this->layout->view('market/subcategory_home', $data);
	}

	function filter_list(){

        #Validate entry form information
        $this->load->model('subcategory_model','', TRUE);        
        $this->form_validation->set_rules('category', 'State', 'required');
        $this->form_validation->set_rules('subcategory', 'City', 'required');

        $data['city'] = $this->Model_form->get_all_subcategories(); //gets the available groups for the dropdown

        if ($this->form_validation->run() == FALSE)
        {
              $this->load->view('view_form_all', $data);
        }
        else
        {
            $this->load->view('view_form_success');
        }
    } 
	
	function get_cities($category_id){
        $this->load->model('Model_form','', TRUE);    
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->Model_form->get_subcategories_for_filter($category_id)));
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