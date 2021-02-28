<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 28.02.2021
 * Time: 18:48
 */

class YandexStrategy implements IPayment
{
    public function payment()
    {
        echo 'Оплата через ЯндексДеньги';
    }
}