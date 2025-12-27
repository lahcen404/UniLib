<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/../configs/DBConnection.php';


class User extends Person{

    public function __construct($id=null , $firstName=null , $lastName=null , $email=null , $password=null ,$role=null ){

        parent::__construct($id,$firstName,$lastName,$email,$password,$role);
    }

    public static function findByEmail($pdo,$email){
        
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        
        $data = $stmt->fetch();

        if ($data) {
            return new User($data['id'], $data['firstName'], $data['lastName'], $data['email'], $data['password'],$data['role']);
        }
        return null;
    }

   public function save($pdo) {
        $sql = "INSERT INTO users (firstName, lastName, email, password, role) VALUES (:fname, :lname, :email, :pass, 'USER')";
        $stmt = $pdo->prepare($sql);
        
        return $stmt->execute([
            'fname' => $this->firstName,
            'lname' => $this->lastName,
            'email' => $this->email,
            'pass'  => $this->getPassword()
        ]);
    }


}