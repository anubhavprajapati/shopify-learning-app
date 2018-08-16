<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 2:15 PM
 */



class ApplicationCharge
{

    public function createApplicationCharge()
    {
        $arr = array(
            "application_charge" => [
                "name" => "ONE TIME PURCHASE",
                "price" => 500,
                "return_url" => "https://1d8febaa.ngrok.io/store-app/activechargedata.php",
                "status"=> "accepted",
                "test" => true,
            ]
        );
        return $arr;
    }

    public function activateCharge($charge_id)
    {
        $arr = array(
            "application_charge" => [
                "id" => $charge_id,
                "name" => "ONE TIME PURCHASE",
        //        "api_client_id" => 2513211,
                "price" => "500.00",
                "status" => "accepted",
                "return_url" => "https://anubhav-test-1.myshopify.com/admin/apps",
                "test" => true,
              //  "charge_type" => null,
                "decorated_return_url" => "http://google.com?charge_id=".$charge_id
            ]

        );

        return $arr;

    }
}
/*
foreach ()
header("location: ");*/