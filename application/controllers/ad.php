<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ad extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
        $this->load->library('image_lib');
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
			
			$title = $this->security->xss_clean($this->input->post('title'));
			$description = $this->security->xss_clean($this->input->post('description'));
			$price = $this->security->xss_clean($this->input->post('price'));

			$user_id = 1;

			$this->ad_model->insert_new_ad($title, $description, $price, $user_id);

			//$ad_id = $this->ad_model->get_new_ad_id($title, $description, $price, $user_id);

			$j = 0;     // Variable for indexing uploaded image.
			$target_path = "assets/Images/";     // Declaring Path for uploaded images.
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
				// Loop to get individual element from the array
				$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
				$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
				$file_extension = end($ext); // Store extensions in the variable.
				$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
				$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
				if (($_FILES["file"]["size"][$i] < 100000)  && in_array($file_extension, $validextensions)) {
					if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {

					// If file moved to uploads folder.
						echo '<div class="alert alert-success">
		        			<a href="#" class="close" data-dismiss="alert">&times;</a>
		       				 <strong>Success!</strong> '.$_FILES['file']['tmp_name'][$i] .' Image Uploaded.</div>';
					} 
					else {     //  If File Was Not Moved.
						echo '<div class="alert alert-error">
		        			<a href="#" class="close" data-dismiss="alert">&times;</a>
		       				 <strong>Success!</strong> '.$j .' Image Not Uploaded.
		    			</div>';
					}
				}
				else 
				{     //   If File Size And File Type Was Incorrect.
					echo '<div class="alert alert-error">
		        			<a href="#" class="close" data-dismiss="alert">&times;</a>
		       				 <strong>Success!</strong> '.$j .' Image Not Uploaded.
		    			</div>';
				}



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