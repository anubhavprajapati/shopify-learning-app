<?php
/**
 * Created by PhpStorm.
 * User: cedcoss
 * Date: 14/8/18
 * Time: 11:44 AM
 */


$sock = fopen('webhooklog.php', 'w');

$data = file_get_contents('php://input');

fwrite($sock,$data);
fclose($sock);