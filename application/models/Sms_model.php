<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
class SMS_model extends CI_Model{
    function sendsms($single_contact, $message){
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


            // Set your shortCode or senderId
            $from       = "TetraConcpt";


           
                try {
                    // Thats it, hit send and we'll take care of the rest
                    $result = $sms->send([
                        'to'      => $recipients,
                        'message' => $message,
                        'from'    => $from
                    ]);
    
                    print_r($result);
                    echo json_encode($result);
                } catch (Exception $e) {
                    echo "Error: ".$e->getMessage();
                }
            
           
    }

    function loadupload($fileName, $Message){
        $filename =  base_url()."uploads/".$fileName;

        

        $the_big_array = []; 

        // Open the file for reading
        if (($h = fopen("{$filename}", "r")) !== FALSE) 
        {
        // Each line in the file is converted into an individual array that we call $data
        // The items of the array are comma separated
        while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
        {
            // Each individual array is being pushed into the nested array
            $the_big_array[] = $data;		
        }

        // Close the file
        fclose($h);
        }

        // Display the code in a readable format
        echo "<pre>";
        var_dump($the_big_array);
        echo "</pre>";


        foreach($the_big_array as $r){
            $this->sms_model->sendsms($r[1], $Message);
        }


        }

            
    }



?>