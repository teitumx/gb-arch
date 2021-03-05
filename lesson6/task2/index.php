<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

    $order = new Order('200.00', '123-45-67');
    $order->paymentType(new QiwiStrategy());


