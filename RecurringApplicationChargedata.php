<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 5:25 PM
 */
session_start();
require 'lib/shopify.php';
require_once "classes/RecurringApplicationCharge.php";
define("SHOPIFY_API_KEY", "9fefbe71c98b6de562e40c1ce670df1d");
define("SHOPIFY_SECRET", "a2e817517cc632520776c93fddec8b89");
//define("SHOPIFY_SCOPE", "read_products,write_products,read_reports,read_inventory, write_inventory,read_orders, write_orders,read_shopify_payments_payouts,read_draft_orders, write_draft_orders,write_shipping,read_fulfillments, write_fulfillments,write_customers,read_price_rules, write_price_rules");



$obj=new RecurringApplicationCharge();
$chargeid=$_GET['charge_id'];
//$a=$obj->activateRecurringApplicationCharge($_GET['charge_id']);
$sc = new ShopifyClient($_SESSION['shop'], $_SESSION['token'], SHOPIFY_API_KEY, SHOPIFY_SECRET);
$response=$sc->call('POST','/admin/recurring_application_charges/'.$chargeid.'/activate.json',$obj->activateRecurringApplicationCharge($chargeid));

//var_dump($response);die;

header('location: https://anubhav-test-1.myshopify.com/admin/apps'/*.$a['recurring_application_charge']['return_url']*/);