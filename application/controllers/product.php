<?php

class Product extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }
    function index(){
        $this->load->view('admin/product/list_product');
    }
    function list_product(){
        $this->load->view('admin/product/list_product');
    }

    function add_product(){
        $this->load->view('admin/product/add_product');

    }

    //------------> for user page ---------->

    function list_all_pro(){
        $this->load->view("list_all_product.php");
    }


}