<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administration extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
       
    }
  
    
   function index($id=''){
       $model = "mdl_".$_GET['model'];
       //$q = $this->mdl_category->getAll();
       //print_r($q);
       
       //$fields = $this->db->list_fields('sl_catalog');
      
      $data['items']=$this->$model->getlist(0,'100',false,'ASC',array());
       
       $name='page';
       if($_GET['model']=='login'){
            $data['items_com']=$this->$model->getlist(0,'100',false,'ASC',array('type'=>'com'));
            $data['items_user']=$this->$model->getlist(0,'100',false,'ASC',array('type'=>'user'));
            $name='users';   
       }
       
       $this->display_lib->admin_page($name,$data);
   }
   function main(){
        $name='main'; 
        $this->display_lib->admin_page($name,$data);
   }
   function login(){
        if($_POST){
            if($_POST['pipl']==='mellon'){
                redirect(base_url().'admin/administration/main');
            }else{
                redirect(base_url().'admin');
            }
        }
        $this->load->view('admin/login');
   }
   function advert_admin($start_from=0){
        $this->load->model('mdl_siti');
        $data['sitis']=$this->mdl_siti->getAll();
        $data['category']=$this->mdl_category->getAll();
        $data['coms']=$this->mdl_login->getWhere(array('type'=>'com'));
        $data['advanc']=$this->mdl_advanced_search->getAll();
        
            $this->load->library('pagination');
                //постраничная 
               $limit=10;
               $total = $this->mdl_catalog->count_all();
               $settings = $this->pagination_lib->get_settings('admin_ad',$total,$limit);
               $this->pagination->initialize($settings);
            
     $data['items']=$this->mdl_catalog->getlist($start_from,$limit,false,'DESC',array('user_id'=>'1'));   
        
     $data['page_nav'] = $this->pagination->create_links();
     
     if(isset($_POST['goAdver'])){
        $str=str_replace(' ','',$_POST['zarplata']);
        $_POST['zarplata']=$str;
        
        $id = $this->mdl_catalog->add();
        
        $_POST['advert_id']=$id;
        $this->mdl_rating->add();
        
        redirect(base_url().'admin/administration/advert_admin');
     }
     
     $name='advert_admin';
     $this->display_lib->admin_page($name,$data);   
        
   }
   function advert_user($start_from=0){
            $this->load->library('pagination');
                //постраничная 
               $limit=10;
               $total = $this->mdl_catalog->count_all();
               $settings = $this->pagination_lib->get_settings('user_ad',$total,$limit);
               $this->pagination->initialize($settings);
               
     $data['items']=$this->mdl_catalog->getlist($start_from,$limit,false,'ASC',array('user_id !='=>'1')); 
        
     $data['page_nav'] = $this->pagination->create_links();
     
     $name='advert_user';
     $this->display_lib->admin_page($name,$data);   
        
   }
   function seo(){
        $data['items']=$this->mdl_seo->getAll();
        $name='seo_page';
        $this->display_lib->admin_page($name,$data); 
   }
   function seo_edit($id){
        $data['item']=$this->mdl_seo->get($id);
        
        if($_POST){
            $this->mdl_seo->update($id);
             redirect(base_url().'admin/administration/seo');
        }
        
        $name='form/seo_edit';
        $this->display_lib->admin_page($name,$data);
   }
  
   
   function add(){
        if($_POST){
            $model = "mdl_".$_GET['model'];

            
            $this->$model->add();
                 if ($this->form_validation->run() == TRUE){
                          redirect($_SERVER['HTTP_REFERER']);  
                        }else{
                            echo "fail";
                        }
        }
   }
   function edit($id){
     $model = "mdl_".$_GET['model'];
     
     if($_GET['model']=='catalog'){
        $this->load->model('mdl_siti');
        $data['sitis']=$this->mdl_siti->getAll();
        $data['category']=$this->mdl_category->getAll();
        $data['coms']=$this->mdl_login->getWhere(array('type'=>'com'));
        $data['advanc']=$this->mdl_advanced_search->getAll();
        
        $data['rat']=$this->mdl_rating->get('',array('advert_id'=>$id));
     }
     if($_POST){
       if($_POST[$_GET['model']]){
            $this->$model->update($id);
            if($_GET['model']=='catalog' || $_POST['fron_page']=='1'){
                $_POST['advert_id']=$id;
                $this->mdl_rating->update($_POST['ratid']);
            }
            redirect($_SERVER['HTTP_REFERER']); 
       }
     }
      
     $data['item']=$this->$model->get($id);
        
     $name='form/'.$_GET['url'];
     $this->display_lib->admin_page($name,$data);   
        
   }
   function del($id){
       $model = "mdl_".$_GET['model'];
       $this->$model->del($id);
       redirect($_SERVER['HTTP_REFERER']); 
   }
   
   
   
     
}