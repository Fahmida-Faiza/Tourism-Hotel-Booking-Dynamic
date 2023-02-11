<?php
require('stripe-php-master/init.php');

$publishableKey="public_key";

$secretKey="secret_key";


\Stripe\Stripe::setApiKey($secretKey);

?>