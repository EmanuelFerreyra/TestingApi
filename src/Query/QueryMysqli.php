<?php


namespace testApi\query;

require '../../vendor/autoload.php';

use testapi\connection\RepositoryConnection;
use testapi\connection\Connection;



class QueryMysqli{
    
    
    protected $query;
    protected $conn;


    public function __construct( RepositoryConnection $conn ){
        $this->conn = $conn;
    }

    public function querySelectAll( $table ){

        $sql = "SELECT * FROM $table";
        $result = $this->conn->on()->query($sql);

        var_dump($result);

    }

}


