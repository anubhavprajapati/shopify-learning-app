<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 3:49 PM
 */

class Variant{

    /**
     * require product id
     * creates variant of specific product id using shopify variant api
     * $arr return array
     * can add metafields
     */
    public function createVariant(){
        $arr=array(
            'varient'=>[
                'option1'=>'',
                'price'=>'',
                'image_id'=>'',

            ]);
        return $arr;

    }

    /**
     * require variant id
     * updates details of variant of specific product id using shopify variant api
     * $arr return array
     * can add metafields
     */
    public function updateVariant(){
        $arr=array(
            'variant'=>[
                'option1'=>'',
                'price'=>'',
                'image_id'=>'',

            ]
        );
        return $arr;
    }

}