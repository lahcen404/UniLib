<?php

class Borrow{

    private $id;
    private $userId;
    private $bookId;
    private $borrowDate;
    private $returnDate;

    public function __construct($id=null , $userId=null , $bookId=null , $borrowDate=null , $returnDate=null){
        $this->id= $id;
        $this->userId= $userId;
        $this->bookId= $bookId;
        $this->borroDate= $borrowDate;
        $this->returnDate= $returnDate;
    }

    //getters
    public function getId(){return $this->id;}
    public function getUserId(){ return $this->userId;}
    public function getBookId(){ return $this->bookId;}
    public function getborrowDate(){ return $this->borrowDate;}
    public function getReturnDate(){ return $this->returnDate;}


    // setters 
    public function setBorrowDate(date $borrowDate){ $this->borrowDate = $borrowDate;}
    public function setReturnDate(date $returnDate){ $this->returnDate = $returnDate;}
    

}