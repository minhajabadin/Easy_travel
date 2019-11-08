<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->Merged_Vars['flag'] = __CLASS__;
        $this->session->unset_userdata('auth');
        session_destroy('Admin');
        redirect(base_url());
    }
}
