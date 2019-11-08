<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!function_exists('getCustomer')){
    function getHotelimage($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getHotelimage($hotel_id);
    }
}

if(!function_exists('getHotelname')){
    function getHotelname($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getHotelname($hotel_id);
    }
}

if(!function_exists('getMinimumPrice')){
    function getMinimumPrice($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getMinimumPrice($hotel_id);
    }
}

if(!function_exists('getRoomImagePath')){
    function getRoomImagePath($rooms_id){
        $CI =& get_instance();
        return $CI->Common_model->getRoomImagePath($rooms_id);
    }
}

if(!function_exists('getUserName')){
    function getUserName($user_id){
        $CI =& get_instance();
        return $CI->Common_model->getUserName($user_id);
    }
}

if(!function_exists('getTotalRooms')){
    function getTotalRooms($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getTotalRooms($hotel_id);
    }
}

if(!function_exists('getBookedRooms')){
    function getBookedRooms($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getBookedRooms($hotel_id);
    }
}

if(!function_exists('getAvailableRooms')){
    function getAvailableRooms($hotel_id){
        $CI =& get_instance();
        return $CI->Common_model->getAvailableRooms($hotel_id);
    }
}

if(!function_exists('getRoomName')){
    function getRoomName($room_id){
        $CI =& get_instance();
        return $CI->Common_model->getRoomName($room_id);
    }
}



//if(!function_exists('getAutoLocations')){
//    function getAutoLocations(){
//        $CI =& get_instance();
//        $pc = $CI->Common_model->getAutoLocation();
//        $string = "";
//        if($pc->num_rows() > 0){
//            foreach($pc->result() as $codes){
//                $string .= '{
//                    label: "'. $codes->hotel_address . ', ' . $codes->hotel_city .'"
//                    },';  
//            }
//            return $string;
//        } else {
//            return "";
//        }
//    }
//}