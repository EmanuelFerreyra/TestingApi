<?php


namespace testapi\query;

use testapi\connection\RepositoryConnection;


class QueryMysqli{
    
    
    protected $query;
    protected $table;
    protected $conn;


    public function __construct( RepositoryConnection $conn ){
        $this->conn = $conn;
    }

    public function querySelectAll(){

        $sql = "SELECT * FROM $this->table";
        $result = $this->conn->on()->query($sql);

        var_dump($result);

    }

    public function queryDeleteId( $id ){
        //delete by Id
    }


    public function queryUpdateById( $id, $newDate ){
        //Agregamos un nuevo dato
    }


    public function queryCreateNewDate( array $date ){

    }


    public function setTable( $table ){
        $this->table = $table;
        return $this;
    }

}



