<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/10/18
 * Time: 7:03 PM
 */
class Header extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model','category');
    }
    function index(){
        $result=$this->category->list_category();
        $data=array('list'=>$result);
        $this->load->view('layout/header.php',$data);
    }
}