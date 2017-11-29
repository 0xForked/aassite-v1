<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	//create a new category fix
	//used in dashboard/category
	public function create_categories(){
		$slug = url_title($this->input->post('categoryTitle'));
		$data = array(
			'category_title' => $this->input->post('categoryTitle'),
			'category_slug' => $slug,
			'category_description' => $this->input->post('categoryDescription')
		);

		return $this->db->insert('categories', $data);
	}
	//delete a category fix
	//used in dashboard/category
	public function delete_categories($id){
		$this->db->where('category_id', $id);
		$this->db->delete('categories');
		return true;
	}
	//get category fix
	//used in dashboard/category
	public function get_categories(){
		$this->db->order_by('category_id');
		$query = $this->db->get('categories');
		return $query->result_array();
		
	}
	//get category count fix
	//used in dashboard/category and dashboard/index
	public function get_category_total(){
		$query = $this->db->get('categories');
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	//get category by name fix
	//used in no one
	public function get_category_title(){
		$this->db->order_by('category_title');
		$query = $this->db->get('categories');
		return $query->result_array();
    }
        
}

/* End of file Tag_model.php */
/* Location: ./application/models/Tag_model.php */