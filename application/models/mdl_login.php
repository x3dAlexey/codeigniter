<?php
	
if(!defined('BASEPATH')) exit('No direct path access allowed');
class mdl_login extends crud
{
    public $table = 'users';
	public $idkey = 'id';
    
    
     public $add_rules = array(
                                array('field'=>'type',                  'label'=>'type',                    'rules'=>''),
                                array('field'=>'email',                 'label'=>'email',                   'rules'=>'trim|required|valid_email'),
                                array('field'=>'password',              'label'=>'password',                'rules'=>'trim|required|md5|min_length[3]|max_length[50]"'),
                                array('field'=>'com_name',            'label'=>'com_name',                  'rules'=>'trim||max_length[50]'),
                                array('field'=>'first_name',            'label'=>'first_name',              'rules'=>'trim||max_length[50]'),
                               
                                array('field'=>'phone',                 'label'=>'phone',                   'rules'=>''),
                                array('field'=>'info',                  'label'=>'info',                 'rules'=>''),
                                array('field'=>'img',                  'label'=>'img',                 'rules'=>''),
                                
                                array('field'=>'actived',               'label'=>'actived',                 'rules'=>''),
                                array('field'=>'actived_key',           'label'=>'actived_key',             'rules'=>''),
                                array('field'=>'forgot_password_key',   'label'=>'forgot_password_key',     'rules'=>''),
                                
                             );
                             
    public $login_rules = array(
                                array('field'=>'login',                  'label'=>'login',                    'rules'=>''),
                                array('field'=>'password',               'label'=>'password',                 'rules'=>''),
                                
                             );
    public $admin_rules = array(
                                array('field'=>'login',                  'label'=>'login',                    'rules'=>''),
                                array('field'=>'password',               'label'=>'password',                 'rules'=>''),
                                
                             );
    
}