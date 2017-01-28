<?php

class Sql{
    private $host;
    private $login;
    private $password;
    private $dataBase;

    public function __construct($host='localhost',$login='root',$password='',$dataBase='test'){
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->dataBase=$dataBase;
    }
    private function connectToDB(){
       $res=mysqli_connect($this->host,$this->login,$this->password,$this->dataBase);
       return $res;
    }

    public function getAllNews($sql){
        $resource=$this->connectToDB();
        $result = mysqli_query($resource,$sql);
        $tmp=[];

        while  (false != $row =mysqli_fetch_assoc($result)){
                $tmp[]=$row;
        }
       return $tmp;
    }

    public function insertIntoDBOrUpdateOrDelete($sql){
        $resource=$this->connectToDB();
        mysqli_query($resource,$sql);
    }


}