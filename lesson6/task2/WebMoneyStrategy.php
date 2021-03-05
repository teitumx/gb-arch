<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 28.02.2021
 * Time: 18:49
 */

class WebMoneyStrategy implements IPayment
{
    public function payment()
    {
        echo 'Оплата через WebMoney';
    }
}