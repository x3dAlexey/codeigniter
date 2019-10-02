<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_advanced_search extends crud
{
    public $table = 'advanced_search';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'education',         'label'=>'education',      'rules'=>''),
                                array('field'=>'staj',         'label'=>'staj',      'rules'=>''),
                                array('field'=>'type',         'label'=>'type',      'rules'=>''),
                             );
                             
   
    
}