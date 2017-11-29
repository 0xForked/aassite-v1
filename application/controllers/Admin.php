<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function index(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "home";
		$data['activeTab2'] = "none";
		$data['getMessages'] = $this->message_model->get_messages_limit();
		$data['getArticle'] = $this->article_model->get_article_limit();
		$data['categories'] = $this->category_model->get_categories();
		$data['totalCategories'] = $this->category_model->get_category_total();
		$data['totalTags'] = $this->tag_model->get_tag_total();
		$data['totalMessages'] = $this->message_model->get_message_total();
		$data['totalArticle'] = $this->article_model->get_article_total();
		$data['totalMedia'] = $this->media_model->get_media_total();
		$data['totalPortfolio'] = $this->portfolio_model->get_portfolio_total();
		$this->load->view('template/header', $data);
		$this->load->view('admin/home', $data); 
		$this->load->view('template/footer');
		
	}

	//Done
	public function messages(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "message";
		$data['activeTab2'] = "none";
		$data['getMessages'] = $this->message_model->get_messages();
		$data['totalMessages'] = $this->message_model->get_message_total();
		$this->load->view('template/header', $data);
		$this->load->view('admin/messages', $data); 
		$this->load->view('template/footer');
		
	}

	//OnProgress
	public function article_all(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "allPost";
		$data['articleAll'] = $this->article_model->get_article();
		$data['categories'] = $this->category_model->get_categories();
		$this->load->view('template/header', $data);
		$this->load->view('admin/article_all', $data); 
		$this->load->view('template/footer');
	}

	//Done
	public function article_add(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		
		$data['categories'] = $this->category_model->get_categories();
		$data['tags'] = $this->tag_model->get_tag_title();
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "addPost";
		$this->load->view('template/header', $data);
		$this->load->view('admin/article_add', $data); 
		$this->load->view('template/footer');
	}

	
	//Done
	public function categories(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "categories";
		$data['getCategories'] = $this->category_model->get_categories();
		$data['totalCategories'] = $this->category_model->get_category_total();
		$this->load->view('template/header', $data);
		$this->load->view('admin/categories', $data); 
		$this->load->view('template/footer');
	}

	//Done
	public function tags(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "article";
		$data['activeTab2'] = "tags";
		$data['getTags'] = $this->tag_model->get_tags();
		$data['totalTags'] = $this->tag_model->get_tag_total();
		$this->load->view('template/header', $data);
		$this->load->view('admin/tags', $data); 
		$this->load->view('template/footer');
	}

	//next
	public function portfolio_all(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "portfolio";
		$data['activeTab2'] = "allPort";
		$data['projectAll'] = $this->portfolio_model->get_portfolio();
		$this->load->view('template/header', $data);
		$this->load->view('admin/portfolio_all', $data); 
		$this->load->view('template/footer');
	}

	public function portfolio_add(){
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		
		$data['email'] = $this->session->userdata( 'email' );
		$data['id'] = $this->session->userdata( 'user_id' );
		$data['users'] = $this->user_model->get_user_public();
		$data['activeTab'] = "portfolio";
		$data['activeTab2'] = "addPort";
		$this->load->view('template/header', $data);
		$this->load->view('admin/portfolio_add'); 
		$this->load->view('template/footer');
	}

	//Done
	public function media(){
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
		$this->load->view('template/header', $data);
		$this->load->view('admin/media', $data); 
		$this->load->view('template/footer');
		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */