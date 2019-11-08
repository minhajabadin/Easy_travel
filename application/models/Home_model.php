<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function insertHotelRegiData($HotelRegiData){
        if($this->db->insert('hotel_registration', $HotelRegiData)){
            $hotelId = $this->db->insert_id();
            return $hotelId;
        }  else {
            return FALSE;
        }
    }
    
    public function insertHotelGalleryImage($hotelGalleryData){
        if($this->db->insert('hotel_gallery', $hotelGalleryData)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    
    
    public function insertContactUsData($ContactUs){
        if($this->db->insert('contact_us', $ContactUs)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    
    
    
    
    
    
    public function insertPropic($file_data){
        if($this->db->insert('user_pro_pic', $file_data)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    
    
    
    
    
    
    public function insertBookingData($data){
        if($this->db->insert('booking', $data)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function updateRoomData($roomData){
        $this->db->select('hotel_rooms.available_rooms');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id', $roomData['rooms_id']);
        $AvailableRoom = $this->db->get();
        if($AvailableRoom->num_rows() == 1){
            $AvailableRoom = $AvailableRoom->row();
            $New_AvailableRoom = array('hotel_rooms.available_rooms' => $AvailableRoom->available_rooms - $roomData['available_rooms']);
            $this->db->where('hotel_rooms.rooms_id', $roomData['rooms_id']);
            if($this->db->update('hotel_rooms', $New_AvailableRoom)){
                return TRUE;
            } else {
                return FALSE;
            }
        } else{
            return FALSE;
        }
    }
    
    
    public function getBookingData($bookingId){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.booking_id', $bookingId);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result->row();
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getRoomsData($roomsId){
        $this->db->select('*');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id', $roomsId);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result->row();
        }
        else{
            return FALSE;
            
        }
    }
    
    
    public function cancelBooking($Data){
        $this->db->where('hotel_rooms.rooms_id', $Data['rooms_id']);
        if($this->db->update('hotel_rooms', $Data)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function deleteBooking($Data){
        $this->db->where('booking.booking_id', $Data['booking_id']);
        if($this->db->update('booking', $Data)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function userTypeLogin($LoginData){
        $this->db->select('*');
        $this->db->from('hotel_contact');
        $this->db->where('hotel_contact.hotel_cont_email', $LoginData['username']);
        $this->db->where('hotel_contact.hotel_password', md5($LoginData['password']));
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results;
        } else { return FALSE; }
    }
    
    
    public function insertUserSignupData($UserSignupData){
        if($this->db->insert('user', $UserSignupData)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function getAllUserdata($userId){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.user_id', $userId);
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results->row();
        } else { return FALSE; }
    }
    
    public function getAllUserPicdata($userId){
        $this->db->select('*');
        $this->db->from('user_pro_pic');
        $this->db->where('user_pro_pic.user_id', $userId);
        $this->db->limit(1);
        $this->db->order_by('user_pro_pic.pro_pic_id', 'desc');
        $Results = $this->db->get();
        if($Results->num_rows() == 1){
            return $Results->row();
        } else { return FALSE; }
    }

    public function getAllHotelData($Filter_data){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_status', 2);
        if($Filter_data['main_search_d'] != ""){
            if($this->db->where('hotel_registration.hotel_status', 2)){
                $this->db->like('hotel_registration.hotel_city', $Filter_data['main_search_d']);
            } elseif($this->db->where('hotel_registration.hotel_status', 2)) {
                $this->db->or_like('hotel_registration.hotel_name', $Filter_data['main_search_d']);
            }elseif ($this->db->where('hotel_registration.hotel_status', 2)) {
                $this->db->or_like('hotel_registration.hotel_address', $Filter_data['main_search_d']);
            }elseif ($this->db->where('hotel_registration.hotel_status', 2)) {
                $this->db->or_like('hotel_registration.hotel_division', $Filter_data['main_search_d']);
            }elseif ($Filter_data === FALSE) {

            }
        }
        
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    public function getHotelData($HotelData){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        if(!empty($HotelData)){
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->like('hotel_registration.hotel_city', $HotelData);
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->or_like('hotel_registration.hotel_name', $HotelData);
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->or_like('hotel_registration.hotel_address', $HotelData);
        $this->db->where('hotel_registration.hotel_status', 2);
        $this->db->or_like('hotel_registration.hotel_division', $HotelData);
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
        }
    }
    public function getHotelStarList($hotelStarData,$msvalue){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_stars', $hotelStarData);
        $this->db->where('hotel_registration.hotel_division', $msvalue);
        $this->db->where('hotel_registration.hotel_status', 2);
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    public function getAllRoomData($hotel_id, $room_type){
        $this->db->select('*');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.hotel_id', $hotel_id);
        $this->db->where('hotel_rooms.room_type', $room_type);
        $this->db->where('hotel_rooms.available_rooms >', 0);
        $this->db->order_by('hotel_rooms.room_rate', "ASC");
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    public function getAllGellaryImage($hotel_id){
        $this->db->select('*');
        $this->db->from('hotel_gallery');
        $this->db->where('hotel_gallery.hotel_id', $hotel_id);
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    public function getSearchDataAvailableHotel($Filter_data){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->join('hotel_rooms', 'hotel_rooms.hotel_id = hotel_registration.hotel_id', 'left');
        $this->db->where('hotel_registration.hotel_status', 2);
        if($Filter_data['main_search_d'] != ""){
            $this->db->like('hotel_registration.hotel_city', $Filter_data['main_search_d']);
//            $this->db->or_like('hotel_registration.hotel_name', $Filter_data['main_search_d']);
//            $this->db->or_like('hotel_registration.hotel_address', $Filter_data['main_search_d']);
//            $this->db->or_like('hotel_registration.hotel_division', $Filter_data['main_search_d']);
        }
        if($Filter_data['room_type_d'] != ""){
            $this->db->where('hotel_rooms.room_type', $Filter_data['room_type_d']);
        }
        $this->db->where('hotel_rooms.available_rooms >', 0);
        $this->db->group_by('hotel_registration.hotel_id');
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    
    public function getUserBookingData($user_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.user_id', $user_id);
        $this->db->where('booking.bo_status', 2);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    
            
} ?>
