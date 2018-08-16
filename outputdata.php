<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 13/8/18
 * Time: 6:30 PM
 */


$sock = fopen('streamdata.php', 'w');

$data = file_get_contents('php://input');
/*$data = null;
while(($data = fgets($sock)) == TRUE)
{
    echo $data;
}*/
fwrite($sock, $data);

$rates = [
    "rates"=>[
        [
        "service_name" => "Standard shipping",
        "description" => "we never disappoint you",
        "service_code" => "bond007",
        "currency" => "INR",
        "total_price" => 25,
        ],
        [
        "service_name" => "Immidiate shiping",
        "description" => "get product with bullet speed",
        "service_code" => "Jamesbond007",
        "currency" => "INR",
        "total_price" => 50,
        ]
        ]

];
fclose($sock);
return json_encode($rates);
