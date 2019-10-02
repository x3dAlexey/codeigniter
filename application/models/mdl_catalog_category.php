<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_catalog_category extends crud
{
    public $table = 'catalog_category';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'parent_id',         'label'=>'parent_id',      'rules'=>''),
                                array('field'=>'alt',               'label'=>'alt',        'rules'=>''),
                                array('field'=>'title',             'label'=>'title',       'rules'=>''),
                                
                                
                             );
                             
   
    
}