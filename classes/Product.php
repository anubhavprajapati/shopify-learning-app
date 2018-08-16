<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 3:11 PM
 */



class Product
{

    public function createProduct()
    {
        $arr = array(
            "product" => [
                "title" => "Cap",
                "body_html" => "ksjaf",
                "vendor" => "Burton",
                "product_type" => "Snowboard",
                "tags" => "cap",
                'image' => [
                    [
                        'src' => 'http://ba0dd7a1.ngrok.io/images/cap.png',

                    ]
                ],
                "variants" => [
                    [
                        'option1' => 'blue',
                        "price" => "150.00",
                        /* 'quantity'=>5,
                         'image'=>[
                             'src'=>'http://ba0dd7a1.ngrok.io/images/cap.png',
                                 ]*/
                    ],
                    [
                        'option1' => 'white',
                        'price' => '120.00',
                        /*'quantity'=>'8',
                        'image'=>[
                            'src'=>'http://ba0dd7a1.ngrok.io/images/golf-cap-500-black.jpg',
                        ]*/
                    ]
                ]

            ]
        );
        return $arr;
    }

    public function updateProduct()
    {

        $arr = array(
            'product' => [
                'id'=>1415165706329,
                'product_type'=>'cap',
                'vendor'=>'sastamall',
                "body_html" => "Sports Cap",

            ]
        );
        return $arr;
    }

}