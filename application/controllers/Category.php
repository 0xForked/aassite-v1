<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function create(){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
            
		$this->category_model->create_categories();
		// Set message
		$this->session->set_flashdata('category_created', 'Your category has been created');
        redirect('dashboard/article/categories');
            
	}

	public function delete($id){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->category_model->delete_categories($id);
		// Set message
		$this->session->set_flashdata('category_deleted', 'Your category has been deleted');
		redirect('dashboard/article/categories');
	}

}

/* End of file Tags.php */
/* Location: ./application/controllers/Tags.php */