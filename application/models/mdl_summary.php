<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_summary extends crud
{
    public $table = 'summary';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'cat',         'label'=>'cat',      'rules'=>''),
                                
                                
                                array('field'=>'user_id',             'label'=>'user_id',       'rules'=>''),
                                array('field'=>'zarplata',             'label'=>'zarplata',       'rules'=>''),
                                 array('field'=>'siti',             'label'=>'siti',       'rules'=>''),
                                array('field'=>'title',             'label'=>'title',       'rules'=>'required'),
                                
                                
                                array('field'=>'staj',             'label'=>'staj',       'rules'=>''),
                                array('field'=>'education',             'label'=>'education',       'rules'=>''),
                                array('field'=>'type',             'label'=>'type',       'rules'=>''),
                                array('field'=>'text',             'label'=>'text',       'rules'=>''),
                                array('field'=>'phone',             'label'=>'phone',       'rules'=>''),
                                array('field'=>'adres',             'label'=>'adres',       'rules'=>''),
                               
                                
                                array('field'=>'rating',             'label'=>'rating',       'rules'=>''),
                                array('field'=>'data',             'label'=>'data',       'rules'=>''),

                             );
                             
                             
   
    
}