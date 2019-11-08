<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getHotelimage($hotel_id){
        $this->db->select('hotel_image_path');
        $this->db->from('hotel_gallery');
        $this->db->where('hotel_gallery.hotel_id', $hotel_id);
        $this->db->limit(1);
        $this->db->order_by('hotel_gallery.hotel_id', "desc");
        $results = $this->db->get()->row();
        return $results->hotel_image_path;
    }
    
    public function getRoomImagePath($rooms_id){
        $this->db->select('image_path');
        $this->db->from('room_gallery');
        $this->db->where('room_gallery.room_id', $rooms_id);
        $this->db->limit(1);
        $this->db->order_by('room_gallery.room_id', "desc");
        $results = $this->db->get()->row();
        return $results->image_path;
    }
    
    public function getHotelname($hotel_id){
        $this->db->select('hotel_name');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_id', $hotel_id);
        $results = $this->db->get()->row();
        return $results->hotel_name;
    }
      public function getHotelSiteInfo($hotel_id){
        $this->db->select('*');
        $this->db->from('hotel_registration');
        $this->db->where('hotel_registration.hotel_id', $hotel_id);
        $results = $this->db->get()->row();
        return $results;
    }
    
    public function getMinimumPrice($hotel_id){
        $this->db->select_min('room_rate');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.hotel_id', $hotel_id);
        $this->db->where('hotel_rooms.room_type', 1);
        $results = $this->db->get()->row();
        return $results->room_rate;
    }
    
    public function getUserName($user_id){
        $this->db->select('user_first_name');
        $this->db->from('user');
        $this->db->where('user.user_id', $user_id);
        $results = $this->db->get()->row();
        return $results->user_first_name;
    }
          
    public function getAutoLocation(){        
        $this->db->select('*');
        $this->db->from('hotel_registration');
      //  $this->db->group_by('hotel_registration.hotel_city');
        $this->db->where('hotel_registration.hotel_status',2);
        $Results = $this->db->get();
        if($Results->num_rows() > 0){
            return $Results;
        } else { return FALSE; }
    }
    
    public function getTotalRooms($hotel_id){
        $this->db->select_sum('total_room');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.hotel_id' , $hotel_id);
        $Result = $this->db->get()->row();
        return $Result->total_room;
    }
    
    public function getAvailableRooms($hotel_id){
        $this->db->select_sum('available_rooms');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.hotel_id' , $hotel_id);
        $Result = $this->db->get()->row();
        return $Result->available_rooms;
    }
    
    public function getBookedRooms($hotel_id){
        $this->db->select_sum('booked_room');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id' , $hotel_id);
        $this->db->where('booking.bo_status' , 2);
        $Result = $this->db->get()->row();
        return $Result->booked_room;
    }
    
    public function getRoomName($room_id){
        $this->db->select('room_name');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id' , $room_id);
        $Result = $this->db->get()->row();
        return $Result->room_name;
    }
}
?>
