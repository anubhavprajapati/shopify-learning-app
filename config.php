<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="shopify";

$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
	echo "error";
}
else{
	echo "connected";
}







?>