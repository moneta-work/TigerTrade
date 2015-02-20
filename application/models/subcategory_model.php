<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subcategory_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_new_subcategory($name, $description, $category_id)
	{
		$this->db->set('name', $name);
		$this->db->set('description', $description);
		$this->db->set('category_id', $category_id);

		//insert into db, throw error if data not inserted
		if( $this->db->insert('subcategories') != TRUE)
		{
			throw new Exception("Cannot insert");
		}
		else
		{
			return $this->db->affected_rows();
		}
	}

	public function get_all_subcategories()
	{
		return $this->db->get('subcategories');
	}

}

?>