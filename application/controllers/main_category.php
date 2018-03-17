<?php

class Main_category extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $result=$this->category_model->list_category();
        $data=array('list'=>$result);
        $this->load->view('welcome_message',$data);
    }

    function list_cat($data){


    }



}