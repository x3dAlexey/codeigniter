<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_category extends crud
{
    public $table = 'category';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'title',         'label'=>'title',      'rules'=>''),
                                array('field'=>'alt',           'label'=>'alt',        'rules'=>''),
                                array('field'=>'icon',          'label'=>'icon',       'rules'=>''),
                                
                                
                             );
                             
   function getCountCat(){
     $query = $this->db->query("SELECT cate.alt,cate.title,COUNT(cat.cat) as num  
                                    FROM `sl_category` as cate LEFT JOIN sl_catalog as cat 
                                    ON cate.id=cat.cat
                                    WHERE cate.id=cat.cat
                                    GROUP BY cate.title
                                    ORDER BY num DESC
                                    LIMIT 5");
     return $query->result_array();
   }
    
}