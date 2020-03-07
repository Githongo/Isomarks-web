<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
class SMS_model extends CI_Model{
    function sendsms($single_contact, $contact_file, $message){
        // Set your app credentials
            $username   = "tetrasms";
            $apiKey     = "fc4189a9408886c4ea089277c3189b53db65baddd8050d6ea15d55be3985d186";

            // Initialize the SDK
            $AT         = new AfricasTalking($username, $apiKey);

            // Get the SMS service
            $sms        = $AT->sms();

            // Set the numbers you want to send to in international format
            $phone = substr($single_contact, 1);
            $recipients = "+254" . $phone;

            // Set your message
            //$message    = "Hey There, this is our new contact. Talk to you soon :)";

            // Set your shortCode or senderId
            $from       = "TetraConcpt";


            if(is_file($contact_file)){
                echo "File read";
            }else{
                try {
                    // Thats it, hit send and we'll take care of the rest
                    $result = $sms->send([
                        'to'      => $recipients,
                        'message' => $message,
                        'from'    => $from
                    ]);
    
                    print_r($result);
                } catch (Exception $e) {
                    echo "Error: ".$e->getMessage();
                }
            }
           
    }
    
}



?>