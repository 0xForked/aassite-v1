<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media_model extends CI_Model {

	//create a new tag fix
	//used in dashboard/tags
	public function create_media($image_01){
		$data = array(
			'image_title' => $this->input->post('imageTitle'),
			'image_folder' => $this->input->post('imageFolder'),
			'image_name' => $image_01
		);

		return $this->db->insert('gallery', $data);
	}

	//delete a media fix
	//used in dashboard/tags
	public function delete_media($id){
		$image_file_name = $this->db->select('image_name')->get_where('gallery', array('image_id' => $id))->row()->image_name;
		$image_folder = $this->db->select('image_folder')->get_where('gallery', array('image_id' => $id))->row()->image_folder;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\assets\\images\\".$image_folder."\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory

		$this->db->where('image_id', $id);
		$this->db->delete('gallery');
		return true;
	}

	//get image fix
	//used in dashboard/gallery
	public function get_media(){
		$this->db->order_by('image_id');
		$query = $this->db->get('gallery');
		return $query->result_array();
		
	}

	//get image total fix
	//used in dashboard/gallery and dashboard/index
	public function get_media_total(){
		$query = $this->db->get('gallery');
		$num_rows = $query->num_rows();
		return $num_rows;
	}

        
}

/* End of file Tag_model.php */
/* Location: ./application/models/Tag_model.php */