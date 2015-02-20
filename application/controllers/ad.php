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
		 var_dump($_FILES);
		
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
	       				 <strong>Success!</strong> '.$j .' Image Uploaded.</div>';
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


       		
   		$data['title'] = 'New Ad';
		$this->layout->view('forms/new_ad', $data);
		}
		
		/*
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
		*/
    	
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