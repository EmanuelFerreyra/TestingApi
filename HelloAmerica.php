<?php

class HelloAmerica implements Text
{

    private $text;

    function __construct()
    {
        $this->text = 'Hola America';
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
