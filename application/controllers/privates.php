<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class privates extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
        if(!($this->auth_lib->check_login())){
			redirect(base_url());
		}
       
    }
    
    
    
    function index($id)
    {
      
       if(!($this->session->userdata( 'id' )===$id)){
            redirect(base_url().'accounts/'.$this->session->userdata( 'id' ));
       }
       
       $data['user']=$this->mdl_login->get($id);
        
        
        $data['list']=$this->mdl_catalog->getSelAll('user_id',$data['user']['id']);
        foreach($data['list'] as $key=>$val){
            if($val['status']=='vip'){
                $data['vip'][]=$val;
                
            }
            if($val['status']=='noob'){
                $data['free'][]=$val;
                
            }      
        }
        
        
        $name = 'private';
        $this->display_lib->default_page($name,$data); 
        

    }
    function edit_user($id){
        if(!($this->session->userdata( 'id' )===$id)){
            redirect(base_url().'accounts/'.$this->session->userdata( 'id' ));
       }
        
        $data['user']=$this->mdl_login->get($id);
        
        if(isset($_POST['userEdit'])){
                $config['upload_path'] = './images/coms/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
        		$this->load->library('upload', $config);
                $this->upload->do_upload();
                $file_data = $this->upload->data();            
             $this->mdl_login->update($id,$file_data);
             if ($this->form_validation->run() == TRUE){
                        redirect(base_url().'accounts/'.$id);
             }else{
                       redirect(base_url().'privates/edit_user/'.$id);
             }
        }
        
        $name = 'form/user_edit';
        $this->display_lib->page($name,$data);
    }
    function advert_add(){
        
        
        //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll();
        
        $name = 'form/adver_add';
        $this->display_lib->page($name,$data);
    }
    function advert_edit($id){
        $data['adver']=$this->mdl_catalog->get($id);
        
        if(!($this->session->userdata( 'id' )===$data['adver']['user_id'])){
            redirect(base_url().'accounts/'.$this->session->userdata( 'id' ));
       }
        
         //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll();
        
        $name = 'form/adver_edit';
        $this->display_lib->page($name,$data);
    }
    function advert_del($id){
        $this->mdl_catalog->del($id);
        redirect(base_url().'accounts/'.$this->session->userdata( 'id' ));
    }

    
     
}