<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 9:51 AM
 */

class Customer
{
    /**Create a new customer record
     * we can add metafields
     * @return array
     */
    public function createCustomer()
    {
        $arr = array(
            "customer" => [
                "first_name" => "Shubham",
                "last_name" => "Singh",
                "email" => "shivamsingh@cedcoss.com",
                "verified_email" => true,
                "addresses" => [
                    [
                        "address1" => "123 indranagar",
                        "city" => "lucknow",
//                     /   "province" => "ON",
                        "zip" => "226004",
                        "country" => "INDIA"
                    ]
                ]
            ]
        );
        return $arr;
    }

    /**
     * updates details of customer
     * required cutomer id to updates his/her details
     * we can add metafields
     * @return array
     */
    public function updateCustomer(){
        $arr=array(
            "customer" => [
                "id"=>714714939481,
                "first_name" => "Shivam",
//            /    "last_name" => "Singh",
               /* "email" => "shivamsingh@cedcoss.com",
                "verified_email" => true,
                "addresses" => [
                    [
                        "address1" => "123 indranagar",
                        "city" => "lucknow",
                        "province" => "ON",
                        "zip" => "226004",
                        "country" => "INDIA"
                    ]
                ]*/
            ]
        );
        return $arr;
    }
}