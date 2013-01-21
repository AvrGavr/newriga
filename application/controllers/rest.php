<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rest extends CI_Controller {

	
	function index()   
        {   
	 
			$this->load->model('DB_model'); 
			$this->load->model('Menu_model');
			$this->Menu_model->getMenu();
			$data['now_page'] = '4';
			$data['article_section'] =  true;
			$data['menu'] = $this->Menu_model->getMenu();
			$query = $this->DB_model->getData('rest');
			$data['article'] = array("Отдых и Развлечеия" => $query[0]->article);
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