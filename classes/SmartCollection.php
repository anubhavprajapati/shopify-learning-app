<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 3:58 PM
 */

class SmartCollection
{

    /**
     * creates smartcollection
     * a collection without a title return
     * $arr return array
     */
    public function createSmartCollection()
    {
        $arr = array(
            "smart_collection" => [
                "body" => "New collection",
                'title' => 'Cap',
                "rules" => [
                    [
                        "column" => "product_type",
                        "relation" => "equals",
                        "condition" => "cap"

                    ]
                ],
                "image" => [
                    "src" => "",
                    "alt" => "",
                ],
            ]
        );
        return $arr;
    }


    /**
     * requires smartcollection id
     * updates the details of smartcollection of that specific id
     * $arr return array
     */
    public function updateSmartCollection()
    {
        $arr = array(
            "smart_collection" => [
                "id" => '',
                "body" => "New collection",
                "body_html" => "<p>5000 songs in your pocket</p>",
                "image" => [
                    "src" => "",
                    "alt" => "",
                ],
            ]
        );
        return $arr;

    }

    /**
     * require id of smartcollection to show
     * @return array
     */
    public function showHiddenCollection()
    {
        $arr = array(
            "smart_collection" => [
                "id" => '',
                "published" => true

            ]);
        return $arr;

    }

    /**
     * require id of smartcollection to hide
     * @return array
     */
    public function hidePublishCollection()
    {
        $arr = array(
            "smart_collection" => [
                "id" => '',
                "published" => false

            ]);
        return $arr;

    }



}