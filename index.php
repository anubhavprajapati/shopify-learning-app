<?php
//session_start();
require 'lib/shopify.php';
require 'config.php';
define("SHOPIFY_API_KEY", "9fefbe71c98b6de562e40c1ce670df1d");
define("SHOPIFY_SECRET", "a2e817517cc632520776c93fddec8b89");
define("SHOPIFY_SCOPE", "read_products,write_products,read_reports,read_inventory, write_inventory,read_orders, write_orders,read_shopify_payments_payouts,read_draft_orders, write_draft_orders,write_shipping,read_fulfillments, write_fulfillments,write_customers,read_price_rules, write_price_rules");

if (isset($_GET['code'])) {
	
	// if the code param has been sent to this page... we are in Step 2
	// Step 2: do a form POST to get the access token

	$shopifyClient = new ShopifyClient($_GET['shop'], "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
	session_unset();
	// Now, request the token and store it in your session.
    $_SESSION['token']= $shopifyClient->getAccessToken($_GET['code']);
	/*var_dump($tokenkey);
	die;*/
	/*$sqlquery="SELECT token from token";
	$result=$conn->query($sqlquery);
	$numofrow=$result->num_rows;
	if($numofrow=0){
		$sql="INSERT into token(token) values('".$tokenkey."')";
		$conn->query($sql);
		$_SESSION['token']=$tokenkey;
		if ($_SESSION['token'] != '')
		$_SESSION['shop'] = $_GET['shop'];
		header("Location: products.php");
		exit;
	}
	else{
		while ($row=$result->fetch_assoc()) {
			$_SESSION['token']=$row['token'];		
		}
		if ($_SESSION['token'] != '')
		$_SESSION['shop'] = $_GET['shop'];
		header("Location: products.php");
		exit;
			
	}*/
	if ($_SESSION['token'] != '')
		$_SESSION['shop'] = $_GET['shop'];
	header("Location: products.php");
	exit;
}
// if they posted the form with the shop name
else if (isset($_POST['shop']) || isset($_GET['shop'])) {
	// Step 1: get the shopname from the user and redirect the user to the
	// shopify authorization page where they can choose to authorize this app
	$shop = isset($_POST['shop']) ? $_POST['shop'] : $_GET['shop'];
	$shopifyClient = new ShopifyClient($shop, "", SHOPIFY_API_KEY, SHOPIFY_SECRET);

	// get the URL to the current page
	$pageURL = 'https';
	if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}

	// redirect to authorize url
	header("Location: " . $shopifyClient->getAuthorizeUrl(SHOPIFY_SCOPE, $pageURL));
	exit;
}?>
<div class="container">

<form class="myshop" action="" method="post">
<span class="hint">(enter it exactly like this: myshop.myshopify.com)</span>
</label>
<p>
<input id="shop" name="shop" size="45" type="text" value="" placeholder="example.com" />
<input class="installurl" name="commit" type="submit" value="Install" />
</p>
</form>
</div>
</div>