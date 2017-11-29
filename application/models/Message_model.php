<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {

	//create message fix
	//used in /contact
	public function create_message(){
		$data = array(
            'message_name' => $this->input->post('name'),
            'message_email' => $this->input->post('email'),
            'message_title' => $this->input->post('subject'),
            'message_body' => $this->input->post('messages')
		);
            
		return $this->db->insert('messages', $data);
	}

	//delete a message fix
	//used in dashboard/message
	public function delete_message($id){
		$this->db->where('message_id', $id);
		$this->db->delete('messages');
		return true;
	}

	//mark a message fix
	//used in dashboard/message
	public function mark_message($id){
		$status = 'isReplied';

		$data = array(
			'message_status' => $status
		);

		$this->db->where('message_id', $id);
		$this->db->update('messages', $data);
		return true;
	}

	//get message all fix
	//used in dashboard/message
	public function get_messages(){
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get('messages');
		return $query->result_array();
	}

	//get message limit 5 fix
	//used in dashboard/index
	public function get_messages_limit(){
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get('messages', 5);
		return $query->result_array();
	}

	//get total message fix
	//used in dashboard/message and dashboard/index
	public function get_message_total(){
		$query = $this->db->get('messages');
		$num_rows = $query->num_rows();
		return $num_rows;
	}

}

/* End of file Message_model.php */
/* Location: ./application/models/Message_model.php */