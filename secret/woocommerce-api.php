<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/product', 
    'ck_b02a2baa301ddbff48c14c711d6ce40a908cb38a', 
    'cs_051194ab219a91215f69ba9e8e1155b33590cb18',
    [
        'version' => 'wc/v3',
    ]
);

?>

<?php
 
 $getHeaders = function() use ($woocommerce){
    $lastResponse = $woocommerce->http->getResponse();
    return $lastResponse->getHeaders();
 };

 $listCategories = function ($page=1) use ($woocommerce, $getHeaders){
    $data = array(
        'data' => $woocommerce->get("products/categories", array(
            'per_page' => 20,
            'page' => $page)),
        'headers' => $getHeaders());

    $data['headers'] = $getHeaders();

    return json_encode($data);
 };

 $listProducts = function ($page=1) use ($woocommerce, $getHeaders){
    $data = array(
        'data'=>$woocommerce->get("products", array(
            "per_page" => 20,
            "page" => $page)),
        'headers' => $getHeaders());

    
    return json_encode($data);
 };


 ?>


