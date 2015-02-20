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
		$upload_conf = array(
            'upload_path'   => realpath('assets/images'),
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '30000',
            );
    
        $this->upload->initialize( $upload_conf );
    
        // Change $_FILES to new vars and loop them
        foreach($_FILES['userfile'] as $key=>$val)
        {
            $i = 1;
            foreach($val as $v)
            {
                $field_name = "file_".$i;
                $_FILES[$field_name][$key] = $v;
                $i++;   
            }
        }
        // Unset the useless one ;)
        unset($_FILES['userfile']);
    
        // Put each errors and upload data to an array
        $error = array();
        $success = array();
        
        // main action to upload each file
        foreach($_FILES as $field_name => $file)
        {
            if ( ! $this->upload->do_upload($field_name))
            {
                // if upload fail, grab error 
                $error['upload'][] = $this->upload->display_errors();
            }
            else
            {
                // otherwise, put the upload datas here.
                // if you want to use database, put insert query in this loop
                $upload_data = $this->upload->data();
                
                // set the resize config
                $resize_conf = array(
                    // it's something like "/full/path/to/the/image.jpg" maybe
                    'source_image'  => $upload_data['full_path'], 
                    // and it's "/full/path/to/the/" + "thumb_" + "image.jpg
                    // or you can use 'create_thumbs' => true option instead
                    'new_image'     => $upload_data['file_path'].'thumb_'.$upload_data['file_name'],
                    'width'         => 200,
                    'height'        => 200
                    );

                // initializing
                $this->image_lib->initialize($resize_conf);

                // do it!
                if ( ! $this->image_lib->resize())
                {
                    // if got fail.
                    $error['resize'][] = $this->image_lib->display_errors();
                }
                else
                {
                    // otherwise, put each upload data to an array.
                    $success[] = $upload_data;
                }
            }
        }

        // see what we get
        if(count($error > 0))
        {
            $data['error'] = true;
        }
        else
        {
            $data['created'] = true;
        }
       		
   		$data['title'] = 'New Ad';
		$this->layout->view('forms/new_ad', $data);

    	
		/*
		$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|img|jpeg|pdf';
			$config['max_size'] = '100';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';

			$this->load->library('upload', $config);

			foreach ($_FILES as $file => $fileObject)  //fieldname is the form field name
			{
			    if (!empty($fileObject['name']))
			    {
			        $this->upload->initialize($config);
			        if (!$this->upload->do_upload($file))
			        {
			            $data['error'] = true;
			        }
			        else
			        {
			             $data['created'] = true;
			
			      	}
			    }
			}
		
			$data['title'] = 'New Ad';
			$this->layout->view('forms/new_ad', $data);
		*/
		/*	
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

			$data['created'] = true;
			
		}
		$data['title'] = 'New Ad';
		$this->layout->view('forms/new_ad', $data);
		*/
	}

	//delete a specific ad
	function delete($ad_id)
	{

	}
}