<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 10:50 AM
 */

class Transaction
{

    public function createTransaction()
    {
        $arr = array(
            "transaction" => [
                "amount" => "50.00",
                "kind" => "capture",
                "order_id" => 566979100761
            ]
        );
        return $arr;
    }


}