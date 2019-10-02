<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_menu extends crud
{
    public $table = 'menu';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'menu_name',         'label'=>'menu_name',      'rules'=>''),
                                array('field'=>'page_url',         'label'=>'page_url',      'rules'=>''),
                                array('field'=>'pozition',         'label'=>'pozition',      'rules'=>''),
                                
                                
                                
                             );
                             
   
    
}