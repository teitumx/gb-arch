<?php

class User
{
    private $editor;

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function action($action, $text)
    {

    }
}