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

	public function get_new_ad_id($title, $description, $price, $user_id)
	{
		$query = $this->db->query("SELECT * FROM ads WHERE title = '$title' AND description = '$description' and price = '$price' and user_id = '$user_id'");
		if($query->num_rows() == 1)
		{
			$query = $query->row();
			return $query->ad_id;
		}

		/*
		$this->db->where('title', $title);
		$this->db->where('description', $description);
		$this->db->where('price', $price);
		$this->db->where('user_id', $user_id);
		$this->db->select('ad_id');

		$ad_id = $this->db->get('ads');


		return $ad_id->row();
		*/
	}

	public function insert_img_ad($ad_id, $target_path)
	{
		$this->db->set('ad_id', $ad_id);
		$this->db->set('image_path', $target_path);

		//insert into db, throw error if data not inserted
		if( $this->db->insert('images') != TRUE)
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