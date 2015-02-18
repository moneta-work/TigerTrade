<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$data['menu'] = $this->load->view('shared/menu');
	}

	function index()
	{
		$data['title'] = 'User Home';
		$this->layout->view('user/user_home', $data);

	}
	
	//shows form to edit profile information
	function edit_profile_info()
	{
		$data['title'] = 'Edit Info';
		$this->layout->view('forms/profile_information_form', $data);
	}
	
	//shows form to edit profile information
	function update_profile_info()
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$optional_email = $this->input->post('optionalEmail');
		$phone_number = $this->input->post('phoneNumber');
		
		echo "<h1>" . $firstName . "</h1>";
	}
}
?>