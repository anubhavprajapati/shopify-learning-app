<?php
session_start();
require 'lib/shopify.php';
require_once 'autoload.php';
define("SHOPIFY_API_KEY", "9fefbe71c98b6de562e40c1ce670df1d");
define("SHOPIFY_SECRET", "a2e817517cc632520776c93fddec8b89");
define("SHOPIFY_SCOPE", "read_products,write_products,read_reports,read_inventory, write_inventory,read_orders, write_orders,read_shopify_payments_payouts,read_draft_orders, write_draft_orders,write_shipping,read_fulfillments, write_fulfillments,write_customers,read_price_rules, write_price_rules");

$sc = new ShopifyClient($_SESSION['shop'], $_SESSION['token'], SHOPIFY_API_KEY, SHOPIFY_SECRET);
try
{
    $obj=new RecurringApplicationCharge();
    //Get all pr
 //   $res = $sc->call('GET', '/admin/locations.json');
  //  var_dump($res);die;
 //   https://e0edba91.ngrok.io/store-app/webhookdata.php
  //  $response = $sc->call('POST', '/admin/recurring_application_charges.json',$obj->createRecurringApplicationCharge());
    $response = $sc->call('GET', '/admin/shop.json');
    //if(!isset($response['error'])&&$response['accepted'])
     echo '<pre>';
     var_dump($response);die;
    //header('Location:'.$response['confirmation_url']);
}
catch (ShopifyApiException $e)
{
     //echo $e->getMethod().'<br>'; //-> http method (GET, POST, PUT, DELETE)
     //echo $e->getPath().'<br>'; //-> path of failing request
     //var_dump($e->getResponseHeaders()); //-> actually response headers from failing request
     //echo '<hr>';
     var_dump($e->getResponse());
     $e->getResponse(); //-> curl response object
     $e->getParams(); // -> optional data that may have been passed that caused the failure

}
catch (ShopifyCurlException $e)
{die("hellczxzo");
    // $e->getMessage() returns value of curl_errno() and $e->getCode() returns value of curl_ error()
}
?>