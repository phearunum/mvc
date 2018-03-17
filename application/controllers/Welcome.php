<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model','category');
        $this->load->model('product_model','product');
    }

    public function index()
	{
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $cc=$this->category->list_category();


        $data = array(
            'list' => $result,
            'pro' => $pro,
            'cc' => $cc,
        );
		$this->load->view('welcome_message',$data);
	}

	function cat($x){
        $result=$this->category->list_category();
        $cat=$this->category->list_cat_by_id($x);

        $data = array(
            'list' => $result,
            'cat' => $cat,
        );
        $this->load->view('lproduct_by_cat.php',$data);

    }

}
