<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_new_category($name, $description)
	{
		$this->db->set('name', $name);
		$this->db->set('description', $description);

		//insert into db, throw error if data not inserted
		if( $this->db->insert('categories') != TRUE)
		{
			throw new Exception("Cannot insert");
		}
		else
		{
			return $this->db->affected_rows();
		}
	}


}

?>