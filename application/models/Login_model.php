<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login($signininfo){
        $this->db->select('*');
        $this->db->from('signup');
        $this->db->where('signup.email', $signininfo['email']);
        $this->db->where('signup.password', ($signininfo['password']));
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results;
        } else { return FALSE; }
    }
    
    public function login_admin($LoginData){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin.user_email', $LoginData['username']);
        $this->db->where('admin.user_password', md5($LoginData['password']));
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results;
        } else { return FALSE; }
    }
    
    public function login_hotel_profile($LoginData){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_email', $LoginData['username']);
        $this->db->where('hotel_registration.hotel_password', md5($LoginData['password']));
        $this->db->where('hotel_registration.hotel_status', $LoginData['hotel_status']);
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results;
        } else { return FALSE; }
    }
    
    
    public function login_user($LoginData){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.user_email', $LoginData['user_email']);
        $this->db->where('user.user_password', md5($LoginData['user_password']));
        $this->db->where('user.status', 1);
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results;
        } else { return FALSE; }
    }
    
    public function StatusChecking($StatusData){
        $this->db->select('*');
        $this->db->from('easy_hotel_registration');
        $this->db->where('easy_hotel_registration.hotel_status', $StatusData['hotel_status']);
        $Results = $this->db->get();
        if($Results->num_rows() >= 1){
            return TRUE;
        } else { return FALSE; }
    }  
    
    
}
?>
