<?php

class HelloWord implements Text
{

    private $text;

    function __construct($text)
    {
        $this->text = $text;
    }

    public function setText($text)
    {

        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }
}