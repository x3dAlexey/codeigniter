<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_sing extends crud
{
    public $table = 'sing';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'email',         'label'=>'email',      'rules'=>'required|valid_email'),
                                array('field'=>'cat',         'label'=>'cat',      'rules'=>'required'),
                                array('field'=>'siti',         'label'=>'siti',      'rules'=>'required'),
                                
                                
                                
                             );
                             
   
    
}