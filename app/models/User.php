<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/../configs/DBConnection.php';


class User extends Person{

    public function __construct($id=null , $firstName=null , $lastName=null , $email=null , $password=null ){

        parent::__construct($id,$firstName,$lastName,$email,$password);
    }

    public static function findByEmail($pdo,$email){
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($pdo,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($data = mysqli_fetch_assoc($result)){
            return new User($data['id'],$data['firstName'],$data['lastName'],$data['email'],$data['password']);
        }
        return null;
    }

    public function save($pdo){
        $sql = "INSERT INTO users (firstName , lastName , email , password , role) VALUES(?,?,?,?,'USER')";
        $stmt = mysqli_prepare($pdo,$sql);

        $password = $this->getPassword();
        mysqli_stmt_bind_param($stmt,"ssss",$this->firstName,$this->lastName,$this->email,$password);
        return mysqli_stmt_execute($stmt);
    }


}