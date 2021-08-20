<?php

	require_once 'vendor/autoload.php';

	$token = 'TEST-4262091083980528-082016-833619448e9c2645f5b9c631fee373ba-66955549';

	MercadoPago\SDK::setAccessToken($token);

    $preference = new MercadoPago\Preference();

    $item = new MercadoPago\Item();
    $item->id = "00001";
    $item->title = "item"; 
    $item->quantity = 1;
    $item->unit_price = (double)150.00;

    $preference->items = array($item);

	$preference->back_urls = array(
		"success" => 'https://www.fornadas.com.br/success',
		"failure" => 'https://www.fornadas.com.br/failure',
		"pending" => 'https://www.fornadas.com.br/pending',

	)

	$preference->notification_url = 'https://www.fornadas.com.br/webhook';
	$preference->external_reference = 1234;
	$preference->save();

    $link = $preference->init_point;
    
    # Return the HTML code for button

    echo "<a href='$link'> Pagar </a>";

?>
  ?>