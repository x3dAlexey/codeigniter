<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_article extends crud
{
    public $table = 'article';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'title',         'label'=>'title',      'rules'=>''),
                                array('field'=>'short_text',         'label'=>'short_text',      'rules'=>''),
                                array('field'=>'text',         'label'=>'text',      'rules'=>''),
                                array('field'=>'data',         'label'=>'data',      'rules'=>''),

                             );
                             
                             
   
    
}