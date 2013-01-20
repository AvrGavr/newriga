<?php   
class Menu_model extends CI_Model {   
 
    function Menu_model()   
    {   
        // ����� ������������  
        parent::__construct();   
    }   
 
    function getMenu()   
        {   
            $this->load->helper('url');
			return array(
					anchor('history', "�������"),
					anchor('villages',"������"), 
					anchor('news',"�������"), 
					anchor('ads',"����������"), 
					anchor('rest',"����� � �����������"), 
					anchor('galery',"�����������"), 
					anchor('sales',"����� � ������"), 
					anchor('contacts',"��������" ));
							
							
							
          /*  return array('history',"�������", 
							     */
        } 
		
	function menu_table($name, $properties) {
				switch ($properties[1]) {
				case 'one': 
					$functions_array= array("��������" => array('i', "admin/change/$name"));
					break;
				case 'many': 
					$functions_array= array("��������" => array('+', "admin/add/$name"), 
											"�������/��������" => array ('-', "admin/delete/$name"));
					break;
				case 'users': 
					$functions_array= array("�������������" => array('�',"admin/ban"), 
											"�������" => array('-',"admin/delete/$name"));
			break;
		}
		return $functions_array;
	}
	
	function getAdminMenu()   
        {   
				$begin = array (
					'history' => array("�������", 'one'),
					'villages' => array("������", 'users'),
					'news' => array("�������", 'many'),
					'ads' => array("����������", 'many'),
					'rest' => array("�����", 'one'),
					'sales' => array("�����",  'one'),
					'contacts' => array("��������", 'one'), 
					'galery' => array("�������", 'many')
					
					);
				foreach ($begin as $name => $properties) {
					
					$ret[$properties[0]] = $this->menu_table($name, $properties);
					
				
				}
				return $ret;
				
        }
 
}   
?>