<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	
	function index()   
        {   
	 
			$this->load->model('DB_model'); 
			$this->load->model('Menu_model');
			$this->Menu_model->getMenu();
			$data['article_section'] =  true;
			$query = $this->DB_model->getData('news');
			for ($i = 0; $i < count($query); $i++) {
				$article[$query[$i]->header] = $query[$i]->article;
				$article_id[$query[$i]->header] = $query[$i]->id;	
				$article_date[$query[$i]->header] = $query[$i]->date;
				
				}
			$data['news'] = $article;
			$data['news_id'] = $article_id; 
			$data['news_date'] = $article_date;
			$data['article'] = $article;
			$data['article_id'] = $article_id; 
			$data['article_date'] = $article_date;
			
			$data['now_page'] = 2;
			$data['menu'] = $this->Menu_model->getMenu();
			$data['itsnews'] = true;
            $this->load->view('Main_view',$data);   
        }   
		
	function more($id) {
			$this->load->model('DB_model'); 
			$this->load->model('Menu_model');
			$this->Menu_model->getMenu();
			$data['article_section'] =  true;
			$query = $this->DB_model->getData('news');
			for ($i = 0; $i < count($query); $i++) {
				if ($query[$i]->id == $id) 
					$article = array($query[$i]->header => $query[$i]->article); 
				}			
			$data['article'] = $article;
			
			$data['now_page'] = 2;
			$data['menu'] = $this->Menu_model->getMenu();
			$data['itsnews'] = true;
			$query = $this->DB_model->getData('news');
			for ($i = 0; $i < count($query); $i++) {
				$news[$query[$i]->header] = $query[$i]->article;
				$news_id[$query[$i]->header] = $query[$i]->id;	
				$news_date[$query[$i]->header] = $query[$i]->date;
				
				}
			$data['news'] = $news;
			$data['news_id'] = $news_id; 
			$data['news_date'] = $news_date;
            $this->load->view('Main_view',$data);   
	}
	
}
?>
