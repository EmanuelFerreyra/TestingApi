<?php

class NumberMaxAge implements Number{
    
    protected $age;

    public function __construct( $age ){ 
        $this->age = $age;
    }   
    
    public function setNumber( $age ){
        $this->number = $age;
    }    
    
    public function getNumber(){
        return $this->age;
    }

}

