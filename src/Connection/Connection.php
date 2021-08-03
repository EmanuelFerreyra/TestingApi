<?php

namespace testapi\connection;

use Mysqli;


class connection  implements RepositoryConnection{
    
    private $conn;

    public function __construct(){
        
        $this->conn =  new Mysqli('localhost','root','','testsql');
    }


    public function on(){
        return $this->conn;
    }

    public function close(){
        $this->conn->close();
    }



}


