<?php

require_once __DIR__ . '/Person.php';

class User extends Person{

    public function __construct($id=null , $firstName=null , $lastName=null , $email=null , $password=null ){

        parent::__construct($id,$firstName,$lastName,$email,$password);
    }


}