<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function create(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$data['tags'] = $this->tag_model->get_tag_title();
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "portfolio";
		$data['activeTab2'] = "addPort";
        //$data['categories'] = $this->category_model->get_categories(); -> nda load dari db for project

        $this->form_validation->set_rules('projectTitle', 'Title', 'required');
        $this->form_validation->set_rules('projectDescription', 'Description', 'required');

        if($this->form_validation->run() === FALSE){

			$this->load->view('template/header', $data);
			$this->load->view('admin/portfolio_add', $data);
			$this->load->view('template/footer');

		} else {

			// Upload Image
			$config['upload_path'] = './assets/images/project';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('projectLogo')){
                $errors = $this->upload->display_errors();
                $image_01 = 'noimage.jpg';

            }else{
                $image_01 =  $this->upload->data();
                $image_01 = $_FILES['projectLogo']['name'];
			}

			// if(!$this->upload->do_upload('featuredImage01')){
            //     $errors = $this->upload->display_errors();
            //     $image_02 = 'noimage.jpg';

            // }else{
            //     $image_02 =  $this->upload->data();
            //     $image_02 = $_FILES['featuredImage01']['name'];
            // }

			// if(!$this->upload->do_upload('featuredImage02')){
            //     $errors = $this->upload->display_errors();
            //     $image_03 = 'noimage.jpg';

            // }else{
            //     $image_03 =  $this->upload->data();
            //     $image_03 = $_FILES['featuredImage02']['name'];
			// }

			// if(!$this->upload->do_upload('featuredImage03')){
            //     $errors = $this->upload->display_errors();
            //     $image_04 = 'noimage.jpg';

            // }else{
            //     $image_04 =  $this->upload->data();
            //     $image_04 = $_FILES['featuredImage03']['name'];
            // }

			$this->portfolio_model->create_project($image_01);

			// Set message
			$this->session->set_flashdata('project_created', 'Your project has been created');
	        redirect('dashboard/portfolio');

		}

	}


	public function update($slug){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		//baru tambah
		$data['portfolio'] = $this->portfolio_model->get_portfolio($slug);

		if(empty($data['portfolio'])){
				show_404();
		}

		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "portfolio";
		$data['activeTab2'] = "none";
		$this->load->view('template/header', $data);
		$this->load->view('admin/portfolio_edit', $data);
		$this->load->view('template/footer');


	}

	//Update project request to model
	public function portfolio_update(){

		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->portfolio_model->update_portfolio();

		// Set message
		$this->session->set_flashdata('project_update', 'Your project has been updated');
	    redirect('dashboard/portfolio');
	}

	public function delete($id){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->portfolio_model->delete_portfolio($id);
		// Set message
		$this->session->set_flashdata('project_deleted', 'Your project has been deleted');
		redirect('dashboard/portfolio');

	}

	//Make portfolio to headline/featured
	public function headline($id){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->portfolio_model->mark_headlines($id);

		// Set message
		$this->session->set_flashdata('mark_headline', 'Project isFeatured now!');
		redirect('dashboard/portfolio');
	}

	//Publish portfolio from concept
	public function publish($id){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->portfolio_model->mark_published($id);

		// Set message
		$this->session->set_flashdata('mark_publish', 'Project has been published!');
		redirect('dashboard/portfolio');
	}


//=========================================			PUBLIC			=========================================//

	public function view_category($slug){

		$data['portfolio'] = $this->portfolio_model->get_portfolio_category($slug);

		if(empty($data['portfolio'])){
			$data['error'] = "There nothing here";
		}

		$data['activeTab'] = "project";
		$this->load->view('template/_header',$data);
		$this->load->view('pages/project', $data);
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');
	}

//=========================================			PUBLIC			=========================================//


}



