<?php 

namespace App\Helpers;

function adjustAddress($address){
    trim($address," ");
    $address = str_replace(" ","+", $address);
    $address = str_replace(",","%2C", $address);
    return $address;
}