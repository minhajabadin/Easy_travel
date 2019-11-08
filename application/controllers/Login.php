<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getBackendLinks();
        $this->Sesson_Vars = array();
        $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
    }


    public function index(){
        if($this->input->post('trigger') == "login"){
            $LoginData = array(
                'username' => $this->input->post('l_email'),
                'password' => $this->input->post('l_password'),
            );
            $Result = $this->Login_model->login_admin($LoginData);
            if($Result != FALSE){
                foreach($Result->result() as $SomeName){
                    $this->session->set_userdata('auth', array(
                        'admin_id' => $SomeName->admin_id,
                        'name' => $SomeName->user_name,
                        'name' => $SomeName->user_email,
                        'password' => $SomeName->user_password
                    ));
                }
                redirect('admin');
            } else {
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">Invalid username & Password. </div>');
                redirect('login');
            }
        } else {
            $this->load->view('Admin/Login/index', $this->Merged_Vars);
        }
    } 
}
