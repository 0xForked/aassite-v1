<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	//This is for public use
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->view('pages/index');
		$this->load->view('template/_footer');
	}

	public function project(){
		$data['title'] = "Project";
		$data['activeTab'] = "project";
		$data['portfolio'] = $this->portfolio_model->get_portfolio_published();
		$this->load->view('template/_header',$data);
		$this->load->view('pages/project', $data);
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');
	}

	public function blog(){
		$data['title'] = "Blog";
		$data['activeTab'] = "blog";
		$data['article'] = $this->article_model->get_artilce_published();
		$data['categories'] = $this->category_model->get_categories();
		$this->load->view('template/_header',$data);
		$this->load->view('pages/blog', $data);
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');

	}

	public function contact(){
		$data['title'] = "Contact";
		$data['activeTab'] = "contact";
		$this->load->view('template/_header',$data);
		$this->load->view('pages/contact');
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');

	}

	public function privacy(){
		$data['title'] = "Privacy";
		$data['activeTab'] = "none";
		$this->load->view('template/_header',$data);
		$this->load->view('pages/privacy_police');
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');
	}

	public function about(){
		$data['title'] = "About";
		$data['activeTab'] = "none";
		$this->load->view('template/_header',$data);
		$this->load->view('pages/about');
		$this->load->view('template/_footer_body');
		$this->load->view('template/_footer');
	}

}
