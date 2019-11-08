<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getFrontendLinks();
        $this->Sesson_Vars = array();
        $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
    }
    
      public function index(){ 
        if($this->input->post('trigger') == "login"){
            $LoginData = array(
                'user_email' => $this->input->post('email'),
                'user_password' => $this->input->post('password'),
            );
             $Result = $this->Login_model->login_user($LoginData);
             if($Result != FALSE){
                foreach($Result->result() as $SomeName){
                    $this->session->set_userdata('user_auth', array(
                        'user_id' => $SomeName->user_id,
                        'user_mobile' => $SomeName->user_mobile,
                        'user_address' => $SomeName->user_address,
                        'user_email' => $SomeName->user_email,
                        'f_name' => $SomeName->user_first_name,
                        'l_name' => $SomeName->user_last_name
                    ));
                }
                redirect('User/user_profile');
            }
             else {
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">Invalid username & Password. </div>');
                redirect('User/login');
            }
        }else{
            
            $this->load->view('User/login', $this->Merged_Vars);
        }     
    }
    
}
