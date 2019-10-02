<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_seo extends crud
{
    public $table = 'seo';
	public $idkey = 'id';
    
    public $add_rules = array(
                                array('field'=>'page',         'label'=>'page',      'rules'=>''),
                                array('field'=>'seo_title',         'label'=>'seo_title',      'rules'=>''),
                                array('field'=>'description',         'label'=>'description',      'rules'=>''),
                                array('field'=>'keywords',         'label'=>'keywords',      'rules'=>''),
                                
                                
                                
                             );
                             
   
    
}