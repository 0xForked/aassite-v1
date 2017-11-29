<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tags extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function create(){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
            
		$this->tag_model->create_tags();
		// Set message
		$this->session->set_flashdata('tag_created', 'Your tag has been created');
        redirect('dashboard/article/tags');
            
	}

	public function delete($id){
            
        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->tag_model->delete_tags($id);
		// Set message
		$this->session->set_flashdata('tag_deleted', 'Your tag has been deleted');
		redirect('dashboard/article/tags');
	}

	public function autocomplete(){
            
      	//$keyword = $this->input->post('articleTags', TRUE);
        //$data = $this->tag_model->get_tag_search($keyword);  
        //foreach ($data as $tag)
     	//$json_array[]=$tag->tag_title;
        //echo json_encode($json_array);

        $keyword=$this->input->post('articleTags');
        $data=$this->tag_model->get_tag_search($keyword);        
        echo json_encode($data);


	}

}

/* End of file Tags.php */
/* Location: ./application/controllers/Tags.php */