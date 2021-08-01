<?php


interface Text
{
    public function setText($text);
    public function getText();
}


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

class UsertHtml
{

    public $txt;

    public function __construct(Text $txt)
    {
        $this->txt = $txt;
    }


    public function onTxt()
    {
        return $this->txt;
    }
}


//Test
$view = new UsertHtml(new HelloAmerica);
print $view->onTxt()
    ->getText();
print '------------';
print $view->onTxt()
    ->setText('Hola America , como estan?')
    ->getText();

$viewWord = new UsertHtml(new HelloWord('Hola mundo'));
print $viewWord->onTxt()
    ->getText();
print '------------';
print $viewWord->onTxt()
    ->setText('Hola Mundo, como estan?')
    ->getText();
