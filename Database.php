<?php
class Database{
    public $connect;
    public function __construct($config,$username,$password){
        $dsn = "mysql:" . http_build_query($config,'',';');
        $this->connect = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function  query($query,$params = []){
        $statement = $this->connect->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}