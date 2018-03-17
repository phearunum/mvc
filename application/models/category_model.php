<?php

class Category_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table="tbl_store_category";
    }

    function list_category(){

        $this->db->select("*");
        $this->db->from($this->table);
        $query=$this->db->get();
        if($query->num_rows() >0){

            return $query->result();

        }else{
            return false;
        }

    }

    function list_cat_by_id($data){
        $this->db->select("*");
        $this->db->from("tbl_sub_category");
        $this->db->join($this->table,'tbl_store_category.cat_id=tbl_sub_category.cat_id');
        $this->db->where('tbl_store_category.cat_id',$data);
        $query=$this->db->get();
        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }

    }

}