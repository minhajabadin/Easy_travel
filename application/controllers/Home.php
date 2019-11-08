<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();


    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->getFrontendLinks();
        $this->Sesson_Vars = array();
        $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
    }


    public function index(){
  //      $this->Merged_Vars['autoLocation'] = getAutoLocations();
        $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    public function login(){
        $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    
  
    public function search(){
        if(isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Common_model->getAutoLocation();
        }
    }
    
    public function verification(){
        $email=$_GET['email'];  
        $this->db->set('status',1);
        $this->db->where('user_email',$email);
        $this->db->update('user');   
        $this->session->set_flashdata("success","Registation Successful");
        redirect('user/login');          
    }

    public function signup(){
        
         if($this->input->post('trigger') == "Signup"){
            $password = $this->input->post('user_password');
            $confirm_password = $this->input->post('user_conf_password');
            if($password == $confirm_password){
                $UserSignupData = array(   
                    'user_first_name' => $this->input->post('user_f_name'),
                    'user_last_name' => $this->input->post('user_l_name'),
                    'user_email' => $this->input->post('user_email'),
                    'user_password' => md5($password),
                    'user_mobile' => $this->input->post('user_mobile'),
                    'user_address' => $this->input->post('user_address'),
                    'user_country' => $this->input->post('user_country'),
                    'user_gender' => $this->input->post('user_gender'),
                    'entry_date' => date('Y-m-d')
                );
                
                 $this->Home_model->insertUserSignupData($UserSignupData);
                 $this->load->view('emailsent',$UserSignupData);
                 
                 $this->session->set_flashdata('notification', '<div class="alert alert-success">Check your email for Verification</div>');
                redirect('home/signup');
                 
            } else {
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">Password does not match.</div>');
                redirect('home/signup');
            } 
             
         }  else {
               $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
         }
    }
    
    public function add_hotel(){
        if($this->input->post('trigger') == "Submit"){
            $password = $this->input->post('hotel_pass');
            $confirm_password = $this->input->post('hotel_con_pass');
            if($password == $confirm_password){
                $HotelRegiData = array(
                    'hotel_name' => $this->input->post('hotel_name'),
                    'hotel_address' => $this->input->post('hotel_address'),
                    'hotel_email' => $this->input->post('hotel_email'),
                    'hotel_website' => $this->input->post('hotel_website'),
                    'hotel_password' => md5($password),
                    'hotel_city' => $this->input->post('hotel_city'),
                    'hotel_division' => $this->input->post('hotel_division'),
                    'hotel_country' => $this->input->post('hotel_country'),
                    'hotel_zip' => $this->input->post('hotel_post_code'),
                    'hotel_mobile' => $this->input->post('hotel_mobile'),
                    'hotel_telephone' => $this->input->post('hotel_telephone'),
                    'hotel_reg_no' => $this->input->post('hotel_reg_no'),
                    'checkin_out_time' => $this->input->post('checkin_out_time'),
                    'hotel_stars' => $this->input->post('stars'),
                    'hotel_status' => 1,
                    'entry_date' => date('Y-m-d')
                    
                );
                $hotelId = $this->Home_model->insertHotelRegiData($HotelRegiData);
               
                 $this->load->view('emailsent',$HotelRegiData);
                
                $files = $_FILES;
                $count = count($_FILES['userfile']['name']);
                for($i = 0; $i < $count; $i++) {
                    $_FILES['userfile']['name']         = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type']         = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name']     = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error']        = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size']         = $files['userfile']['size'][$i];    
                    $this->upload->initialize($this->set_upload_options($hotelId));
                    if($this->upload->do_upload() == False)
                    {
                        //error coming here
                        //$this->load->view('upload_form');
                        $this->session->set_flashdata('notification', '<div class="alert alert-success">failed.</div>');
                        redirect('home/add_hotel');
                    }
                    else{
                        
                        $lib_config  = array();
                        $lib_config['source_image']      = $this->upload->upload_path . $this->upload->file_name;
                        $lib_config['image_library']     = 'gd2';
                        $lib_config['maintain_ratio']    = TRUE;
                        $lib_config['width']             = 600;
                        $lib_config['height']            = 400;
                        $this->image_lib->initialize($lib_config);
                        $this->image_lib->resize();
                        
                        $Upload_data = $this->upload->data();
                        
                        
                        
                        $hotelGalleryData = array(
                            'hotel_id'       => $hotelId,
                            'hotel_image_path'         => $hotelId . '/' . $Upload_data['file_name'],
                        );
                        if($this->Home_model->insertHotelGalleryImage($hotelGalleryData)){
                            $this->session->set_flashdata('notification', '<div class="alert alert-success">Wait for Admin Approval.</div>');
                            
                        }
//                         print_r($image_bank_data);
                    }
                }
                redirect('home/add_hotel');
            }else{
                echo 'select atleast 1 image';
                
            }
        } else {
            $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
        }
        
    }
    
    
    private function set_upload_options($hotelId) {

        // create an album if not already exist in uploads dir
        // wouldn't make more sence if this part is done if there are no errors and right before the upload ??
        if (!is_dir('HotelGallery'))
        {
            mkdir('./HotelGallery', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('HotelGallery/' . $hotelId))
        {
            mkdir('./HotelGallery/' . $hotelId, 0777, true);
            $dir_exist = false; // dir not exist
        }
        else{
            $dir_exist = true;
        }

        $upload_config                      = array();
        $upload_config['upload_path']       = './HotelGallery/' . $hotelId;
        $upload_config['allowed_types']     = 'gif|jpg|png';
//        $upload_config['max_width']            = 600;
//        $upload_config['max_height']           = 400;
        $upload_config['overwrite']         = FALSE;
        return $upload_config;
    }
    
    
    
    public function hotel(){
        $Filter_data = array('main_search_d' => "");
        if($this->input->get('main_search') != ""){
            $Filter_data['main_search_d'] = $this->input->get('main_search');
        }
        $this->Merged_Vars['msvalue'] = $Filter_data['main_search_d'];
        $this->Merged_Vars['hotel_data'] = $this->Home_model->getAllHotelData($Filter_data);
        $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    
    public function search_hotel_available(){
        $this->Merged_Vars['date_from'] = $this->input->post('date_from');
        $this->Merged_Vars['date_to'] = $this->input->post('date_to');
        $this->Merged_Vars['room_type'] = $this->input->post('room_type');
        $this->Merged_Vars['neede_room'] = $this->input->post('neede_room');
        $this->Merged_Vars['adults'] = $this->input->post('adults');
        $this->Merged_Vars['children'] = $this->input->post('children');
        
        $Filter_data = array('main_search_d' => "", 'room_type_d' => "", 'need_room_d' => "");
        if($this->input->post('main_search') != ""){
            $Filter_data['main_search_d'] = $this->input->post('main_search');
        }
        if($this->input->post('room_type') != ""){
            $Filter_data['room_type_d'] = $this->Merged_Vars['room_type'];
        }
        if($this->input->post('neede_room') != ""){
            $Filter_data['need_room_d'] = $this->Merged_Vars['neede_room'];
        }
        $this->Merged_Vars['available_hotel_data'] = $this->Home_model->getSearchDataAvailableHotel($Filter_data);
        $this->load->view('home/getHotelAvailable', $this->Merged_Vars);
    }

    

    public function hotel_view($hotel_id, $date_from, $date_to, $room_type, $neede_room, $adults, $children){
        $this->Merged_Vars['date_from']     = $date_from;
        $this->Merged_Vars['date_to']       = $date_to;
        $this->Merged_Vars['room_type']     = $room_type;
        $this->Merged_Vars['neede_room']    = $neede_room;
        $this->Merged_Vars['adults']        = $adults;
        $this->Merged_Vars['children']      = $children;
        
     
        $this->Merged_Vars['hotel_name']    = $hotel_id;
        $this->Merged_Vars['hotel_info']    = $this->Common_model->getHotelSiteInfo($hotel_id);
        $this->Merged_Vars['room_data']     = $this->Home_model->getAllRoomData($hotel_id, $room_type);
        $this->Merged_Vars['gallery_image'] = $this->Home_model->getAllGellaryImage($hotel_id);
        
        $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    
    public function search_room_available(){
        $this->Merged_Vars['date_from'] = $this->input->post('date_from');
        $this->Merged_Vars['date_to'] = $this->input->post('date_to');
        $this->Merged_Vars['room_type'] = $this->input->post('room_type');
        $this->Merged_Vars['neede_room'] = $this->input->post('neede_room');
        $this->Merged_Vars['adults'] = $this->input->post('adults');
        $this->Merged_Vars['children'] = $this->input->post('children');
        
     
        $this->Merged_Vars['hotel_name']    = $this->input->post('h_id');
        $this->Merged_Vars['hotel_info']    = $this->Common_model->getHotelSiteInfo($this->input->post('h_id'));
        $this->Merged_Vars['room_data']     = $this->Home_model->getAllRoomData($this->input->post('h_id'), $this->input->post('room_type'));
        $this->Merged_Vars['gallery_image'] = $this->Home_model->getAllGellaryImage($this->input->post('h_id'));
        
        $this->load->view('Home/search_room_available', $this->Merged_Vars);
    }
    public function reserve($rooms_id, $hotel_id, $date_from, $date_to, $room_type, $neede_room, $adults, $children, $room_rate, $room_discount){
        if ($this->session->userdata('user_auth')) {
            $this->Sesson_Vars = $this->session->userdata('user_auth');
            $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);

            $this->Merged_Vars['rooms_id']     = $rooms_id;
            $this->Merged_Vars['hotel_id']     = $hotel_id;
            $this->Merged_Vars['date_from']     = $date_from;
            $this->Merged_Vars['date_to']       = $date_to;
            $this->Merged_Vars['room_type']     = $room_type;
            $this->Merged_Vars['neede_room']    = $neede_room;
            $this->Merged_Vars['adults']        = $adults;
            $this->Merged_Vars['children']      = $children;
            $this->Merged_Vars['room_rate']     = $room_rate;
            $this->Merged_Vars['room_discount']     = $room_discount;
            
            if($this->input->post('trigger2') == "booking"){
                $data = array(
                    'user_id'       => $this->Merged_Vars['user_id'],
                    'bo_hotel_id'   => $hotel_id,
                    'bo_room_id'    => $rooms_id,
                    'bo_checkin'    => $date_from,
                    'bo_checkout'   => $date_to,
                    'bo_room_type'  => $room_type,
                    'bo_city'       => $this->Merged_Vars['user_city'],
                    'bo_adult'      => $adults,
                    'bo_children'   => $children,
                    'bo_status'     => 1,
                );
               // print_r($data);
                $this->Home_model->insertBookingData($data);
            }else{
                $this->Merged_Vars['rooms_id']      = $rooms_id;
                $this->Merged_Vars['date_from']     = $date_from;
                $this->Merged_Vars['date_to']       = $date_to;
                $this->Merged_Vars['room_type']     = $room_type;
                $this->Merged_Vars['neede_room']    = $neede_room;
                $this->Merged_Vars['adults']        = $adults;
                $this->Merged_Vars['children']      = $children;
                $this->Merged_Vars['hotel_info']    = $this->Common_model->getHotelSiteInfo($hotel_id);
                $this->Merged_Vars['hotel_mobile']  = $this->Merged_Vars['hotel_info']->hotel_mobile;

                $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
            }
            
        } elseif($this->input->post('trigger') == "login"){
            $LoginData = array(
                'user_email' => $this->input->post('email'),
                'user_password' => $this->input->post('password'),
            );
            $Result = $this->Login_model->login_user($LoginData);
            if($Result != FALSE){
                foreach($Result->result() as $SomeName){
                    $this->session->set_userdata('user_auth', array(
                        'user_id' => $SomeName->user_id,
                        'user_mobile' => $SomeName->user_mobile,
                        'user_address' => $SomeName->user_address,
                        'user_email' => $SomeName->user_email,
                        'f_name' => $SomeName->user_first_name,
                        'l_name' => $SomeName->user_last_name
                        
                    ));
                }
                redirect('home/reserve/' . $rooms_id . '/' . $hotel_id . '/' . $date_from . '/' . $date_to . '/' . $room_type . '/' . $neede_room . '/' . $adults . '/' . $children);
            }else {
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">Invalid username & Password. </div>');
                redirect('home/reserve/' . $rooms_id . '/' . $hotel_id . '/' . $date_from . '/' . $date_to . '/' . $room_type . '/' . $neede_room . '/' . $adults . '/' . $children);
            }
        }else{
            $this->Merged_Vars['rooms_id']      = $rooms_id;
            $this->Merged_Vars['date_from']     = $date_from;
            $this->Merged_Vars['date_to']       = $date_to;
            $this->Merged_Vars['room_type']     = $room_type;
            $this->Merged_Vars['neede_room']    = $neede_room;
            $this->Merged_Vars['adults']        = $adults;
            $this->Merged_Vars['children']      = $children;
            $this->Merged_Vars['room_rate']     = $room_rate;
            $this->Merged_Vars['room_discount']     = $room_discount;
            $this->Merged_Vars['hotel_info']    = $this->Common_model->getHotelSiteInfo($hotel_id);
            $this->Merged_Vars['hotel_mobile']  = $this->Merged_Vars['hotel_info']->hotel_mobile;
            $this->viewloader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
        }    
    }
    
    public function bookingFinal(){
        if($this->input->post('trigger2') == "booking"){
            
            $var1 = $this->input->post('date_from');
            $dateFrom = implode("/", array_reverse(explode("-", $var1)));
            
            $var2 = $this->input->post('date_to');
            $dateTo = implode("/", array_reverse(explode("-", $var2)));
            
            $room_rate = $this->input->post('room_rate') - (($this->input->post('room_rate') * $this->input->post('room_discount'))/100);
            $total = $this->input->post('neede_room') * $room_rate;
            
            $data = array(
                'user_id'       => $this->input->post('user_id'),
                'bo_hotel_id'   => $this->input->post('hotel_id'),
                'bo_room_id'    => $this->input->post('rooms_id'),
                'bo_checkin'    => $dateFrom,
                'bo_checkout'   => $dateTo,
                'bo_room_type'  => $this->input->post('room_type'),
                'bo_city'       => $this->input->post('user_address'),
                'bo_adult'      => $this->input->post('adults'),
                'bo_children'   => $this->input->post('children'),
                'bo_mobile'     => $this->input->post('booking_phone_number'),
                'bo_email'      => $this->input->post('booking_email'),
                'bo_trx'        => $this->input->post('booking_trx'),
                'booked_room'   => $this->input->post('neede_room'),
                'bo_room_rate'  => $total,
                'bo_status'     => 1
            );
           // print_r($data);
            $this->Home_model->insertBookingData($data);
            redirect('user/user_profile');
        }
    }

    
    public function getHotelList(){
        $this->Merged_Vars['hotel_data'] = $this->Home_model->getHotelData($this->input->post('hoteldata'));
        $this->load->view('home/getHotelList', $this->Merged_Vars);
    }
    public function getHotelStarList(){
        $this->Merged_Vars['star_data'] = $this->Home_model->getHotelStarList($this->input->post('hotelStarData'),$this->input->post('msvalue'));
        $this->load->view('home/getHotelStar', $this->Merged_Vars);
    }
    
    public function contactus(){
         if($this->input->post('trigger') == "submit"){
            
                $ContactUs = array(
                    'cont_us_first_name' => $this->input->post('fst_name'),
                    'cont_us_last_name' => $this->input->post('lst_name'),
                    'cont_us_email' => $this->input->post('email'),
                    'cont_us_message' => $this->input->post('massage'),
                    
                    
                );
                $this->Home_model->insertContactUsData($ContactUs);
               
                redirect('home');   
        } 
       
    }
    
}
