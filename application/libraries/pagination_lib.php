<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_lib
{
    public function get_settings($id,$total,$limit)
    {
        $config = array();
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;    
        $config['first_link'] = '&laquo;&laquo;';
        $config['last_link'] = '&raquo;&raquo;';
        $config['next_link'] = '&raquo;';
        $config['prev_link'] = '&laquo;';
        
        // ���������� ��� ����� ����������
    
    
    // ������ �������� ����������� ��� 
    $config['first_tag_open'] = '<a>'; 
    
    // ������ �������� ����������� ��� 
    $config['first_tag_close'] = '</a>';
    
    // ��������� �������� ����������� ��� 
    $config['last_tag_open'] = '<a>'; 
    
    // ��������� �������� ����������� ���
    $config['last_tag_close'] = '</a>'; 
    
   
    
    // ������� �������� ����������� ���
    $config['cur_tag_open'] = '<a class="active">'; 
    
    // ������� �������� ����������� ���
    $config['cur_tag_close'] = '</a>';
        
    
    
   
            
            switch($id)
            {
                case 'article':
                $config['base_url'] = base_url().'frontend/article/';      
                $config['uri_segment'] = 3;
                $config['num_links'] = 1;             
                return $config; 
                break;
                
                case 'news':
                $config['base_url'] = base_url().'frontend/news/';      
                $config['uri_segment'] = 3;
                $config['num_links'] = 1;             
                return $config; 
                break;
                
                case 'admin_ad':
                $config['base_url'] = base_url().'admin/administration/advert_admin/';      
                $config['uri_segment'] = 4;
                $config['num_links'] = 1;             
                return $config; 
                break;
                
                case 'user_ad':
                $config['base_url'] = base_url().'admin/administration/advert_user/';      
                $config['uri_segment'] = 4;
                $config['num_links'] = 1;             
                return $config; 
                break;
                
                   
           }
                
             
    }
}