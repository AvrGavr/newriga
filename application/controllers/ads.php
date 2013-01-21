<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {

	
	function index()   
        {   
	 
			$this->load->model('DB_model'); 
			$this->load->model('Menu_model');
			$this->Menu_model->getMenu();
			$data['now_page'] = 3;
			$data['page_name'] = 'ads';
			$data['menu'] = $this->Menu_model->getMenu();
			$cats = $this->DB_model->getAdsCats();
			$data['cats'] = $cats;
			$this->load->helper('url');
			$data['catsurl'] = site_url('ads/category');
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
	function category($id) {
		$this->load->model('DB_model'); 
		$this->load->model('Menu_model');
		$this->Menu_model->getMenu();
		$data['now_page'] = 3;
		$data['page_name'] = 'ads/category';
		$data['menu'] = $this->Menu_model->getMenu();
		$query = $this->DB_model->getData('ads');
		
		for ($i = 0; $i < count($query); $i++) {
				if ($query[$i]->id_cat == $id) {
					$article[$query[$i]->header] = $query[$i]->article;	
					$article_date[$query[$i]->header] = $query[$i]->date;
				}
			}
		$query = $this->DB_model->getData('news');
			for ($i = 0; $i < count($query); $i++) {
				$news[$query[$i]->header] = $query[$i]->article;
				$news_id[$query[$i]->header] = $query[$i]->id;	
				$news_date[$query[$i]->header] = $query[$i]->date;
				
				}
			$data['article'] = $article;
			$data['article_date'] = $article_date;
			
			$data['news'] = $news;
			$data['news_id'] = $news_id; 
			$data['news_date'] = $news_date;
            $this->load->view('Main_view',$data);   
	
	}
	
}
?>