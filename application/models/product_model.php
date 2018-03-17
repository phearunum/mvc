<?php

class Product_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table="tbl_product";
    }
    function index(){
        $this->db->select("*");
        $this->db->from($this->table);
        $query=$this->db->get();

        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }

    }
}