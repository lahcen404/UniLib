<?php

class Book{

    private $id;
    private $title;
    private $year;
    private $genre;
    private $availability;


    public function __construct($id=null , $title=null , $year=null , $genre=null , $availability=null){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->availability = $availability;
    }

    // getters
    public function getId(){ return $this->id;}
    public function getTitle(){ return $this->title;}
    public function getYear(){ return $this->year;}
    public function getGenre(){ return $this->genre;}
    public function getAvailability(){ return $this->availability;}

    //setters
    public function setTitle(string $title): void { $this->title = $title;}
    public function setYear(int $year): void { $this->year = $year;}
    public function setGenre(string $genre): void {$this->genre = $genre;}
    public function setAvailability(string $availability): void {$this->availability = $availability;}
    
    
}