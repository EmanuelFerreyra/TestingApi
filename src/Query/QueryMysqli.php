<?php


namespace testapi\query;

use testapi\connection\RepositoryConnection;


class QueryMysqli{
    
    
    protected $query;
    protected $table;
    protected $conn;
    protected $result;


    public function __construct( RepositoryConnection $conn ){
        $this->conn = $conn;
    }

    public function querySelectAll(){

        $sql = "SELECT * FROM $this->table";
        $this->result = $this->conn->on()->query($sql);  
        return $this;
    }


    public function querySelectById( $id ){

        $sql = "SELECT * FROM $this->table WHERE id_product = $id";
        $this->result = $this->conn->on()->query($sql);  
    
        return $this;
    
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

    //*mostramos como Resultado en formato Json
    public function  ViewJson(){
        $json = [];

        if( $this->result->num_rows > 0){
            while( $row = $this->result->fetch_assoc()){
                $json[] = $row;
            }
            return json_encode($json);
        }   

        $json = ['error' => 'no existe datos']; 
        return json_encode($json);
    }
        //Mostramos resultado en Array
    public function ViewArray(){
        $array = [];

        if( $this->result->num_rows > 0){
            while( $row = $this->result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }

        return  $array = ['error' => 'no existe datos'];
        
    }



}



