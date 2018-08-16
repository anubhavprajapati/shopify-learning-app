<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 11:10 AM
 */

class Discount{

    /**
     * creates a price rule for the discount
     *
     * @return array
     */
    public function createPriceRule()
    {
        $arr = array(
            "price_rule" => [
                "title" => "SUMMERSALE20OFF",
                "target_type" => "line_item",
                "target_selection" => "all",
                "allocation_method" => "across",
                "value_type" => "percentage",
                "value" => "-20.0",
                "customer_selection" => "all",
                "starts_at" => "2018-08-14T09:00:00Z",
                "ends_at"=>"2018-09-14T09:00:00Z",
                "usage_limit"=>25,
            ]);
        return $arr;
    }


    /**
     * creates a discount on the basis of price rule
     * code is compulsory
     * @return array
     */
    public function createDiscount(){
        $arr=array(
            "discount_code"=>[
                "code"=>"SUMMERSALE20OFF",
            ]
        );
        return $arr;
    }
}