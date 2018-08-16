<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 1:17 PM
 */


class Order
{

    public function createOrder()
    {

        $arr = array(
            "order" => [
                "line_items" => [
                    [
                    "variant_id" => 12833509998681,
                    "quantity" => 1
                    ],
                ],
            ]
        );

        return $arr;
    }

    public function closeOrder()
    {

        $arr = array();
    }

    public function openOrder()
    {

        $arr = array();
    }

    public function cancelOrder()
    {

        $arr = array(
            "amount" => 100,
            "note" => "Broke in shipping",
        );
    }

    public function updateOrder()
    {
        $arr = array(

            "order" => [
                "id" =>64,
                    "metafields"=> [
                        [
                        "key" => "new",
                        "value" => "newvalue",
                        "value_type" => "string",
                        "namespace" => "global"
                    ],
                ],
            ]

        );
    }

    public function deleteOrder(){

    }


}