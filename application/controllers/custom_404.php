<?php 
class Custom_404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404 Not Found'); 
        $this->layout->view('custom_404');
    } 
} 
?> 