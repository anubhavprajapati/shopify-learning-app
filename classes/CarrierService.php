<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 6:32 PM
 */

class CarrierService
{

    public function createCarreieService()
    {
        $arr = array(
            "carrier_service" => [
                "name" => "Anubhav Carrier Service",
                "callback_url" => "https://e0edba91.ngrok.io/store-app/outputdata.php",
                "service_discovery" => true
            ]);
        return $arr;
    }

}