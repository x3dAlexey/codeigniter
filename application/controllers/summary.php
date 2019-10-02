<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class summary extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
       
    }
  
    
   function index(){
        //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll(); 
       $data['summarys']=$this->mdl_summary->getAll(); 
       
       
       if(isset($_POST['filt_summ'])){
                $mass = array(
                "siti"=>$_POST['siti'],
                //"cat_id"=>$_POST['cat'],
                "title"=>$_POST['title'],
                
                "cat"=>$_POST['cat'],
                "staj"=>$_POST['staj'],
                "type"=>$_POST['type'],
                "education"=>$_POST['education'],
                "zarplata >"=>$_POST['zpot'],
                "zarplata <"=>$_POST['zpdo'],
            );
            $where = array_diff($mass, array('', 0, null));  
            $data['summarys']=$this->mdl_summary->getWhere($where);
        }
        
       $name='summary/filter';
        $this->display_lib->page($name,$data);
   }
   function info_summ($id){
    
        $data['summar']=$this->mdl_summary->get($id);
        $name='summary/info_summ';
        $this->display_lib->page($name,$data);
   }
   
   function add_summ(){
    //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll();
   
       $str=str_replace(' ','',$_POST['zarplata']);
        $_POST['zarplata']=$str;
        
       if(isset($_POST['goSumm'])){
           $id = $this->mdl_summary->add();
             if ($this->form_validation->run() == TRUE){
                        redirect(base_url().'summary/'.$id);
             }else{
                        redirect(base_url().'summary/add_summ/');
             }
       }else{
        $name='summary/add';
        $this->display_lib->page($name,$data);
       } 
        
       
   }
   function edit_advert($id){
    if(isset($_POST)){
        $this->mdl_catalog->update($id);
             if ($this->form_validation->run() == TRUE){
                        echo "good";
             }else{
                        echo "fail";
             }
    }
   }
    
   
     
}