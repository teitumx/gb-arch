<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$message = new ChromeNotification(
    new SMS(
        new Email(
            new MessageBase()
        )));

$message->send();