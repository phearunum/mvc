<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/5/18
 * Time: 11:46 PM
 */

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin_model');
        $this->load->library('session');
        $this->load->library('upload');
    }

    function index(){
        $user_id=$this->session->userdata('user_id');

        if($user_id){
            $this->load->view('admin/home');

        }else{
            $this->load->view('admin/login');
        }
    }
    function login(){
        $this->load->view('admin/user/list');
    }
    function home(){
        $this->load->view('admin/home.php');
    }
    public function login_view(){

        redirect('admin', 'refresh');

    }
     function user(){
        $this->load->view('admin/user/list');
     }


    function login_user(){
        $user_login=array(
            'user_email'=>$this->input->post('user_email'),
            'user_password'=>md5($this->input->post('user_password'))
        );
        $data=$this->admin_model->login_user($user_login['user_email'],$user_login['user_password']);
        if($data)
        {
            $this->session->set_userdata('user_id',$data['Admin_ID']);
            $this->session->set_userdata('user_email',$data['Email']);
           // $this->session->set_userdata('user_name',$data['Profile']);
            $log=array(
                'Admin_ID'=>$data['Admin_ID']
            );
            $this->admin_model->inserLog($log);
            redirect('admin', 'refresh');

        }
        else{

            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->load->view("admin/login.php");
        }
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('/admin', 'refresh');
    }



    public function create(){
        $data = array();
        $userData = array();

        if($this->input->post('btn_save')){

            $userData = array(
                'F_Name' => strip_tags($this->input->post('fname')),
                'L_Name' => strip_tags($this->input->post('lname')),
                'Sex' => strip_tags($this->input->post('sex')),
                'DOB' => $this->input->post('dob'),
                'Address' => strip_tags($this->input->post('address')),
                'Phone' => strip_tags($this->input->post('phone')),
                'Email' => strip_tags($this->input->post('email')),
                'Password' =>md5($this->input->post('pwd')),
                'Discription' => strip_tags($this->input->post('desc'))
            );
           // var_dump($_FILES['photo']['name']);
            //exit();
            if(!empty($_FILES['photo']['name']))
            {
                $upload = $this->_do_upload();
                $userData['photo'] = $upload;
            }


            if($userData){
                $insert = $this->admin_model->insert($userData);
                if($insert){
                    $data = array(
                        'error_message' => 'Create Successfully'
                    );
                }else{
                    $data = array(
                        'error_message' => 'Some problems occured, please try again'
                    );

                }
                $this->load->view('admin/user/list', $data);


            }
        }

        $this->load->view('admin/user/list');

    }

    private function _do_upload()
    {
        $config['upload_path']          = 'admin_asset/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            //echo json_encode($data);

        }
        return $this->upload->data('file_name');
    }


    function view(){

        $result=$this->admin_model->user_List();
        $data=array('user_list'=>$result);
        $this->load->view('/admin/user/user_list.php',$data);

    }

    function del($id){
        $result=$this->admin_model->delete($id);

        if($result==true){
            redirect('/admin/view');
        }

    }

    function edit($id){
        $result=$this->admin_model->get_admin_Id($id);

        $data=array('edit'=>$result);
        $this->load->view('/admin/user/edit_user.php',$data);

    }
    public function update(){
        $data = array();
        $userData = array();

        if($this->input->post('btn_save')){

            $userData = array(

                'F_Name' => strip_tags($this->input->post('fname')),
                'L_Name' => strip_tags($this->input->post('lname')),
                'Sex' => strip_tags($this->input->post('sex')),
                'DOB' => $this->input->post('dob'),
                'Address' => strip_tags($this->input->post('address')),
                'Phone' => strip_tags($this->input->post('phone')),
                'Email' => strip_tags($this->input->post('email')),

                'Discription' => strip_tags($this->input->post('desc'))
            );
            if(!empty($_FILES['photo']['name']))
            {
                $upload = $this->_do_upload();
                $userData['photo'] = $upload;
            }


            if($userData){
                $update = $this->admin_model->update(array('Admin_ID' => $this->input->post('ID')),$userData);
                if($update){
                    $data = array(
                        'error_message' => 'Update Successfully'
                    );
                }else{
                    $data = array(
                        'error_message' => 'Some problems occured, please try again'
                    );

                }
                $this->load->view('admin/user/list', $data);


            }
        }

        $this->load->view('admin/user/list');

    }

    function log(){
        $result=$this->admin_model->getLog();
        $data=array('user_list'=>$result);
        $this->load->view('/admin/user/time_log',$data);
    }
























}