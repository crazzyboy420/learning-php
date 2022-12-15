<?php
class Database{
    public $connect;
    public $statement;
    public function __construct($config,$username,$password){
        $dsn = "mysql:" . http_build_query($config,'',';');
        $this->connect = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function  query($query,$params = []){
        $this->statement = $this->connect->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function find(){
        return $this->statement->fetch();
    }
    public function all(){
        return $this->statement->fetchAll();
    }
    public function findOrFail(){
        $result = $this->find();


        if(!$result){
            abort();
            die();
        }

        return $result;
    }
}