<?php
    $cart_products = json_decode($_COOKIE["cart_products"]) ;

    $product_carts = $cart_products->cart_products;
    $money_provisional = $cart_products->money_provisional;
    $money_discount = $cart_products->money_discount;
    $money_deliver = $cart_products->money_deliver;
    $money_lastPay = $cart_products->money_lastPay;
    $gender = $cart_products->gender;
    $name = $cart_products->name;
    $phone = $cart_products->phone;
    $address = $cart_products->address;
    $request = $cart_products->request;
    $deli_unit = $cart_products->deli_unit;
    $pay_format = $cart_products->pay_format;

    print_r($product_carts);
    echo '<br>';
    print_r($money_provisional);
    echo '<br>';
    print_r($money_discount);
    echo '<br>';
    print_r($money_deliver);
    echo '<br>';
    print_r($money_lastPay);
    echo '<br>';
    print_r($gender);
    echo '<br>';
    print_r($name);
    echo '<br>';
    print_r($phone);
    echo '<br>';
    print_r($address);
    echo '<br>';
    print_r($request);
    echo '<br>';
    print_r($deli_unit);
    echo '<br>';
    print_r($pay_format);
?>