<?php

class Email implements Message
{

    protected $msg;

    public function __construct(Message $msg)
    {
        $this->msg = $msg;
    }

    public function send()
    {
        echo 'Отправить e-mail', PHP_EOL;
        $this->msg->send();
    }

}