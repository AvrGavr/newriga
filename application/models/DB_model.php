<?php   
class DB_model extends CI_Model {   
 
    function DB_model()   
    {   
        // Вызов конструктора  
        parent::__construct(); 
		$this-> db-> query('SET NAMES cp1251');
    }   
 
    function getData($table)   
        {   
              
            $query = $this->db->get($table); 
              
            return $query->result();
			
        }  

	function changePassword($new) {
		$query = $this->db->query("UPDATE qnwrg15_admin SET pass = md5('".$new."')");
		
	}
	
	function checkPassword($pass) {
		$query = $this->db->query("SELECT * FROM qnwrg15_admin WHERE pass = md5('".$pass."')"); 
		return ($query->num_rows() > 0);
		
	}
	
	function changeOneArticle($table, $new) {
		$this->db->set('article', $new);
		$this->db->update($table);
	}
	
	function addInTable($table, $new, $head) {
		$this->db->set('article', $new);
		$this->db->set('header', $head);
		$this->db->set('date', date("Y-m-d"));
		$this->db->insert($table);
	}
	
	function deleteOne($table, $id) {
		$this->db->delete($table, array('id' => $id)); 
	}
	
	function getAdsCats() {
		$query1 = $this->db->get('cat');
		$query2 = $this->db->get('ads');
		$cat = $query1->result();
		$ads = $query2->result();
		$catarray=array();
		for ($j = 0; $j < count($cat); $j++) {
				$catarray[$j]['id'] = $cat[$j]->id;
				$catarray[$j]['head'] = $cat[$j]->name;
				$catarray[$j]['count'] = 0;
				$catarray[$j]['arr_heads'] = array();
				$catarray[$j]['arr_id'] = array();
			}
		for ($i = 0; $i < count($ads); $i++) {
			for ($j = 0; $j < count($cat); $j++) {
								
				if ($ads[$i]->id_cat == $cat[$j]->id) {
					
					$catarray[$j]['count']++;
					
					$catarray[$j]['arr_heads'][] = $ads[$i]->header;
					$catarray[$j]['arr_id'][] = $ads[$i]->id;
				}
				
			}
		}
		return $catarray;
		
	}
	
	function getAdByCat() {
		$query = $this->db->get('ads');
		$ads = $query->result();
		for ($i = 0; $i < count($query); $i++) {
				$article[$query[$i]->header] = $query[$i]->article;	
				$article_date[$query[$i]->header] = $query[$i]->date;
				
				}
		
	}
}   
?> 