<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class display_lib
{
    
    /** @главная страница@ */
    function main_page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('head',$data);
        $CI->load->view('script/front_link',$data);
        //$CI->load->view('header',$data);
        $CI->load->view('front2',$data);
        //$CI->load->view('footer',$data);
       
        
    }
    
    function new_page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('head',$data);
        $CI->load->view('script/link',$data);
        $CI->load->view('header2',$data);
        $CI->load->view($name,$data);
        
       
        
    }
    
    function page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('head',$data);
        $CI->load->view('script/script_link',$data);
        $CI->load->view('header',$data);
        $CI->load->view($name,$data);
        $CI->load->view('block/foot',$data);
       
        
    }
    
    function default_page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('head',$data);
        $CI->load->view('script/script_link',$data);
        $CI->load->view('header',$data);
        $CI->load->view('block/'.$name,$data);
        $CI->load->view('block/foot',$data);
       
        
    }
    
    
    /** @\категорий страница@ */
    function category_page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('head',$data);
        $CI->load->view('script/script_link',$data);
        $CI->load->view('header',$data);
        $CI->load->view('category/'.$name,$data);
        //$CI->load->view('footer',$data);
       
        
    }
    
    /** admin */
    function admin_page($name,$data)
    {
        $CI =& get_instance ();
         
        $CI->load->view('admin/head',$data);
        $CI->load->view('admin/header',$data);
        $CI->load->view('admin/leftmenu',$data);
        $CI->load->view('admin/'.$name,$data);
        //$CI->load->view('footer',$data);
       
        
    }
 
}