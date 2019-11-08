<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProLogin extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getHotelProfileLinks();
        $this->Sesson_Vars = array();
        $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
    }


    public function index(){
        if($this->input->post('trigger') == "login"){
            $StatusData = array(
                'hotel_status' => 2
            );
            $Status = $this->Login_model->StatusChecking($StatusData);
            if($Status != FALSE){
                $LoginData = array(
                    'username' => $this->input->post('l_email'),
                    'password' => $this->input->post('l_password'),
                    'hotel_status' => 2
                );
                $Result = $this->Login_model->login_hotel_profile($LoginData);
                if($Result != FALSE){
                    foreach($Result->result() as $SomeName){
                        $this->session->set_userdata('auth_hotel', array(
                            'hotel_id' => $SomeName->hotel_id,
                            'user_mobile' => $SomeName->user_mobile,
                            'hotel_name' => $SomeName->hotel_name,
                            'hotel_email' => $SomeName->hotel_email,
                            'hotel_password' => $SomeName->hotel_password
                        ));
                    }
                    redirect('hotelprofile');
                } else {
                    $this->session->set_flashdata('notification', '<div class="alert alert-danger">Invalid username & Password. </div>');
                    redirect('ProLogin');
                }
            }else{
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">Your Hotel Is Not Approved Yet. </div>');
                    redirect('ProLogin');
            }
            
        } else {
            $this->load->view('hotelprofile/Login/index', $this->Merged_Vars);
        }
    }

    
}
