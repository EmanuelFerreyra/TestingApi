<?php



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