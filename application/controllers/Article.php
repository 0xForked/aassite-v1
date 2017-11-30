<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));

	}

	//create update
	public function create(){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

        $data['tags'] = $this->tag_model->get_tag_title();
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "addPost";
        $data['categories'] = $this->category_model->get_categories();

        $this->form_validation->set_rules('articleTitle', 'Title', 'required');
        $this->form_validation->set_rules('articleBody', 'Body', 'required');

        if($this->form_validation->run() === FALSE){

			$this->load->view('template/header', $data);
			$this->load->view('admin/article_add', $data);
			$this->load->view('template/footer');

		} else {

				// Upload Image
				$config['upload_path'] = './assets/images/post';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('articleImage')){
                    $errors = $this->upload->display_errors();
                    $image_01 = 'noimage.jpg';

                }else{
                    $image_01 =  $this->upload->data();
                    $image_01 = $_FILES['articleImage']['name'];
                }

			$this->article_model->create_article($image_01);

			// Set message
			$this->session->set_flashdata('article_created', 'Your article has been created');
	        redirect('dashboard/article');

		}

	}

	//Open view article update
	public function update($slug){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		//baru tambah
		$data['post'] = $this->article_model->get_article($slug);

		if(empty($data['post'])){
				show_404();
		}

		$data['categories'] = $this->category_model->get_categories();
		$data['tags'] = $this->tag_model->get_tag_title();
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "none";
		$this->load->view('template/header', $data);
		$this->load->view('admin/article_edit', $data);
		$this->load->view('template/footer');
	}

	//Update article request to model
	public function article_update(){

		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->article_model->update_article();

		// Set message
		$this->session->set_flashdata('article_update', 'Your article has been updated');
	    redirect('dashboard/article');
	}

	//Delete article
	public function delete($id) {
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$this->article_model->delete_article($id);
		// Set message
		$this->session->set_flashdata('article_deleted', 'Your article has been deleted');
		redirect('dashboard/article');
	}

	//Make Article to headline/featured
	public function headline($id){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->article_model->mark_headlines($id);

		// Set message
		$this->session->set_flashdata('mark_headline', 'Article isFeatured now!');
		redirect('dashboard/article');
	}

	//Publish article from concept
	public function publish($id){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->article_model->mark_published($id);

		// Set message
		$this->session->set_flashdata('mark_publish', 'Article has been published!');
		redirect('dashboard/article');
	}


	//=========================================			PUBLIC			=========================================//

		public function view_detail($slug = NULL){
			$users = $this->user_model->get_user_public();
			foreach($users as $user){
				if($user['maintenance_status'] == "Y"){

					$this->load->view('errors/html/error_maintenance');
				} else{
					$data['article'] = $this->article_model->get_artilce_published($slug);
					$data['categories'] = $this->category_model->get_categories();
					$post_id = $data['article']['posts_id'];

					if(empty($data['article'])){
						show_404();
					}

					$data['title'] = "Article Detail";
					$data['activeTab'] = "blog";
					$this->load->view('template/_header',$data);
					$this->load->view('pages/blog_detail', $data);
					$this->load->view('template/_footer_body');
					$this->load->view('template/_footer');
				}

			}

		}

		public function view_category($slug){

			$users = $this->user_model->get_user_public();
			foreach($users as $user){
				if($user['maintenance_status'] == "Y"){

					$this->load->view('errors/html/error_maintenance');
				} else{
					if($slug == "blow-mind"){
						$catg = '7';
					} else if ($slug == "mobile"){
						$catg = '4';
					} else if($slug == "web"){
						$catg = '5';
					} else if($slug == "uncategory"){
						$catg = '3';
					}

					$data['article'] = $this->article_model->get_article_category($catg);
					$data['categories'] = $this->category_model->get_categories();
					//$post_id = $data['article']['posts_id'];

					if(empty($data['article'])){
						$data['error'] = "There nothing here";
					}

					$data['title'] = "Article Detail";
					$data['activeTab'] = "blog";
					$this->load->view('template/_header',$data);
					$this->load->view('pages/blog', $data);
					$this->load->view('template/_footer_body');
					$this->load->view('template/_footer');
				}

			}


		}

	//=========================================			PUBLIC			=========================================//

}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */