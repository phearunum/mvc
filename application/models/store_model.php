<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/14/18
 * Time: 11:32 PM
 */
class Store_Model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
         $this->load->database();
     }

     function getStore($userId){
         $this->db->select("*");
         $this->db->from("tbl_store");
         $this->db->where("dealer_id",$userId);
         $query=$this->db->get();
         if($query->num_rows() >0){
             return $query->result();

         }else{
             return false;
         }
     }

    function create($data = array()){
        $insert = $this->db->insert("tbl_store", $data);
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
     function gettopId(){
         $sql="INSERT INTO tbl_store(`dealer_id`)SELECT dealer_id FROM tbl_dealer ORDER BY dealer_id desc LIMIT 1";
         $this->db->query($sql);



     }

    public function update($where, $data)
    {
        $this->db->update("tbl_store",$data,'dealer_id'.'='.$where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('store_id', $id);
        $this->db->delete($this->table);
    }

}