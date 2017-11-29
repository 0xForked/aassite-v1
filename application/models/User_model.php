<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user_public(){
		
                $query = $this->db->get('user_detail');
                return $query->result_array();

	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */