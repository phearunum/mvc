<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/7/18
 * Time: 2:59 PM
 */
class Admin_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table="tbl_admin";
    }
    public function login_user($email,$pass){


        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('Email',$email);
        $this->db->where('Password',$pass);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    public function email_check($email){

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('Email',$email);
        $query=$this->db->get();

        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }

    }
    public function insert($data = array()) {

        $insert = $this->db->insert('tbl_admin', $data);
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

    public function update($where,$data = array()) {

        $update=$this->db->update($this->table,$data,$where);
        if($update){
            return true;
        }else{
            return false;
        }
    }

    function user_List(){

        $this->db->select("*");
        $this->db->from($this->table);

        $query=$this->db->get();
        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }
    }

    function delete($id){

        $this->db->where('Admin_ID',$id);
        $this->db->delete($this->table);
    }
    function get_admin_Id($id){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where('Admin_ID',$id);
        $query=$this->db->get();
        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }

    }

    function getLog(){
        $this->db->select("*");
        $this->db->from('tbl_login');
        $this->db->join('tbl_admin','tbl_admin.Admin_ID=tbl_login.Admin_ID');
        $query=$this->db->get();
        if($query->num_rows() >0){
            return $query->result();

        }else{
            return false;
        }
    }
    function inserLog($data){
        $insert = $this->db->insert('tbl_login', $data);
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }

    }






























}