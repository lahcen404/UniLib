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
    public function getId(){ return $this->id; }
    public function getFirstName(){ return $this->firstName;}
    public function getLastName(){ return $this->lastName;}
    public function getEmail(){ return $this->email;}
    public function getRole(){ return $this->role;}
    public function getPassword(){ return $this->password;}

    //setters
    public function setFirstName(string $fName): void { $this->firstName = $fName;}
    public function setLastName(string $lName): void { $this->lastName = $lName;}
    public function setEmail(string $email): void { $this->email = $email;}
    public function setPassword(string $password): void {$this->password = password_hash($password , PASSWORD_BCRYPT);}
    public function setRole(Role $role){ $this->role = $role;}

    // getfullname
    public function getFullName(){return $this->firstName . ' ' . $this->lastName;}


}


?>