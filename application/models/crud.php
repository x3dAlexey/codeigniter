<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Crud extends CI_Model
{
    public $table = ''; //��� �������
 
    public $idkey = 'id'; //���� ID
 
    public $add_rules = array(); //������� ��������� ��� ����������
 
    public $edit_rules = array(); //������� ��������� ��� ��������������
	
	public $del_rules_user = array();
	
	public $user = 'username';
    
    
    //�����������
    function Crud()
    {
        parent::__Construct();
    }
    
    /**
     * ��������� ������ �� ID
     */
    function get($id, $where_arr = array())
    {
        if($id!==''){
            $this->db->where($this->idkey, $id);
            $query = $this->db->get($this->table);
        }
        else{
            $query = $this->db->get_where($this->table, $where_arr);
        }
        $rez = $query->row_array();
        return $rez;
    }
    
    /**
     * ��������� ����� ������
     */
    function getlist($start_from,$limit = false, $order_by = false, $desc = '', $where = array())
    {
	    if(! $order_by) $order_by = $this->idkey;
        $query = $this->db->order_by($order_by, $desc);
        $query = $this->db->get_where($this->table, $where, $limit, $start_from);
        if($query->num_rows == 0){return array();}
            $rez = $query->result_array();
        return $rez;
    }
    function getWhere($where){
        $this->db->where($where);
        $query = $this->db->get($this->table); 
        $rez = $query->result_array();
        return $rez;
    }
    // ���������� ���� �������
    public function count_all()
    {
            return $this->db->count_all_results($this->table);
    }
    // ���������� ���� ������� � ��������
    public function count_by($where)
    {
        $this->db->where($where);
        return $this->db->count_all_results($this->table);
    }
     /**
     * ��������� ���� �������
     */
     function getAll()
     {
        $this->db->order_by ($this->idkey,'ASC');
        $query = $this->db->get($this->table);
        return $query->result_array();
     }
     /**
     * ������� ��� ������ ������ �� �� �� ���������� ���� � �������� (��� ����)
     *
     */
    function getSelAll($col,$value)
    {
        $query = $this->db->query("SELECT * FROM ".'sl_'.$this->table." WHERE ".$col."='".$value."' ORDER BY id DESC");
        if($query->num_rows() !== 0){
            return $query->result_array();
        }
        else{return false;}
    }
    /**
     * ���������� ��������, ������ � ��
     *
     */ 
     function addAll($where)
     {
        $this->db->insert($this->table, $where);
        return true;
     }
     function add($file='')
    {
 
        $this->form_validation->set_rules($this->add_rules);
        if ($this->form_validation->run()) {
            $data = array();
            foreach ($this->add_rules as $one) {
                $f = $one['field'];
                $data[$f] = $this->input->post($f);	
            }
            if(!empty($file['file_name'])){
                $data['img']=$file['file_name'];
            }
            
           
            
            $this->db->insert($this->table, $data);
            return $this->db->insert_id(); //���������� ����� ���������� id
        } else {
            return false;
        }
    }
    /**
     * ���������� 
     *
     */
    public function update($obj_id,$file='')
    {
        $this->form_validation->set_rules($this->add_rules);
         if ($this->form_validation->run()) {
            foreach ($this->add_rules as $item)
             {
                 $f = $item['field'];
                 $data[$f] = $this->input->post($f);
    	     }
             if(!empty($file['file_name'])){
                $data['img']=$file['file_name'];
            }  
                
           $this->db->where($this->idkey,$obj_id);
    	   $this->db->update($this->table,$data);
           
       }else {
            return false;
        }
            
    }
     /**
     * ���������� ��������, ������ � ��
     *
     */
     function updateAll($id,$data)
     {
        $this->db->where($this->idkey,$id);
	    $this->db->update($this->table,$data);
        return true; 
     }
     /**
     * ������� �������� ������ �� �� �� id
     */
    function del($id)
    {
        $this->db->where($this->idkey, $id);
        $this->db->delete($this->table);
    }
     /**
     * �������� � ��� ��������
     */
    function getCatPages($item_id,$url)
    {
        $this->db->where('item_id',$item_id);
        $this->db->where('alt',$url);
        $query = $this->db->get($this->table);
        return $query->row_array();
        
    }
    /**
     * ��������� ��������
     */
    function getNews($date,$id)
    {
        $this->db->where('date',$date);
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row_array();
        
    }
    /**
     * 
     */
    function getRang($obj1,$obj2)
    {
       $query = $this->db->query("SELECT * FROM sl_".$this->table." WHERE ".$obj1.">='".$obj2."' ORDER BY RAND() ");
       return $query->row_array();
    }
}