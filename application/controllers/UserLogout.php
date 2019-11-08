<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogout extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->Merged_Vars['flag'] = __CLASS__;
        $this->session->unset_userdata('user_auth');
        session_destroy('User');
        redirect(base_url() . 'home');
    }
}
