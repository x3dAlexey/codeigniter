<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logins extends CI_Controller
{
    
    
    public function __construct()
    {
        parent::__Construct();
       $this->load->library('email');       
               
    }

    public function register_com(){
        
        if(isset($_POST['reg_com'])){
                
                $config['upload_path'] = './images/coms/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
        		$this->load->library('upload', $config);
                $this->upload->do_upload();
                $file_data = $this->upload->data(); 
                
              $uz=$this->mdl_login->get('',array('email'=>$_POST['email']));
              if(!empty($uz)){
                  if($_POST['email']==$uz['email']){
                    echo "Такой пользователь уже есть <a href='".base_url()."register'>Назад</a>";
                  }
              }else{
                $this->mdl_login->add($file_data);
                if ($this->form_validation->run() == TRUE){
                        redirect(base_url());
                    }else{
                        $name = 'register';
                        $this->display_lib->default_page($name,$data=array());
                    }
              }
        }
    }
    public function fast_register(){
         if(isset($_POST)){
                
                $id = $this->mdl_login->add();
                 if ($this->form_validation->run() == TRUE){     
                   
                    $this->session->set_userdata(array('fastreg'=>$id));
                 }
                 
        }
        
    }
   
  
    public function login()
    {
         if($_POST){
            $login = $this->input->post('email');
			$pass = $this->input->post('password');
            if($this->auth_lib->login_uzer($login,$pass) !== FALSE){
                redirect(base_url());
            }else{
                $this->error_login();
            }
          }else{
            $name = 'form/login';
            $this->display_lib->page($name,$data=array());
          }
        
        
    }
    function error_login(){
        
        
        $name = 'form/error_login';
        $this->display_lib->page($name,$data=array());
    }
    function recovery($pass='',$id=''){
        $CI =& get_instance();
        if($_POST){
            $uz=$this->mdl_login->get('',array('email'=>$_POST['email']));
            /*// Символы, которые будут использоваться в пароле.*/

            $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
            
            // Количество символов в пароле.
            
            $max=10;
            
            // Определяем количество символов в $chars
            
            $size=StrLen($chars)-1;
            
            // Определяем пустую переменную, в которую и будем записывать символы.
            
            $password=null;
            
            // Создаём пароль.
            
                while($max--)
                $password.=$chars[rand(0,$size)]; 
            
            
             $CI->load->library('email');
             $CI->email->from($_POST['email'], 'гид');
             $CI->email->to('g-unitx3d@ukr.net');
             $CI->email->subject('Восстановление пароля');
             $CI->email->message(
              'Для восстановления пароля перейдите по ссылке, вам будет выдан новый пароль {unwrap}'.base_url().'logins/recovery/'.$password.'/'.$uz['id'].'{/unwrap}  '
             );
             $CI->email->send();
             echo "Письмо отправленно";
            
             
        }
        
        if(!empty($pass)){
            $this->mdl_login->updateAll($id,array('password'=>md5($pass)));
            echo "Вашь новый пароль - $pass";
        }
    }
    
    public function logout()
    {
        $this->auth_lib->logout_uzer();
    }
    public function do_logout()
    {
        $this->auth_lib->do_logout();
    }
}