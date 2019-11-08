<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();

    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getBackendLinks();
        $this->Public_Vars['flag'] = __CLASS__;
        if ($this->session->userdata('auth')) {
            $this->Sesson_Vars = $this->session->userdata('auth');
            $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
        } else {
            redirect('login');
        }
    }

    public function index() {
        $this->Merged_Vars['january'] = $this->Admin_model->getBookingPercentageJan();
        $this->Merged_Vars['february'] = $this->Admin_model->getBookingPercentageFab();
        $this->Merged_Vars['march'] = $this->Admin_model->getBookingPercentageMar();
        $this->Merged_Vars['april'] = $this->Admin_model->getBookingPercentageApp();
        $this->Merged_Vars['may'] = $this->Admin_model->getBookingPercentageMay();
        $this->Merged_Vars['june'] = $this->Admin_model->getBookingPercentageJune();
        $this->Merged_Vars['july'] = $this->Admin_model->getBookingPercentageJuly();
        $this->Merged_Vars['august'] = $this->Admin_model->getBookingPercentageAug();
        $this->Merged_Vars['september'] = $this->Admin_model->getBookingPercentageSep();
        $this->Merged_Vars['october'] = $this->Admin_model->getBookingPercentageOct();
        $this->Merged_Vars['november'] = $this->Admin_model->getBookingPercentageNov();
        $this->Merged_Vars['december'] = $this->Admin_model->getBookingPercentageDec();
        
        $this->Merged_Vars['ujanuary'] = $this->Admin_model->getUserPercentageJan();
        $this->Merged_Vars['ufebruary'] = $this->Admin_model->getUserPercentageFab();
        $this->Merged_Vars['umarch'] = $this->Admin_model->getUserPercentageMar();
        $this->Merged_Vars['uapril'] = $this->Admin_model->getUserPercentageApp();
        $this->Merged_Vars['umay'] = $this->Admin_model->getUserPercentageMay();
        $this->Merged_Vars['ujune'] = $this->Admin_model->getUserPercentageJune();
        $this->Merged_Vars['ujuly'] = $this->Admin_model->getUserPercentageJuly();
        $this->Merged_Vars['uaugust'] = $this->Admin_model->getUserPercentageAug();
        $this->Merged_Vars['useptember'] = $this->Admin_model->getUserPercentageSep();
        $this->Merged_Vars['uoctober'] = $this->Admin_model->getUserPercentageOct();
        $this->Merged_Vars['unovember'] = $this->Admin_model->getUserPercentageNov();
        $this->Merged_Vars['udecember'] = $this->Admin_model->getUserPercentageDec();
        
        $this->Merged_Vars['total_user'] = $this->Admin_model->getTotalUser();
        $this->Merged_Vars['total_hotels'] = $this->Admin_model->getTotalHotels();
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }

    public function hotel_approval() {
        $this->Merged_Vars['get_hotelList'] = $this->Admin_model->getHotelData();
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function hotel_list() {
        $this->Merged_Vars['get_approvedhotelList'] = $this->Admin_model->getHotelApprovedData();
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    public function message() {
        $this->Merged_Vars['get_contactus'] = $this->Admin_model->getContactUsData();
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    
    public function hotel_details($hotel_id) {
        $this->Merged_Vars['all_data'] = $this->Admin_model->getDetailsHotelData($hotel_id);
        $this->Merged_Vars['all_images'] = $this->Admin_model->getAllSliderImages($hotel_id);
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }
    public function details_approvel($hotel_id) {
        $this->Merged_Vars['all_data'] = $this->Admin_model->getDetailsHotelData($hotel_id);
        $this->Merged_Vars['all_images'] = $this->Admin_model->getAllSliderImages($hotel_id);
        $this->adminLoader('Dashboard', __FUNCTION__, $this->Merged_Vars);
    }

    public function hotel_acceptor($hotel_id) {
        $data = array(
            'hotel_id' => $hotel_id,
            'hotel_status' => 2
        );
        $result = $this->Admin_model->hotel_acceptor($data);
        if ($result == true) {
            redirect('admin/hotel_approval');
        } else {
            echo 'Not approved';
        }
    }

    public function hotel_decline($hotel_id) {
        $data = array(
            'hotel_id' => $hotel_id,
            'hotel_status' => 0
        );
        $result = $this->Admin_model->hotel_acceptor($data);
        if ($result == true) {
            redirect('admin/hotel_approval');
        } else {
            echo 'Not approved';
        }
    }

}
