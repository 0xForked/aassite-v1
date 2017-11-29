<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function create(){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
			
		
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "media";
		$data['activeTab2'] = "none";
		$data['getMedia'] = $this->media_model->get_media();
		$data['totalMedia'] = $this->media_model->get_media_total();
		
		$this->form_validation->set_rules('imageTitle', 'Title', 'required');

        if($this->form_validation->run() === FALSE){
             
			$this->load->view('template/header', $data);
			$this->load->view('admin/media', $data); 
			$this->load->view('template/footer');

		} else {
			$folder =  $this->input->post('imageFolder');

			// Upload Image
			$config['upload_path'] = './assets/images/'.$folder;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);
			

			if(!$this->upload->do_upload('mediaImage')){
				$errors = $this->upload->display_errors();
				$image_01 = 'noimage.jpg';
				
			}else{
				$image_01 =  $this->upload->data();
				$image_01 = $_FILES['mediaImage']['name'];
			}

			$this->media_model->create_media($image_01);
			// Set message
			$this->session->set_flashdata('media_created', 'Your image has been uploaded');
			redirect('dashboard/media');
		}
            
	}

	public function delete($id){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->media_model->delete_media($id);
		// Set message
		$this->session->set_flashdata('media_deleted', 'Your image has been deleted');
		redirect('dashboard/media');
	}

}
