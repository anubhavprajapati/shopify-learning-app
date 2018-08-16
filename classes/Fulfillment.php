<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 2:56 PM
 */


class Fulfillment
{

    /**
     * fulfill order of from specific location
     * use quantity to partial fulfill order
     * @param $res array of location (using location api)
     * @return array
     */
    public function createfulfillment($res)
    {

        /*      foreach ($res as $key => $val) {
                  foreach ($val as $k => $v) {
                      var_dump($res);
                      /*if($k=='id') {
                          $arr = array(
                              "fulfillment" => [
                                  "location_id" => $v,
                                  "line_items" => [
                                      [
                                          "id" => 1392230793305,
                                      ]
                                  ],
                                  "notify_customer" => true
                              ]

                          );
                      }
                  }
              }*/

        $arr = array(
            "fulfillment" => [
                "location_id" => 6511591513,
                "line_items" => [
                    [
                        "id" => 1392230793305,
                     //   'quantity'=>'',
                    ]
                ],
                "notify_customer" => true
            ]

        );

        return $arr;

    }

    /**
     * required fulfillment id
     * return array
     */
    public function updatefulfillment(){
        $arr=array(
            "fulfillment" => [
                "id" => 6511591513,
                ]

        );
        return $arr;
    }


}
