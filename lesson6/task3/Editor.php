<?php

class Editor
{
    private $commands;
    private $currentCommandNumber;
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function action($command)
    {
        $copy = new $command($this->text);
        $copy->execute();

        $this->commands[] = $copy;
        $this->currentCommandNumber++;
    }

}