<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 4:30 PM
 */

session_start();
require 'lib/shopify.php';
require_once "classes/ApplicationCharge.php";
define("SHOPIFY_API_KEY", "9fefbe71c98b6de562e40c1ce670df1d");
define("SHOPIFY_SECRET", "a2e817517cc632520776c93fddec8b89");


$obj=new ApplicationCharge();
$chargeid=$_GET['charge_id'];

//var_dump($a);die;

$sc = new ShopifyClient($_SESSION['shop'], $_SESSION['token'], SHOPIFY_API_KEY, SHOPIFY_SECRET);
$response=$sc->call('POST','/admin/application_charge/'.$chargeid.'/activate.json',$obj->activateCharge($chargeid));


header('location:https://anubhav-test-1.myshopify.com/admin/apps');
/*
var_dump($a);
die;*/