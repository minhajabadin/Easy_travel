<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutPro extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->Merged_Vars['flag'] = __CLASS__;
        $this->session->unset_userdata('auth_hotel');
        session_destroy('HotelProfile');
        redirect(base_url() . 'ProLogin');
    }
}
