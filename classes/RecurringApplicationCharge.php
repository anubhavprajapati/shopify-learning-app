<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 5:07 PM
 */

class RecurringApplicationCharge
{

    public function createRecurringApplicationCharge()
    {

        $arr = array(
            "recurring_application_charge" => [
                "name" => "Super Duper Plan",
                "price" => 50.0,
                "return_url" => "https://1d8febaa.ngrok.io/store-app/RecurringApplicationChargedata.php",
                "status"=> "accepted",
                "test" => true,
            ]

        );
        return $arr;

    }

    public function activateRecurringApplicationCharge($charge_id)
    {
        $arr = array(
            "recurring_application_charge" => [
                "id" => $charge_id,
                "name" => "Super Mega Plan",
                "price" => "50.00",
                "status" => "accepted",
              //  "return_url" => "http://www.google.com",
                "test" => null,
                "trial_days" => 0,
              //  "decorated_return_url" => "http://yourapp.com?charge_id=".$charge_id
            ]);
        return $arr;
    }
}