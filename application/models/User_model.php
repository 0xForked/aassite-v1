<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user_public(){

        $query = $this->db->get('user_detail');
        return $query->result_array();

    }

    public function site_maintenance($uid){

        if(empty($_POST["siteStatus"]) ) {
			$status = 'N';
		} else {
			$status = 'Y';
		}

		$data = array(
			'maintenance_status' => $status
		);

		$this->db->where('users_id', $uid);
		$this->db->update('user_detail', $data);
		return true;

    }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */