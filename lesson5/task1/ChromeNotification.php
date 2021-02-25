<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 25.02.2021
 * Time: 15:25
 */

class ChromeNotification implements Message
{

    protected $msg;

    public function __construct(Message $msg)
    {
        $this->msg = $msg;
    }

    public function send()
    {
        echo 'Отправить через Chrome Notification', PHP_EOL  ;
        $this->msg->send();
    }
}