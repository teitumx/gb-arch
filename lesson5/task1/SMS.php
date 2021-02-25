<?php

class SMS implements Message
{

    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function send()
    {
        echo 'Отправить смс', PHP_EOL;
        $this->msg->send();
    }

}