<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_siti extends crud
{
    public $table = 'siti';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'siti',         'label'=>'siti',      'rules'=>''),
                                array('field'=>'alt',         'label'=>'alt',      'rules'=>''),

                             );
                             

    function getCountSiti(){
         $query = $this->db->query("SELECT siti.alt,siti.siti,COUNT(cat.siti) as num  
                                    FROM `sl_siti` as siti LEFT JOIN sl_catalog as cat 
                                    ON siti.siti=cat.siti
                                    WHERE siti.siti=cat.siti
                                    GROUP BY siti.siti
                                    ORDER BY num DESC
                                    LIMIT 5");
         return $query->result_array();

    }
                             
   
    
}