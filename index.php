<?php

class HelloWord{

    private $name;

    function __construct( $name ){
        $this->name = $name;
    }

    public function setName( $name ){

        $this->name = $name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

}


$hello = new HelloWord('Carlos');

$hello->getName();

$hello->setName('Carlos Menen')
        ->getName();
