<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galery extends CI_Controller {

	
	function index()   
        {   
	 
			$this->load->model('DB_model'); 
			$this->load->model('Menu_model');
			$this->Menu_model->getMenu();
			$data['now_page'] = 5;
			$data['page_name'] = 'gallery';
			$data['menu'] = $this->Menu_model->getMenu();
			$query = $this->DB_model->getData('news');
			for ($i = 0; $i < count($query); $i++) {
				$article[$query[$i]->header] = $query[$i]->article;
				$article_id[$query[$i]->header] = $query[$i]->id;	
				$article_date[$query[$i]->header] = $query[$i]->date;
				
				}
			
			$data['news'] = $article;
			$data['news_id'] = $article_id; 
			$data['news_date'] = $article_date;
			$query = $this->DB_model->getData('photo');
			$data['photo'] = $query;
            $this->load->view('Main_view',$data);  
				
        }   
	
}
?>