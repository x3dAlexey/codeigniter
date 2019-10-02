<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontend extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
       
    }
    
    
    
    function index()
    {
       
       $data['menu']=$this->mdl_menu->getAll();
       $data['category']=$this->mdl_category->getAll();
       
       //seo
       $data['seo']=$this->mdl_seo->get('1');
       
       //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll();
       $this->load->helper('date');
       
       //выборка и подсчет количества из баз siti,catalog
       $data['coutSiti'] = $this->mdl_siti->getCountSiti();
       $data['coutCat'] = $this->mdl_category->getCountCat();
       
       //свежие вакансси
       $data['lastadvert']=$this->mdl_catalog->getlist(0,10,false,'desc',array());
    
       //статьи
       $data['article']=$this->mdl_article->getlist(0,4,false,'desc',array());
       //новости
       $data['news']=$this->mdl_news->getlist(0,4,false,'desc',array());
       
       $data['front_advert']=$this->mdl_catalog->getlist(0,10,'rating','desc',array('fron_page'=>'1'));
          
       $name = '';
       $this->display_lib->main_page($name,$data);
        

    }
    
    
   
    
    function register(){
        
        
        $name = 'register';
        $this->display_lib->default_page($name,$data=array());
    }
    
    function article($start_from=0){
        
        $data['seo']=$this->mdl_seo->get('6');
        
        $data['menu']=$this->mdl_menu->getAll();
        //$data['articles']=$this->mdl_article->getAll();
        $this->load->library('pagination');
        //постраничная 
               $limit=10;
               $total = $this->mdl_article->count_all();
               $settings = $this->pagination_lib->get_settings('article',$total,$limit);
               $this->pagination->initialize($settings);
               
               $data['lists']=$this->mdl_article->getlist($start_from,$limit,false,'ASC',array());
             
               
        
        $data['page_nav'] = $this->pagination->create_links();
        
        $name = 'article';
        $this->display_lib->default_page($name,$data);  
    }
    
    function news($start_from=0){
        
        $data['seo']=$this->mdl_seo->get('5');
        
        $data['menu']=$this->mdl_menu->getAll();
        //$data['articles']=$this->mdl_article->getAll();
        $this->load->library('pagination');
        //постраничная 
               $limit=10;
               $total = $this->mdl_news->count_all();
               $settings = $this->pagination_lib->get_settings('news',$total,$limit);
               $this->pagination->initialize($settings);
               
               $data['lists']=$this->mdl_news->getlist($start_from,$limit,false,'desc',array());
             
               
        
        $data['page_nav'] = $this->pagination->create_links();
        
        $name = 'block/news';
        $this->display_lib->page($name,$data);  
    }
   
    function show($id,$val){
       // $data['menu']=$this->mdl_menu->getAll();
        if($val=='article'){
            $data['vals']=$this->mdl_article->get($id);
        }elseif($val=='news'){
            $data['vals']=$this->mdl_news->get($id);
        }
        
        
        $CI =& get_instance ();
        $CI->load->view('block/show_artnews',$data);
    }
    
    function contact(){
        if($_POST){
            $CI =& get_instance();
            $CI->load->library('email');
            $CI->email->from($_POST['email'], 'Обратная');
            $CI->email->to('advertwork@yandex.ru');
            $CI->email->subject('Обратная');
            $CI->email->message($_POST['name'].$_POST['text']);
            $CI->email->send();
            
            redirect($_SERVER['HTTP_REFERER']);  
        }
        
        $name = 'block/contact';
        $this->display_lib->page($name,$data=array());  
    }
    
   
    function test(){
        $this->load->view('qq/index');
    }
    function dev(){
        $this->load->view('develop');
    }
     
}