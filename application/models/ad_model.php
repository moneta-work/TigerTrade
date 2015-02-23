<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Ad_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_new_ad($title, $description, $price, $user_id)
	{
		$this->db->set('title', $title);
		$this->db->set('description', $description);
		$this->db->set('price', $price);
		$this->db->set('user_id', $user_id);
		$this->db->set('category_id', 1);
		$this->db->set('subcategory_id', 1);

		//insert into db, throw error if data not inserted
		if( $this->db->insert('ads') != TRUE)
		{
			throw new Exception("Cannot insert");
		}
		else
		{
			return $this->db->affected_rows();
		}
	}

	public function get_ads_category($category_id)
	{
		$result = $this->db->query("SELECT * FROM ads WHERE category_id = '$category_id'");
		return $result;
	}

	public function get_ads_subcategory($subcategory_id)
	{
		$result = $this->db->query("SELECT * FROM ads WHERE subcategory_id = '$subcategory_id'");
		return $result;
	}
}

?>