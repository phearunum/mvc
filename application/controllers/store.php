<?php

class Store extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("store_model",'store');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function doUpdate(){
        $data = array();
        $userData = array();
        if($this->input->post('btn_store')) {
            $this->load->library('upload');
            $path = './upload/';
            @chmod($path,0777);
            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 600;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (! $this->upload->do_upload('picture'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());



            $userData = array(
                'store_name' => strip_tags($this->input->post('store_name')),
                'store_number' => strip_tags($this->input->post('store_number')),
                'store_note' => strip_tags($this->input->post('note')),
                'store_remark' => '1',
                'picture'=>($_FILES['picture']['name'])
            );

            if($userData){
                $insert = $this->store->update($_SESSION['user_id'],$userData);
                if($insert){

                    $data = array(
                        'error_message' => 'Create Successfully'
                    );
                }else{
                    $data = array(
                        'error_message' => 'Some problems occured, please try again'
                    );
                }
                $this->load->view('/profile', $data);
            }

            }
        }

    }

    public function save(){
        $data = array();
        $userData = array();
        if($this->input->post('btn_store')) {
            if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
                $path = './upload/';
                @chmod($path,0777);
                $url=uniqid(rand()) . $_FILES['picture']['name'];
                $userData = array(
                    'store_name' => strip_tags($this->input->post('store_name')),
                    'store_number' => strip_tags($this->input->post('store_number')),
                    'store_note' => strip_tags($this->input->post('note')),
                    'store_remark' => '1',
                    'picture' => $url
                );
                move_uploaded_file($_FILES['picture']['tmp_name'],$path.$url);

            }else{
                $userData = array(
                    'store_name' => strip_tags($this->input->post('store_name')),
                    'store_number' => strip_tags($this->input->post('store_number')),
                    'store_note' => strip_tags($this->input->post('note')),
                    'store_remark' => '1',

                );
            }

            if($userData){
                $insert = $this->store->update($_SESSION['user_id'],$userData);
                if($insert){

                    $data = array(
                        'error_message' => 'Create Successfully'
                    );
                }else{
                    $data = array(
                        'error_message' => 'Some problems occured, please try again'
                    );
                }

                redirect('/profile/setting');
                $this->load->view('/profile/setting', $data);
            }
        }
    }



}