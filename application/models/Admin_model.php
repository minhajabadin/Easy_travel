<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getHotelData(){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 1);
        $Hotels = $this->db->get();
        if($Hotels->num_rows() > 0){
            return $Hotels;
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getHotelApprovedData(){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $Hotels = $this->db->get();
        if($Hotels->num_rows() > 0){
            return $Hotels;
        }
        else{
            return FALSE;
            
        }
    }
    public function getContactUsData(){
        $this->db->select('*');
        $this->db->from('contact_us');
        $Message = $this->db->get();
        if($Message->num_rows() > 0){
            return $Message;
        }
        else{
            return FALSE;
            
        }
    }
    
    
    public function getDetailsHotelData($hotel_id){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_id', $hotel_id);
        $Hotels = $this->db->get();
        if($Hotels->num_rows() > 0){
            return $Hotels->row();
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getAllSliderImages($hotel_id){
        $this->db->select('*');
        $this->db->from('hotel_gallery');
        $this->db->where('hotel_gallery.hotel_id', $hotel_id);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getTotalUser(){
        $this->db->select('*');
        $this->db->from('user');
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result->num_rows();
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getTotalHotels(){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result->num_rows();
        }
        else{
            return FALSE;
            
        }
    }
    public function hotel_acceptor($data){
        $this->db->where('hotel_registration.hotel_id', $data['hotel_id']);
        if($this->db->update('hotel_registration', $data)){
            return TRUE;
        }  else {
            return FALSE;
        };
    }
    
    
    
    
    
    
    
    
    
    
    
    public function getBookingPercentageJan(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-01-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-01-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageFab(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-02-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-02-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageMar(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-03-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-03-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageApp(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-04-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-04-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageMay(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-05-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-05-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageJune(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-06-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-06-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageJuly(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-07-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-07-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageAug(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-08-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-08-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageSep(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-09-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-09-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageOct(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-10-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-10-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageNov(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-11-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-11-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageDec(){
        $this->db->select('hotel_id');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->where('hotel_registration.entry_date >=', date('Y-12-01'));
        $this->db->where('hotel_registration.entry_date <=', date('Y-12-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    
    
    
    
    
    
    
    
    
    
    public function getUserPercentageJan(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-01-01'));
        $this->db->where('user.entry_date <=', date('Y-01-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageFab(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-02-01'));
        $this->db->where('user.entry_date <=', date('Y-02-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageMar(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-03-01'));
        $this->db->where('user.entry_date <=', date('Y-03-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageApp(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-04-01'));
        $this->db->where('user.entry_date <=', date('Y-04-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageMay(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-05-01'));
        $this->db->where('user.entry_date <=', date('Y-05-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageJune(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-06-01'));
        $this->db->where('user.entry_date <=', date('Y-06-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageJuly(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-07-01'));
        $this->db->where('user.entry_date <=', date('Y-07-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageAug(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-08-01'));
        $this->db->where('user.entry_date <=', date('Y-08-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageSep(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-09-01'));
        $this->db->where('user.entry_date <=', date('Y-09-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageOct(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-10-01'));
        $this->db->where('user.entry_date <=', date('Y-10-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageNov(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-11-01'));
        $this->db->where('user.entry_date <=', date('Y-11-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getUserPercentageDec(){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('user.entry_date >=', date('Y-12-01'));
        $this->db->where('user.entry_date <=', date('Y-12-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
            
}
?>
