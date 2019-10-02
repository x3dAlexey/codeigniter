<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller 
{
    function __construct()
    {
        parent::__Construct();
       
    }
  
    
    
    function index($alt)
    { 
        $data['seo']=$this->mdl_seo->get('3');
        $data['menu']=$this->mdl_menu->getAll();
        
        
         //города
       $this->load->model('mdl_siti');
       $data['sitis']=$this->mdl_siti->getAll();
       $data['category']=$this->mdl_category->getAll();
       $data['advanc']=$this->mdl_advanced_search->getAll();
       
       if(isset($_GET['siti'])){
        //если город выбираем по альту
          $siti_id=$this->mdl_siti->get('',array('alt'=>$alt));
          $data['cat_id']=$siti_id['id'];
          $data['thiscat']=$siti_id['siti'];
          $data['alt']=$alt;
          $data['list']=$this->mdl_catalog->getSelAll('siti',$siti_id['siti']);
       }else{
            //выбор категории по альту
            $cate_id=$this->mdl_category->get('',array('alt'=>$alt));
            $data['cat_id']=$cate_id['id'];
            $data['thiscat']=$cate_id['title'];
            $data['alt']=$alt;
            $data['list']=$this->mdl_catalog->getSelAll('cat',$cate_id['id']);
       }
       

        if(isset($_POST['filt'])){
                $mass = array(
                "siti"=>$_POST['siti'],
                //"cat_id"=>$_POST['cat'],
                "title"=>$_POST['title'],
                "siti"=>$_POST['siti'],
                "cat"=>$_POST['cat'],
                "staj"=>$_POST['staj'],
                "type"=>$_POST['type'],
                "education"=>$_POST['education'],
                "zarplata >"=>$_POST['zpot'],
                "zarplata <"=>$_POST['zpdo'],
            );
            $where = array_diff($mass, array('', 0, null));  
            $data['list']=$this->mdl_catalog->getWhere($where);
        }
        
        foreach($data['list'] as $key=>$val){
            if($val['status']=='vip'){
                $data['vip'][]=$val;
                
            }
            if($val['status']=='noob'){
                $data['free'][]=$val;
                
            }      
        }
        
        
        $name='category/cat_list';
        $this->display_lib->new_page($name,$data);

    }
    function cats(){
        $data['seo']=$this->mdl_seo->get('2');
        $data['category']=$this->mdl_category->getAll();
        $name='cats';
        $this->display_lib->category_page($name,$data);
    }
   
    function filter(){
        
        if(!empty($_POST['siti'])){
            if($_POST['cat']==''){
                if(!isset($_POST['cat_id'])){
                    $data['list']=$this->mdl_catalog->getWhere(array("siti"=>$_POST['siti'])); 
                }else{
                    $data['list']=$this->mdl_catalog->getWhere(array("siti"=>$_POST['siti'],"cat"=>$_POST['cat_id'])); 
                }
            }else{
                $data['list']=$this->mdl_catalog->getWhere(array("siti"=>$_POST['siti'],"cat"=>$_POST['cat'])); 
            }
            
            //$data['list']=$this->mdl_catalog->getSelAll('siti',$_POST['siti']);
        }
        elseif(!empty($_POST['cat'])){
            if($_POST['siti']==''){
                $data['list']=$this->mdl_catalog->getWhere(array("cat"=>$_POST['cat']));
            }else{
                $data['list']=$this->mdl_catalog->getWhere(array("siti"=>$_POST['siti'],"cat"=>$_POST['cat']));
            }
             
        }else{
            $data['list']=$this->mdl_catalog->getAll();
        }
        
        
        //print_r($data);
        foreach($data['list'] as $key=>$val){
            if($val['status']=='vip'){
              
            }
            if($val['status']=='noob'){
                if(empty($val['zarplata'])){
                   $zarp ="договорная";
                }else{
                    $zarp =$val['zarplata']."руб";
                }
                echo '
                    <tr>
                        <td>'.$val['data'].'</td>
                        <td><a href="'.base_url().'advert/'.$val['id'].'">'.$val['title'].'</a></td>
                        <td>'.$val['staj'].'</td>
                        <td>'.$zarp.'</td>
                    </tr>
                ';
                
            }      
        }
        
        
    }
    function filter_all(){
       // print_r($_POST);
       $data['menu']=$this->mdl_menu->getAll();
        
        $mass = array(
            "title"=>$_POST['title'],
            "siti"=>$_POST['siti'],
            "cat"=>$_POST['cat'],
            "staj"=>$_POST['staj'],
            "type"=>$_POST['type'],
            "education"=>$_POST['education'],
            "zarplata >"=>$_POST['zpot'],
            "zarplata <"=>$_POST['zpdo'],
        );
        $where = array_diff($mass, array('', 0, null));  
        $data['list']=$this->mdl_catalog->getWhere($where);

      foreach($data['list'] as $key=>$val){
            if($val['status']=='vip'){
                $data['vip'][]=$val;
                
            }
            if($val['status']=='noob'){
                $data['free'][]=$val;
                
            }      
        }
        $name='category/cat_list';
        $this->display_lib->new_page($name,$data);
    }
   
     
}