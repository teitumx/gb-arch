<?php


class Order
{
    public $sum;
    public $phone;

    public function __construct($sum, $phone)
    {
        $this->sum = $sum;
        $this->phone = $phone;
        echo "Заказ на сумму $sum на номер телефона $phone".PHP_EOL;
    }

    public function paymentType(IPayment $payment){

        echo "Выбранный способ оплаты: " .PHP_EOL;
        return $payment->payment();
    }

}