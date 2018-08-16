<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 11:45 AM
 */

class Webhook
{
    public function appUninstallWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "app/uninstalled",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"
            ]);
        return $arr;
      //  $id=393051734105,
    }


    public function cartsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "carts/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function cartsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393054027865,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function checkoutsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "checkouts/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function checkoutsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393054847065,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function collectionsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "collections/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function collectionsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393054912601,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function customersCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "customers/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function customersUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393054945369,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function draft_ordersCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "draft_orders/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function draft_ordersUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393055305817,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function fulfillment_eventsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "fulfillment_events/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function fulfillment_eventsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393055699033,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function fulfillmentsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "fulfillments/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function fulfillmentsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393056256089,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function order_transactionsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "order_transactions/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function order_transactionsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" =>393056551001,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function ordersCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "orders/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function ordersUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 388949246041,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function productsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "products/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function productsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 391354318937,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function refundsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "refunds/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function refundsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393056813145,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }


    public function themesCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "themes/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function themesUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => "",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function inventory_itemsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "inventory_items/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function inventory_itemsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => 393056845913,
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }

    public function locationsCreateWebhook()
    {
        $arr = array(
            "webhook" => [
                "topic" => "locations/create",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
                "format"=> "json"

            ]);
        return $arr;
    }
    public function locationsUpdateWebhook()
    {
        $arr = array(
            "webhook" => [
                "id" => "",
                "address" => "https://1d8febaa.ngrok.io/store-app/webhookdata.php",
            ]
        );
        return $arr;
    }




}