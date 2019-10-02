<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class advert extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
       
    }
  
    
   function index($id){
    $data['seo']=$this->mdl_seo->get('4');
    
       if(is_numeric($id)){
            $data['adver']=$this->mdl_catalog->get($id);
            $data['logo']=$this->mdl_login->get($data['adver']['user_id']);
            #хлебные
            $data['bred']=$this->mdl_category->get($data['adver']['cat']);
            #компания и лист её обьяв
            $data['com']=$this->mdl_login->get($data['adver']['user_id']);
            $data['list_adver']=$this->mdl_catalog->getWhere(array('user_id'=>$data['adver']['user_id']));
            
            
            
       } 
       $name='category/vadvert';
       $this->display_lib->new_page($name,$data);
   }
   
   function add_advert(){
   
        if(isset($_POST)){
          
           
               $_POST['status']='noob'; 
               $_POST['user_id']=$this->session->userdata('fastreg');
               $uz = $this->mdl_login->get($_POST['user_id']);
               $_POST['company']=$uz['com_name'];
               $_POST['data']=date("Y-m-d"); 
               
               $str=str_replace(' ','',$_POST['zarplata']);
                $_POST['zarplata']=$str;
               
               
               
            if(empty($uz)){
                  $name='error';
                  $this->display_lib->default_page($name,$data=array());               
            }else{
                
                 $id=$this->mdl_catalog->add();
                 //подписка на обьявления
                 $mass=array(
                    'advert'=>$id,
                    'cat'=>$this->input->post('cat'),
                    'siti'=>$this->input->post('siti')
                );
                
                 
                        if ($this->form_validation->run() == TRUE){
                            $this->sing($mass);
                            redirect(base_url().'advert/'.$id);
                            
                            
                        }else{
                            redirect(base_url());
                            
                        }
                 
             }
        }
   }
   function add_comAddvert(){
   
        if(isset($_POST)){
          
           
               $_POST['status']='noob'; 
               $_POST['data']=date("Y-m-d"); 
               
            if(empty($uz)){
                  $name='error';
                  $this->display_lib->default_page($name,$data=array());               
            }else{}   
                $id=$this->mdl_catalog->add();
                //подписка на обьявления
                 $mass=array(
                    'advert'=>$id,
                    'cat'=>$this->input->post('cat'),
                    'siti'=>$this->input->post('siti')
                );
                $this->sing($mass);
                
                        if ($this->form_validation->run() == TRUE){
                            redirect(base_url().'advert/'.$id);
                        }else{
                            redirect(base_url());
                        }
                 
             
        }
   }
   function edit_advert($id){
    if(isset($_POST)){
        $this->mdl_catalog->update($id);
             if ($this->form_validation->run() == TRUE){
                        redirect(base_url().'accounts/'.$id);
             }else{
                       redirect(base_url().'privates/advert_edit/'.$id);
             }
    }
   }
   function sing_advert(){
        $this->load->model('mdl_siti');
        $this->load->model('mdl_sing');
        $data['sitis']=$this->mdl_siti->getAll();
        $data['category']=$this->mdl_category->getAll();
        
        if($_POST){
            $this->mdl_sing->add();
            if ($this->form_validation->run() == TRUE){
                echo 'Вы успешно подписались';
            }else{
                echo "fail";
            }
        }
        
        $name='sing';
        $this->display_lib->default_page($name,$data);
   }
   function sing($mas){
        $this->load->model('mdl_sing');
        $sings = $this->mdl_sing->getAll();
        
        foreach($sings as $sin){
            if( ($mas['cat']==$sin['cat']) and ($mas['siti']==$sin['siti']) ){
                $adv = $this->mdl_catalog->get($mas['advert']);
                    
                 $CI =& get_instance();
                 $CI->load->library('email');
                 $config['mailtype'] = 'html';
                 
                 $CI->email->initialize($config);
                 $CI->email->from($sin['email'], 'рассылка');
                 $CI->email->to('g-unitx3d@ukr.net');
                 $CI->email->subject($adv['title']);
                 $CI->email->message('
<span style="display: block; margin:0;" bgcolor="#ffffff">
    <table width="100%" bgcolor="#ffffff">
        <tbody>
            <tr>
            <td bgcolor="#ffffff">
               
                    
                        <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="margin-top:0pt;margin-left:auto;margin-right:auto;background-color:#ffffff;text-align:left;">
                            <tbody>
                                <tr>
                                    <td width="20" height="20" bgcolor="#ffffff" colspan="3"></td>
                                </tr>
                                    <tr>
                                    <td width="20" bgcolor="#ffffff"></td>
                                    <td>
                                        <b>
                                            <font face="arial" color="#000000">
                                                <a style="color:#006ed6;" target="_blank" href="'.base_url().'advert/'.$adv['id'].'"> '.$adv['title'].'  </a>
                                            </font>
                                        </b>
                                            <b>
                                            <font face="arial" color="#62a200">
                                                <span> '.$adv['zarplata'].' р</span>
                                            </font>
                                        </b>
                                    </td>
                                    <td width="20" bgcolor="#ffffff"></td>
                                    </tr>
                                    <tr>
                                    <td width="20" height="10" bgcolor="#ffffff" colspan="3"></td>
                                    </tr>
                                    <tr>
                                    <td width="20" bgcolor="#ffffff"></td>
                                    <td>
                                    <font face="arial" color="#000000">
                                    '.substr($adv['text'], 0, 200).'
                                    <br>
                                    Компания - <b>'.$adv['company'].'</b>
                                    <br>
                                    <br>
                                    Стаж - <b>'.$adv['staj'].'</b>
                                    <br>
                                    Занятость - <b>'.$adv['type'].'</b>
                                    </font>
                                    </td>
                                    <td width="20" bgcolor="#ffffff"></td>
                                    </tr>
                                    <tr>
                                    <td width="20" bgcolor="#ffffff"></td>
                                    
                                    <td width="20" bgcolor="#ffffff"></td>
                                </tr>
                            </tbody>
                        </table>
                    
                    
                </td>
            </tr>
        </tbody>
    </table>
</span>
');
                 $CI->email->send();
                 
            }
        }
        
        
        
   }
    
   
     
}