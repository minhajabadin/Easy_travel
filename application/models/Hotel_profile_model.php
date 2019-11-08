<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel_profile_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insertHotelProData($HotelsProData){
        if($this->db->insert('easy_hotels', $HotelsProData)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function insertHotelRoomData($HotelRoomData){
        if($this->db->insert('hotel_rooms', $HotelRoomData)){
            $roomID = $this->db->insert_id();
            return $roomID;
        }  else {
            return FALSE;
        }
    }
    
     public function insertRoomGalleryImage($roomGalleryData){
        if($this->db->insert('room_gallery', $roomGalleryData)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function updateHotelRoomData($HotelRoomData){
        $this->db->where('hotel_rooms.rooms_id', $HotelRoomData['rooms_id']);
        if($this->db->update('hotel_rooms', $HotelRoomData)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function getHotelRoomData($hoteId){
        $this->db->select('*');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.hotel_id', $hoteId);
        $Hotels = $this->db->get();
        if($Hotels->num_rows() > 0){
            return $Hotels;
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getRoomViewData($rooms_id){
        $this->db->select('*');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id', $rooms_id);
        $RoomDtl = $this->db->get();
        if($RoomDtl->num_rows() > 0){
            return $RoomDtl->row();
        }
        else{
            return FALSE;
            
        }
    }
    public function getAllImages($hotel_id, $rooms_id){
        $this->db->select('*');
        $this->db->from('room_gallery');
        $this->db->where('room_gallery.hotel_id', $hotel_id);
        $this->db->where('room_gallery.room_id', $rooms_id);
        $this->db->limit(1);
        $RoomDtl = $this->db->get()->row();
        return $RoomDtl;
        
    }
    public function getRoomEditData($rooms_id){
        $this->db->select('*');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id', $rooms_id);
        $RoomDtl = $this->db->get();
        if($RoomDtl->num_rows() > 0){
            return $RoomDtl->row();
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getHotelBookingData($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_status', 2);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    public function getHotelBookingHistory($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_status', 4);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getHotelBookingRequestData($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_status', 1);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    
    public function getHotelBookingCancelRequestData($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_status', 3);
        $Result = $this->db->get();
        if($Result->num_rows() > 0){
            return $Result;
        }
        else{
            return FALSE;
            
        }
    }
    
    
    public function acceptBooking($data){
        $this->db->where('booking.booking_id', $data['booking_id']);
        if($this->db->update('booking', $data)){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    public function cancelAcceptBooking($booking_id){
        $this->db->where('booking.booking_id', $booking_id);
        if($this->db->delete('booking')){
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
    
    public function getBookingPercentageJan($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-01-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-01-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageFab($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-02-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-02-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageMar($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-03-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-03-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageApp($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-04-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-04-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageMay($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-05-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-05-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageJune($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-06-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-06-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageJuly($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-07-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-07-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageAug($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-08-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-08-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageSep($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-09-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-09-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageOct($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-10-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-10-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageNov($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-11-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-11-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    public function getBookingPercentageDec($hotel_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_checkin >=', date('Y-12-01'));
        $this->db->where('booking.bo_checkin <=', date('Y-12-t'));
        $Result = $this->db->get();
        return $Result->num_rows();
    }
    
    public function getBookingIncomeDec($hotel_id){
        $this->db->select_sum('bo_room_rate');
        $this->db->from('booking');
        $this->db->where('booking.bo_hotel_id', $hotel_id);
        $this->db->where('booking.bo_status', 4);
        $this->db->where('booking.bo_checkout >=', date('Y-12-01'));
        $this->db->where('booking.bo_checkout <=', date('Y-12-t'));
        $Result = $this->db->get()->row();
        return $Result->bo_room_rate;
    }
    
    
    
   
    public function getBookingDateData($bo_id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking.booking_id' , $bo_id);
        $Result = $this->db->get()->row();
        return $Result;
    }
    
    public function expaireCheckDate($roomData,$bo_id){
        $this->db->select('hotel_rooms.available_rooms');
        $this->db->from('hotel_rooms');
        $this->db->where('hotel_rooms.rooms_id', $roomData['rooms_id']);
        $AvailableRoom = $this->db->get();
        if($AvailableRoom->num_rows() == 1){
            $AvailableRoom = $AvailableRoom->row();
            $New_AvailableRoom = array('hotel_rooms.available_rooms' => $AvailableRoom->available_rooms + $roomData['available_rooms']);
            $this->db->where('hotel_rooms.rooms_id', $roomData['rooms_id']);
            $data = array('bo_status' => 4);
            if($this->db->update('hotel_rooms', $New_AvailableRoom)){
                $this->db->where('booking.booking_id', $bo_id);
                if($this->db->update('booking', $data)){
                    return TRUE;
                }
            } else {
                return FALSE;
            }
        } else{
            return FALSE;
        }
    }
    
            
}
?>

