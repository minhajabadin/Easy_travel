<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotelprofile extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getHotelProfileLinks();
        $this->Public_Vars['flag'] = __CLASS__;
        if($this->session->userdata('auth_hotel')){
            $this->Sesson_Vars = $this->session->userdata('auth_hotel');
            $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
        } else {
            redirect('prologin');
        }
    }

    public function index(){
        $this->Merged_Vars['january'] = $this->Hotel_profile_model->getBookingPercentageJan($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['february'] = $this->Hotel_profile_model->getBookingPercentageFab($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['march'] = $this->Hotel_profile_model->getBookingPercentageMar($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['april'] = $this->Hotel_profile_model->getBookingPercentageApp($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['may'] = $this->Hotel_profile_model->getBookingPercentageMay($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['june'] = $this->Hotel_profile_model->getBookingPercentageJune($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['july'] = $this->Hotel_profile_model->getBookingPercentageJuly($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['august'] = $this->Hotel_profile_model->getBookingPercentageAug($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['september'] = $this->Hotel_profile_model->getBookingPercentageSep($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['october'] = $this->Hotel_profile_model->getBookingPercentageOct($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['november'] = $this->Hotel_profile_model->getBookingPercentageNov($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['december'] = $this->Hotel_profile_model->getBookingPercentageDec($this->Merged_Vars['hotel_id']);
        
        
//        $this->Merged_Vars['january'] = $this->Hotel_profile_model->getBookingIncomeJan($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['february'] = $this->Hotel_profile_model->getBookingIncomeFab($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['march'] = $this->Hotel_profile_model->getBookingIncomeMar($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['april'] = $this->Hotel_profile_model->getBookingIncomeApp($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['may'] = $this->Hotel_profile_model->getBookingIncomeMay($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['june'] = $this->Hotel_profile_model->getBookingIncomeJune($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['july'] = $this->Hotel_profile_model->getBookingIncomeJuly($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['august'] = $this->Hotel_profile_model->getBookingIncomeAug($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['september'] = $this->Hotel_profile_model->getBookingIncomeSep($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['october'] = $this->Hotel_profile_model->getBookingIncomeOct($this->Merged_Vars['hotel_id']);
//        $this->Merged_Vars['november'] = $this->Hotel_profile_model->getBookingIncomeNov($this->Merged_Vars['hotel_id']);
        $this->Merged_Vars['inc_december'] = $this->Hotel_profile_model->getBookingIncomeDec($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    

    public function room_details(){
        if($this->input->post('trigger') == "submit"){
            $totalRoom = $this->input->post('total_room');
            $HotelRoomData = array( 'hotel_id' => $this->Merged_Vars['hotel_id'], 'room_name' => $this->input->post('room_name'),'room_capacity' => $this->input->post('room_capacity'), 'room_ac' => $this->input->post('ac'),
                'room_type'         => $this->input->post('room_type'),
                'bed_type'          => $this->input->post('bed_type'),
                'room_information'  => $this->input->post('room_info'),
                'room_option'       => $this->input->post('option'),
                'room_rate'         => $this->input->post('rate'),
                'total_room'        => $totalRoom,
                'available_rooms'   => $totalRoom
            );
            $roomID = $this->Hotel_profile_model->insertHotelRoomData($HotelRoomData);
                $files = $_FILES;
                $count = count($_FILES['userfile']['name']);
                for($i = 0; $i < $count; $i++) {
                    $_FILES['userfile']['name']         = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type']         = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name']     = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error']        = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size']         = $files['userfile']['size'][$i];    
                    $this->upload->initialize($this->set_room_image($roomID));
                    if($this->upload->do_upload() == False)
                    {
                        //error coming here
                        //$this->load->view('upload_form');
                        $this->session->set_flashdata('notification', '<div class="alert alert-success">fail.</div>');
                        redirect('hotelprofile/room_details');
                    }
                    else{
                        
//                        print_r($image_bank_data);
                        $Upload_data = $this->upload->data();
                        
                        
                        $roomGalleryData = array(
                            'hotel_id'       => $this->Merged_Vars['hotel_id'],
                            'room_id'       => $roomID,
                            'image_path'    => 'RoomGallery/' . $roomID . '/' . $Upload_data['file_name'],
                        );
                        if($this->Hotel_profile_model->insertRoomGalleryImage($roomGalleryData)){
                            $this->session->set_flashdata('notification', '<div class="alert alert-success">Registration successful.</div>');
                            
                        }
//                         print_r($image_bank_data);
                    }
                }
                
                
            if($roomID != FALSE){
                $id = $this->input->post('id');
                $i = 1;
                for($i ; $i <= $id; $i++){
                    $totalRoom = $this->input->post('total_room' . $i);
                    $HotelRoomData = array( 'hotel_id' => $this->Merged_Vars['hotel_id'], 'room_name' => $this->input->post('room_name' . $i),'room_capacity'=> $this->input->post('room_capacity' . $i), 'room_ac' => $this->input->post('ac' . $i),
                        'room_type'         => $this->input->post('room_type' . $i),
                        'bed_type'          => $this->input->post('bed_type' . $i),
                        'room_information'  => $this->input->post('room_info' . $i),
                        'room_option'       => $this->input->post('option' . $i),
                        'room_rate'         => $this->input->post('rate' . $i),
                        'total_room'        => $totalRoom,
                        'available_rooms'   => $totalRoom
                    );
                    $roomID1 = $this->Hotel_profile_model->insertHotelRoomData($HotelRoomData);
                    
                    $files = $_FILES;
                    $count = count($_FILES['userfile' . $i]['name']);
                    for($j = 0; $j < $count; $j++) {
                        $_FILES['userfile' . $i]['name']         = $files['userfile']['name'][$j];
                        $_FILES['userfile' . $i]['type']         = $files['userfile']['type'][$j];
                        $_FILES['userfile' . $i]['tmp_name']     = $files['userfile']['tmp_name'][$j];
                        $_FILES['userfile' . $i]['error']        = $files['userfile']['error'][$j];
                        $_FILES['userfile' . $i]['size']         = $files['userfile']['size'][$j];    
                        $this->upload->initialize($this->set_room_image1($roomID1));
                        if($this->upload->do_upload() == False)
                        {
                            //error coming here
                            //$this->load->view('upload_form');
                            $this->session->set_flashdata('notification', '<div class="alert alert-success">fail.</div>');
                            redirect('hotelprofile/room_details');
                        }
                        else{

    //                        print_r($image_bank_data);
                            $Upload_data = $this->upload->data();


                            $roomGalleryData = array(
                                'hotel_id'       => $this->Merged_Vars['hotel_id'],
                                'room_id'       => $roomID1,
                                'image_path'    => 'RoomGallery/' . $roomID1 . '/' . $Upload_data['file_name'],
                            );
                            if($this->Hotel_profile_model->insertRoomGalleryImage($roomGalleryData)){
                                $this->session->set_flashdata('notification', '<div class="alert alert-success">Registration successful.</div>');

                            }
    //                         print_r($image_bank_data);
                        }
                    }
                }
            }
            
            $this->session->set_flashdata('notification', '<div class="alert alert-success">Successfully Added.</div>');
            redirect('hotelprofile/room_details');
        } else {
            $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
        }
    }
    private function set_room_image($roomID) {

        // create an album if not already exist in uploads dir
        // wouldn't make more sence if this part is done if there are no errors and right before the upload ??
        if (!is_dir('RoomGallery'))
        {
            mkdir('./RoomGallery', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('RoomGallery/' . $roomID))
        {
            mkdir('./RoomGallery/' . $roomID, 0777, true);
            $dir_exist = false; // dir not exist
        }
        else{
            $dir_exist = true;
        }

        $upload_config                      = array();
        $upload_config['upload_path']       = './RoomGallery/' . $roomID;
        $upload_config['allowed_types']     = 'gif|jpg|png';
        $upload_config['overwrite']         = FALSE;
        return $upload_config;
    }
    
    
    
    
    
    private function set_room_image1($roomID1) {

        // create an album if not already exist in uploads dir
        // wouldn't make more sence if this part is done if there are no errors and right before the upload ??
        if (!is_dir('RoomGallery'))
        {
            mkdir('./RoomGallery', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('RoomGallery/' . $roomID1))
        {
            mkdir('./RoomGallery/' . $roomID1, 0777, true);
            $dir_exist = false; // dir not exist
        }
        else{
            $dir_exist = true;
        }

        $upload_config                      = array();
        $upload_config['upload_path']       = './RoomGallery/' . $roomID1;
        $upload_config['allowed_types']     = 'gif|jpg|png';
        $upload_config['overwrite']         = FALSE;
        return $upload_config;
    }
    
    
    
    
    
    public function roomlist(){
        $this->Merged_Vars['all_data'] = $this->Hotel_profile_model->getRoomViewData($this->input->post('roomViewData'));
        $this->Merged_Vars['all_images'] = $this->Hotel_profile_model->getAllImages($this->Merged_Vars['hotel_id'], $this->input->post('roomViewData'));
        $this->Merged_Vars['get_roomList'] = $this->Hotel_profile_model->getHotelRoomData($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    

    public function room_view() {
        $this->Merged_Vars['all_data'] = $this->Hotel_profile_model->getRoomViewData($this->input->post('roomViewData'));
        $this->Merged_Vars['all_images'] = $this->Hotel_profile_model->getAllImages($this->Merged_Vars['hotel_id'], $this->input->post('roomViewData'));
        $this->load->view( 'Hotelprofile/Dashboard/room_view', $this->Merged_Vars);
    }
    public function room_edit($rooms_id = FALSE) {
        if($this->input->post('trigger') == "submit"){
            $HotelRoomData = array( 
                'rooms_id'          => $this->input->post('rooms_id'),
                'hotel_id'          => $this->Merged_Vars['hotel_id'],
                'room_name'         => $this->input->post('room_name'),
                'room_capacity'     => $this->input->post('room_capacity'),
                'room_ac'           => $this->input->post('ac'),
                'room_type'         => $this->input->post('room_type'),
                'bed_type'          => $this->input->post('bed_type'),
                'room_information'  => $this->input->post('room_info'),
                'room_option'       => $this->input->post('option'),
                'room_rate'         => $this->input->post('rate'),
                'room_discount'     => $this->input->post('discount'),
                'total_room'        => $this->input->post('total_room')
               // 'room_image'        => $this->input->post('image')
            );
            $this->Hotel_profile_model->updateHotelRoomData($HotelRoomData);
            redirect('hotelprofile/roomlist');
        }else{
            $this->Merged_Vars['all_data'] = $this->Hotel_profile_model->getRoomEditData($rooms_id);
            $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
        }   
    }
    
    public function booking_list(){
        $this->Merged_Vars['allBookingData'] = $this->Hotel_profile_model->getHotelBookingData($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    public function booking_history(){
        $this->Merged_Vars['allBookingHistory'] = $this->Hotel_profile_model->getHotelBookingHistory($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function booking_request(){
        $this->Merged_Vars['allBookingRequestData'] = $this->Hotel_profile_model->getHotelBookingRequestData($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function booking_cancel_request(){
        $this->Merged_Vars['allBookingCancelRequestData'] = $this->Hotel_profile_model->getHotelBookingCancelRequestData($this->Merged_Vars['hotel_id']);
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    
    public function bookingAccept($booking_id, $room_id, $need_room){
        $data = array(
            'booking_id' => $booking_id,
            'bo_status' => 2
        );
        if($this->Hotel_profile_model->acceptBooking($data)){
            $roomData = array(
                'rooms_id'         => $room_id,
                'available_rooms'  => $need_room
            );
            $this->Home_model->updateRoomData($roomData);
        }
        redirect('Hotelprofile/booking_list');
    }
    
    public function bookingCancelAccept($booking_id){
        $this->Hotel_profile_model->cancelAcceptBooking($booking_id);
        redirect('Hotelprofile/booking_cancel_request');
    }


    public function apartment(){
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    public function login(){
        $this->profileloader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function expairRoom($bo_id){
            //echo date('Y-m-d');
            $this->Merged_Vars['bookingInfo'] = $this->Hotel_profile_model->getBookingDateData($bo_id);
           // echo $this->Merged_Vars['checkOutDate'];
             $statData = array(
                'rooms_id' => $this->Merged_Vars['bookingInfo']->bo_room_id,
                'available_rooms' => $this->Merged_Vars['bookingInfo']->booked_room
            );
            $this->Merged_Vars['ok'] =  $this->Hotel_profile_model->expaireCheckDate($statData,$bo_id);
            redirect('hotelprofile/booking_list');
        
        
        
    }
}
