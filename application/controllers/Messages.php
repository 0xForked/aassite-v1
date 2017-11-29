<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function delete($id){
     
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->message_model->delete_message($id);
		
		// Set message
		$this->session->set_flashdata('delete_message', 'Your message has been delete!');
		redirect('dashboard/messages');
	}

	public function mark($id){
     
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->message_model->mark_message($id);
		
		// Set message
		$this->session->set_flashdata('mark_message', 'Message has been replied!');
		redirect('dashboard/messages');
	}

	//=========================================			PUBLIC			=========================================//

		public function create(){
			$this->message_model->create_message();
			
			$icon = '<i class="icon-coffee"></i>';
			// Set message
			$this->session->set_flashdata('save_message', 'Cheers, Your message has been sent!');
			redirect('/contact');
		}

	//=========================================			PUBLIC			=========================================//

}

/* End of file Messages.php */
/* Location: ./application/controllers/Messages.php */