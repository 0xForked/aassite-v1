<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	public function create_project($image_01){

		$slug = url_title($this->input->post('projectTitle'));

		if(empty($_POST["projectHeadline"]) ) {
			$headline = 'isOrdinary';
		} else {
			$headline = 'isFeatured';
		}

		if(empty($_POST["projectStatus"]) ) {
			$publis = 'isConcept';
		} else {
			$publis = 'isPublished';
		}


		$data = array(
			'portfolio_author' => $this->session->userdata( 'user_id' ), //dicoba
			'portfolio_slug' => strtolower($slug),  //dicoba
			'portfolio_category' => $this->input->post('projectCategory'), //dicoba
			'portfolio_tags' => $this->input->post('projectTags'), //dicoba
			'portfolio_title' => $this->input->post('projectTitle'),	 //dicoba
			'portfolio_description' => $this->input->post('projectDescription'), //dicoba
			'status_Headline' => $headline, //dicoba
			'status_project' => $publis,	//dicoba
			'link_store_google' =>  $this->input->post('link_googleStore'), //dicoba
			'link_store_apple' =>  $this->input->post('link_appleStore'), //dicoba
			'link_url_web' =>  $this->input->post('link_URLWeb'), //dicoba
			'link_demo_web' =>  $this->input->post('link_URLDemo'), //dicoba
			'link_github' =>  $this->input->post('link_GithubSource'), //dicoba
			'user_guide' => $this->input->post('link_guide'),
			'portfolio_logo' => $image_01, //dicoba
			// 'portfolio_image_01' => $image_02, //dicoba
			// 'portfolio_image_02' => $image_03, //dicoba
			// 'portfolio_image_03' => $image_04, //dicoba
		);

		$folder = "project";
		$image01 = array(

			'image_title' =>$this->input->post('projectTitle'),
			'image_folder' => $folder,
			'image_name' => $image_01
		);

		// $image02 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_02
		// );

		// $image03 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_03
		// );

		// $image04 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_04
		// );

		//insert portfolio
		$portfolio = $this->db->insert('portfolio', $data);
		$portfolio_table  = $this->db->insert_id();

		//insert gallery
		$gallery1 = $this->db->insert('gallery', $image01);
		// $gallery2 = $this->db->insert('gallery', $image02);
		// $gallery3 = $this->db->insert('gallery', $image03);
		// $gallery4 = $this->db->insert('gallery', $image04);
		$gallery_table  = $this->db->insert_id();

		$return_data = array(
			$portfolio => $portfolio_table,
			$gallery1 => $gallery_table,
			// $gallery2 => $gallery_table,
			// $gallery3 => $gallery_table,
			// $gallery4 => $gallery_table,
		);

		return $return_data;

	}

	public function update_portfolio(){
		$slug = url_title($this->input->post('projectTitle'));

		if(empty($_POST["projectHeadline"]) ) {
			$headline = 'isOrdinary';
		} else {
			$headline = 'isFeatured';
		}

		if(empty($_POST["projectStatus"]) ) {
			$publis = 'isConcept';
		} else {
			$publis = 'isPublished';
		}


		$data = array(
			'portfolio_author' => $this->session->userdata( 'user_id' ), //dicoba
			'portfolio_slug' => strtolower($slug),  //dicoba
			'portfolio_category' => $this->input->post('projectCategory'), //dicoba
			'portfolio_tags' => $this->input->post('projectTags'), //dicoba
			'portfolio_title' => $this->input->post('projectTitle'),	 //dicoba
			'portfolio_description' => $this->input->post('projectDescription'), //dicoba
			'status_Headline' => $headline, //dicoba
			'status_project' => $publis,	//dicoba
			'link_store_google' =>  $this->input->post('link_googleStore'), //dicoba
			'link_store_apple' =>  $this->input->post('link_appleStore'), //dicoba
			'link_url_web' =>  $this->input->post('link_URLWeb'), //dicoba
			'link_demo_web' =>  $this->input->post('link_URLDemo'), //dicoba
			'link_github' =>  $this->input->post('link_GithubSource'), //dicoba
			'user_guide' => $this->input->post('link_guide'),
			//'portfolio_logo' => $image_01, //dicoba
			//'portfolio_image_01' => $image_02, //dicoba
			//'portfolio_image_02' => $image_03, //dicoba
			//'portfolio_image_03' => $image_04, //dicoba
		);

		// $folder = "project";
		// $image01 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_01
		// );

		// $image02 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_02
		// );

		// $image03 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_03
		// );

		// $image04 = array(

		// 	'image_title' =>$this->input->post('projectTitle'),
		// 	'image_folder' => $folder,
		// 	'image_name' => $image_04
		// );

		//insert portfolio
		// $portfolio = $this->db->insert('portfolio', $data);
		// $portfolio_table  = $this->db->insert_id();

		// //insert gallery
		// $gallery1 = $this->db->insert('gallery', $image01);
		// $gallery2 = $this->db->insert('gallery', $image02);
		// $gallery3 = $this->db->insert('gallery', $image03);
		// $gallery4 = $this->db->insert('gallery', $image04);
		// $gallery_table  = $this->db->insert_id();

		// $return_data = array(
		// 	$portfolio => $portfolio_table,
		// 	$gallery1 => $gallery_table,
		// 	$gallery2 => $gallery_table,
		// 	$gallery3 => $gallery_table,
		// 	$gallery4 => $gallery_table,
		// );

		// return $return_data;

		$this->db->where('portfolio_id', $this->input->post('portfolioId'));
		return $this->db->update('portfolio', $data);

	}

	//for admin
	public function delete_portfolio($id) {

		$this->db->where('portfolio_id', $id);
		$this->db->delete('portfolio');
		return true;
	}

	//for admin
	public function mark_headlines($id){
		$status = 'isFeatured';

		$data = array(
			'status_headline' => $status
		);

		$this->db->where('portfolio_id', $id);
		$this->db->update('portfolio', $data);
		return true;
	}

	//for admin
	public function mark_published($id){
		$status = 'isPublished';

		$data = array(
			'status_project' => $status
		);

		$this->db->where('portfolio_id', $id);
		$this->db->update('portfolio', $data);
		return true;
	}

	//for admin /dashboard/portfolio
	public function get_portfolio($slug = FALSE){

		if($slug === FALSE) {
			$this->db->order_by('portfolio.created_at', 'DESC');
	        $query = $this->db->get('portfolio');
	        return $query->result_array();
		}

		$query = $this->db->get_where('portfolio', array('portfolio_slug' => $slug));
		return $query->row_array();

	}

	//for admin
	public function get_portfolio_total(){
		$query = $this->db->get('portfolio');
		$num_rows = $query->num_rows();
		return $num_rows;
	}


	//=========================================			PUBLIC			=========================================//

		//for public /portfolio
		public function get_portfolio_published($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}

			if($slug === FALSE) {
				$status = "isPublished";
				$this->db->order_by('portfolio.created_at', 'DESC');
				$this->db->where('status_project', $status);
				$query = $this->db->get('portfolio');
				return $query->result_array();
			}

			$query = $this->db->get_where('portfolio', array('portfolio_slug' => $slug));
			return $query->row_array();
		}

		//for public by category
		public function get_portfolio_category($slug){

			$status = "isPublished";
			$this->db->order_by('portfolio.created_at', 'DESC');
			$this->db->where('portfolio_category', $slug);
			$this->db->where('status_project', $status);
			$query = $this->db->get('portfolio');
			return $query->result_array();

		}

	//=========================================			PUBLIC			=========================================//



}





