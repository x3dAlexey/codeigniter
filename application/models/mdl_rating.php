<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_rating extends crud
{
    public $table = 'rating_advert';
	public $idkey = 'id';
    
    public $add_rules = array(
                                
                                array('field'=>'advert_id',         'label'=>'advert_id',      'rules'=>''),
                                array('field'=>'position',         'label'=>'position',      'rules'=>''),
                                
                                
                                
                             );
                             
   
    
}