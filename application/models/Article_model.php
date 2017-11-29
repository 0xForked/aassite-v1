<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {

	//create a new article 
	//used in dashboard/article/add
	public function create_article($image_01){

		$slug = url_title($this->input->post('articleTitle'));
		$clap = '0';

		if(empty($_POST["articleStatus"]) ) { 
			$status = 'isArticle'; 
		} else { 
			$status = 'isFeatured'; 
		}

		if(empty($_POST["articlePublish"]) ) { 
			$publis = 'isConcept'; 
		} else { 
			$publis = 'isPublished'; 
		}

		$category = implode(',', $_POST['articleCategory']);

		$data = array(
			'post_author' => $this->session->userdata( 'user_id' ),	 //fix	successssss	
			'post_category' => $category, //fix coyyyy akhirnya
			'post_tag' => $this->input->post('articleTags'), //successsss
			'post_slug' => strtolower($slug),  //fix successsss
			'isPublished' => $publis, //fix succsesssss
			'post_status' => $status,	//fix success sss
			'post_clap' => $clap,	//fix successsss
			'post_image' => $image_01, //fix successssss
			'post_title' => $this->input->post('articleTitle'),	 //fix successs	
			'post_body' => $this->input->post('articleBody')  //fix successssss

		); 

		$folder = "post";
		$gallery = array(
			
			'image_title' =>$this->input->post('articleTitle'),	
			'image_folder' => $folder,
			'image_name' => $image_01
		);

		//insert article
		$article = $this->db->insert('posts', $data);
		$article_table  = $this->db->insert_id();
		//insert gallery
		$gallery = $this->db->insert('gallery', $gallery);
		$gallery_table  = $this->db->insert_id();

		$return_data = array(
			$article => $article_table,
			$gallery => $gallery_table
		);

		return $return_data;
	}

	public function update_article(){

		$slug = url_title($this->input->post('articleTitle'));
		//$clap = '0';

		if(empty($_POST["articleStatus"]) ) { 
			$status = 'isArticle'; 
		} else { 
			$status = 'isFeatured'; 
		}

		if(empty($_POST["articlePublish"]) ) { 
			$publis = 'isConcept'; 
		} else { 
			$publis = 'isPublished'; 
		}

		$category = implode(',', $_POST['articleCategory']);

		$data = array(
			'post_author' => $this->session->userdata( 'user_id' ),	 //fix	successssss	
			'post_category' => $category, //fix coyyyy akhirnya
			'post_tag' => $this->input->post('articleTags'), //successsss
			'post_slug' => strtolower($slug),  //fix successsss
			'isPublished' => $publis, //fix succsesssss
			'post_status' => $status,	//fix success sss
			//'post_clap' => $clap,	//fix successsss so ada isi
			//'post_image' => $image_01, //fix successssss nda da update images
			'post_title' => $this->input->post('articleTitle'),	 //fix successs	
			'post_body' => $this->input->post('articleBody')  //fix successssss

		); 

		$this->db->where('posts_id', $this->input->post('articleId'));
		return $this->db->update('posts', $data);

	}

	//for admin
	public function delete_article($id) {
		// delete semua image lewat media
		// $image_file_name = $this->db->select('post_image')->get_where('posts', array('posts_id' => $id))->row()->post_image;
		// $cwd = getcwd(); // save the current working directory
		// $image_file_path = $cwd."\\assets\\images\\post\\";
		// chdir($image_file_path);
		// unlink($image_file_name);
		// chdir($cwd); // Restore the previous working directory

		$this->db->where('posts.posts_id', $id);
		$this->db->delete('posts');
		return true;
	}

	//for admin /dashboard/article
	public function get_article($slug = FALSE){
		
		if($slug === FALSE) {
			$this->db->order_by('posts.created_at', 'DESC');
	        $query = $this->db->get('posts');
	        return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('post_slug' => $slug));
		return $query->row_array();
        
	}

	//for admin /dashboard/index
	public function get_article_limit(){
		
        $this->db->order_by('posts.posts_id');
        $this->db->where('isPublished', 'isConcept');
        $query = $this->db->get('posts', 5);
        return $query->result_array();
	}

	//for admin
	public function get_article_total(){
		$query = $this->db->get('posts');
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	//for admin
	public function mark_headlines($id){
		$status = 'isFeatured';

		$data = array(
			'post_status' => $status
		);

		$this->db->where('posts_id', $id);
		$this->db->update('posts', $data);
		return true;
	}

	//for admin
	public function mark_published($id){
		$status = 'isPublished';

		$data = array(
			'isPublished' => $status
		);

		$this->db->where('posts_id', $id);
		$this->db->update('posts', $data);
		return true;
	}

	//=========================================			PUBLIC			=========================================//
	
		//for public /blog
		public function get_artilce_published($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}

			if($slug === FALSE) {
				$status = "isPublished";
				$this->db->order_by('posts.created_at', 'DESC');
				$this->db->where('isPublished', $status);
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('post_slug' => $slug));
			return $query->row_array();
		}

		//for public by category 
		public function get_article_category($catg){
			
			$status = "isPublished";
			$this->db->order_by('posts.created_at', 'DESC');
			$this->db->where('post_category', $catg);
			$this->db->where('isPublished', $status);
			$query = $this->db->get('posts');
			return $query->result_array();
		
		}

	//=========================================				PUBLIC				=========================================//
}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */