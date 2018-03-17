<?php

class User_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table="tbl_dealer";
    }

    function list_user($id){
        $this->db->select('*');

        $this->db->from($this->table);
        $this->db->join('tbl_store','tbl_store.dealer_id=tbl_dealer.dealer_id');
        $this->db->where('tbl_dealer.dealer_id',$id);
        $query=$this->db->get();
        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }
    }
    public function create_user($data = array()){
        $insert = $this->db->insert($this->table, $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function update($where,$data)
    {
        $this->db->update($this->table,$data,'dealer_id'.'='.$where);
        return $this->db->affected_rows();
    }

    public function email_check($email){
        $this->db->select('dealer_email');
        $this->db->from($this->table);
        $this->db->where('dealer_email',$email);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function phone_check($phone){
        $this->db->select('phone');
        $this->db->from($this->table);
        $this->db->where('phone',$phone);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    public function login_user($email,$pass){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('dealer_email',$email);
        $this->db->where('password',$pass);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }

    public function security($where,$data){

        $this->db->update($this->table,$data,'dealer_id'.'='.$where);
        return $this->db->affected_rows();
    }

    function post(){
        echo 'Post';
    }


}