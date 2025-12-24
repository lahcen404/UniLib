<?php

require_once __DIR__ . '/../Enums/role.php';

abstract class Person{

    protected $id ;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected Role $role;

    public function __construct($id=null , $firstName=null , $lastName=null , $email=null , $password=null ){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;

        if($password){
            $this->setPassword($password);
        }
        
        $this->role = Role::USER;
    }

    
//getteers
    public function getId(){ return $this-> id; }
    public function getFirstName(){ return $this->firstName;}
    public function getLastName(){ return $this->lastName;}
    public function getEmail(){ return $this->email;}
    public function getRole(){ return $this->role;}
    public function getPassword(){ return $this->password;}

    //setters
    public function setFirstName($fName){ $this->firstName = $fName;}
    public function setLastName($lName){ $this->lastName = $lName;}
    public function setEmail($email){ $this->email = $email;}
    public function setPassword($password){$this->password = password_hash($password , PASSWORD_BCRYPT);}
    public function setRole(Role $role){ $this->role = $role;}

    // getfullname
    public function getFullName(){return $this->firstName . ' ' . $this->lastName;}


}


?>