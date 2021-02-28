<?php


class QiwiStrategy implements IPayment
{
    public function payment()
    {
       echo 'Оплата через QIWI';
    }
}