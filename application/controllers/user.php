<?php
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model','category');
        $this->load->model('product_model','product');
        $result=$this->category->list_category();
        $this->load->model('user_model');
        $this->load->model('store_model','store');
        $pro=$this->product->index();

        $this->data = array(
            'list' => $result,
            'pro' => $pro,
        );


    }
    function index(){

    }

    function register(){

        $this->load->view('register',$this->data);
    }
    function Do_register(){

        $data = array();
        $userData = array();
        if($this->input->post('btn_create')){

            $email=$this->input->post('email');
            $phone=$this->input->post('phone');

            $userData = array(
                'dealer_fname' => strip_tags($this->input->post('fname')),
                'dealer_lname' => strip_tags($this->input->post('lname')),
                'dealer_sex' => strip_tags($this->input->post('sex')),
                'dealer_add' => strip_tags($this->input->post('adds')),
                'dealer_email' => strip_tags($this->input->post('email')),
                'phone' => strip_tags($this->input->post('phone')),
                'password' =>md5($this->input->post('pwd')),
                'dealer_remark'=>'1'

            );
            $check = $this->user_model->email_check($email);
            $check_phone=$this->user_model->phone_check($phone);
            //var_dump($check);
            //exit();
            if($check) {
                $data = array(
                    'error_email' => 'email is exit'
                );
            }else if($check_phone){
                $data = array(
                    'error_phone' => 'phone is exit'
                );
            }else{

                if($userData){
                    $insert = $this->user_model->create_user($userData);
                    if($insert){
                        $top=$this->store->gettopId();
                        $data = array(
                            'error_message' => 'Create Successfully'
                        );
                    }else{
                        $data = array(
                            'error_message' => 'Some problems occured, please try again'
                        );

                    }


                    $this->load->view('/login', $data);
                }

            }
        }
        $this->load->view('/register',$data);
    }


    function edit(){
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
        );

        $this->load->view('/profile/edit-profile.php',$data);
    }
    function update(){
        $data = array();
        $userData = array();
        if($this->input->post('btn_update')){
            $userData = array(
                'dealer_fname' => strip_tags($this->input->post('fname')),
                'dealer_lname' => strip_tags($this->input->post('lname')),
                'dealer_sex' => strip_tags($this->input->post('sex')),
                'dealer_add' => strip_tags($this->input->post('adds')),
                'dealer_email' => strip_tags($this->input->post('mail')),
                'phone' => strip_tags($this->input->post('phone')),
                'dealer_remark'=>'1'

            );
            if($userData){
                $insert = $this->user_model->update($_SESSION['user_id'],$userData);
                if($insert){
                    $data = array(
                        'error_message' => 'Create Successfully'
                    );
                }else{
                    $data = array(
                        'error_message' => 'Some problems occured, please try again'
                    );
                }

               // $this->load->view('/profile/setting',$data);
            }

        }
        $this->setting();
    }
    function login(){
        $this->load->view('/login',$this->data);
    }
    function Do_login(){

            $user_login=array(
                'user_email'=>$this->input->post('user_email'),
                'user_password'=>md5($this->input->post('user_password'))
            );
            $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
            if($data)
            {
                $this->session->set_userdata('user_id',$data['dealer_id']);
                $this->session->set_userdata('user_email',$data['dealer_email']);
                // $this->session->set_userdata('user_name',$data['Profile']);
                //$log=array(
                //    'Admin_ID'=>$data['Admin_ID']
                //);
               // $this->admin_model->inserLog($log);
                redirect('/', 'refresh');

            }
            else{
                $err=array(
                    'error_msg'=>'Incorrect email or Password'
                );
                $this->load->view("/login",$err);
            }
        }
    function logout(){

            $this->session->sess_destroy();
            redirect('/', 'refresh');
        }

    function post(){
        if(isset($_GET['Id'])){
            $s_=$_GET['Id'];
            $sub=$this->category->list_cat_by_id($s_);
        }else{
            $sub="";
        }
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'c' => $result,
            'sub' => $sub,
        );
        $this->load->view('post.php',$data);
    }

    function post_cat($x){
        $sub_=$this->category->list_cat_by_id($x);
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $result=$this->category->list_category();
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'c' => $result,
            'sub' => $sub_,
        );
        $this->load->view('post_ads.php',$data);

    }
    function profile(){
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $store=$this->store->getStore($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'store'=>$store
        );
        //var_dump($data);
        // exit();
        $this->load->view('/profile',$data);
    }
    function ads(){
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $store=$this->store->getStore($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'store'=>$store
        );

        $this->load->view('/profile',$data);
    }
    function setting(){
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

               // $this->setting();

                //$this->load->view('/profile/setting', $data);
            }
        }
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $store=$this->store->getStore($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'store'=>$store
        );
        //var_dump($data);
        // exit();
        $this->load->view('/profile/setting',$data);
    }
    public function setting_update(){
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

                $this->setting();

                //$this->load->view('/profile/setting', $data);
            }
        }
    }

    function chat(){
        $result=$this->category->list_category();
        $pro=$this->product->index();
        $user_=$this->user_model->list_user($_SESSION['user_id']);
        $store=$this->store->getStore($_SESSION['user_id']);
        $data=array(
            'user' => $user_,
            'list' => $result,
            'pro' => $pro,
            'store'=>$store
        );
        $this->load->view('/profile/chat',$data);
    }

    public function security(){

        if($this->input->post('btn_security')){
            $data = array();
            $userData = array();
            $pwd=$this->input->post('pwd');
            $c_pwd=$this->input->post('c_pwd');
            if($pwd==$c_pwd){
                $userData = array(
                    'password' => md5($this->input->post('pwd')),
                );
                if($userData){
                    $insert = $this->user_model->security($_SESSION['user_id'],$userData);
                    if($insert){
                        $data = array(
                            'error_message' => 'Create Successfully'
                        );
                    }else{
                        $data = array(
                            'error_message' => 'Some problems occured, please try again'
                        );
                    }
                }
            }else{
                $data = array(
                    'security' => 'Password not match'
                );
            }
        }
        $this->setting();



    }





















}