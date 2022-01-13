<?php 
$data = file_get_contents('http://localhost/product/secret/woocommerce-api.php');
$data = json_decode($data, true);
var_dump($data)
?>