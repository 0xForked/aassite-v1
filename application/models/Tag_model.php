<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag_model extends CI_Model {

	//create a new tag fix
	//used in dashboard/tags
	public function create_tags(){
		$slug = url_title($this->input->post('tagTitle'));
		$data = array(
			'tag_title' => $this->input->post('tagTitle'),
			'tag_slug' => $slug,
			'tag_description' => $this->input->post('tagDescription')
		);

		return $this->db->insert('tags', $data);
	}
	//delete a tag fix
	//used in dashboard/tags
	public function delete_tags($id){
		$this->db->where('tag_id', $id);
		$this->db->delete('tags');
		return true;
	}
	//get tags fix
	//used in dashboard/tags
	public function get_tags(){
		$this->db->order_by('tag_id');
		$query = $this->db->get('tags');
		return $query->result_array();
		
	}
	//get tags total fix
	//used in dashboard/tags and dashboard/index
	public function get_tag_total(){
		$query = $this->db->get('tags');
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	//get tags by name fix
	//used in none
	public function get_tag_title(){
		$this->db->order_by('tag_title');
		$query = $this->db->get('tags');
		return $query->result_array();
    }
    //get tags serach
	//used in none
	public function get_tag_search($keyword){
		$this->db->order_by('tag_id');
		$this->db->like("tag_title", $keyword);
		$query = $this->db->get('tags');
		return $query->result_array();
		
	}
        
}

/* End of file Tag_model.php */
/* Location: ./application/models/Tag_model.php */