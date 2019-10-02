<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_lib
{

    //Проверяет на совпадение введенные данные с данными из базы и авторизует в случае совпадения
    public function do_login($id)
    {
        
        $CI =& get_instance();
        $qcheck = $CI->db->query( "SELECT * FROM `sl_users` WHERE
										email='" .$CI->session->userdata( 'email' ). "' AND
										password='" .md5($CI->session->userdata( 'password' )). "'" );
    
               
        if( $qcheck->num_rows( ) == 1 )
        {               
            $row = $qcheck->row();
            $ses = array(
                'admin_logined'=>$row->type,
                'id'=>$row->id,
            );
            
            $CI->session->set_userdata($ses);//Записываем сессию
             redirect (base_url().'admin/admin_catalog/index');    
            // Перенаправляем на главную страницу админки
            //redirect (base_url().'admin/administration');
        }else{
            $CI->session->set_flashdata('user_data', '<div id="error">Упс! Неправильно указан логин (e-mail) или пароль</div>');
            redirect (base_url().'admin');
        }
    
        
    }
    function logged_in()
	{
		$CI =& get_instance();
        if($CI->session->userdata('admin_logined')==='3'){
            return true;
        }elseif($CI->session->userdata('admin_logined')==='5'){
            redirect (base_url().'admin/administator_afiha/index');
        }
        else{
            return false;
        }
	}

    
    
    
   
    public function login_uzer($username,$password)
    {
        
        $CI =& get_instance();
        $CI->load->library('session');
        $qcheck = $CI->db->query( "SELECT * FROM `sl_users` 
										WHERE email=
											'" .$username. "'
										AND password=
											'" .md5($password). "'" );
         if( $qcheck->num_rows( ) == 0 )
		{
			return FALSE;
		}
        $row = $qcheck->row();
       
		
        $id = $row->id;
        $mail = $row->email;
        $status= $row->actived;
        $com = $row->com_name;
        $type = $row->type;
        $name = $row->first_name;
        
        $newdata = array(
                        'email'	=>	$mail,
						'com_name'	=>	$com,
						'password'	=>	$password,
                        'id' => $id,
                        'type' => $type,
                        'uz_name' => $name,
                        'logines'=>'yes'
		);

		$CI->session->set_userdata( $newdata );//Добавление в сессию данных логин пароль
		
		return TRUE;  
        
    }
    public function logout_uzer()
    {
        
       $CI =& get_instance();
        	$newdata = array(
		'email'	=>	'',
		'com_name'	=>	'',
        'id' => '',
        'password'=>'',
        'logines'=>''
		);
		
        $CI->session->unset_userdata($newdata);//Удаляем сессию
        $CI->session->sess_destroy();
        redirect (base_url());        
    }
    public function check_login()
    {
        $CI =& get_instance();
        	$lcheck = $CI->db->query( "SELECT * FROM `sl_users` WHERE
										email='" .$CI->session->userdata( 'email' ). "' AND
										password='" .md5($CI->session->userdata( 'password' )). "'" );
		if( $lcheck->num_rows( ) == 1 )
		{
			return TRUE;
		} else {
			return FAlSE;
		}

    }

}
?>