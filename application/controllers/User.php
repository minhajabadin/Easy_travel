<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();

    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getFrontendLinks();
        $this->Public_Vars['flag'] = __CLASS__;
        if ($this->session->userdata('user_auth')) {
            $this->Sesson_Vars = $this->session->userdata('user_auth');
            $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
        } else {
            redirect('userlogin');
        }
    }

    public function index() {
        $this->viewloader('User', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function user_profile() {
        $this->Merged_Vars['cancel_disable']    = date('Y-m-d');
        $this->Merged_Vars['user_data']         = $this->Home_model->getAllUserdata($this->Merged_Vars['user_id']);
        $this->Merged_Vars['pro_pic']           = $this->Home_model->getAllUserPicdata($this->Merged_Vars['user_id']);
        $this->Merged_Vars['allBookingData']    = $this->Home_model->getUserBookingData($this->Merged_Vars['user_id']);
        $this->viewloader('User', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function bookingCancel($bookingId){
        $this->Merged_Vars['booking_data'] = $this->Home_model->getBookingData($bookingId);
        $this->Merged_Vars['rooms_data'] = $this->Home_model->getRoomsData($this->Merged_Vars['booking_data']->bo_room_id);
        $Data = array(
            'rooms_id' => $this->Merged_Vars['booking_data']->bo_room_id,
            'available_rooms' => $this->Merged_Vars['rooms_data']->available_rooms + $this->Merged_Vars['booking_data']->booked_room
        );
        if($this->Home_model->cancelBooking($Data)){
            $Data = array(
                'booking_id' => $bookingId,
                'bo_status' => 3
            );
            $this->Home_model->deleteBooking($Data);
        }
        redirect('user/user_profile');
    }

        public function login() {
        $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    
    
    public function UpLoadUserProPic(){
        if($this->input->post('trigger') == "upload"){
            $filename = $_FILES["file"]["name"];
            $allowed_file_types = array('.jpg','.png');	

            if ($allowed_file_types)
            {	
                    // Rename file
                    move_uploaded_file($_FILES["file"]["tmp_name"], "Propic/" . $filename);
                         //   echo "File uploaded successfully.";	
                            
                            $file_data = array(
                                'user_id' => $this->input->post('user_id'),
                                'propi_path' => 'Propic/' . $filename
                            );
                            $this->Home_model->insertPropic($file_data);
                           redirect('User/user_profile');
            }
            else
            {   
                    // file type error
                    echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
            }
            
        }

    }


}
