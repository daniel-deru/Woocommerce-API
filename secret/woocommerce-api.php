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
 echo json_encode($woocommerce->get("products")) 
 ?>