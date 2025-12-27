<?php

class Book{

    private $id;
    private $title;
    private $author;
    private $yearPublication;
    private $genre;
    private $availability;


    public function __construct($id=null , $title=null , $author=null, $yearPublication=null , $genre=null , $availability=null){
        $this->id = $id;
        $this->title = $title;
        $this->author=$author;
        $this->yearPublication = $yearPublication;
        $this->genre = $genre;
        $this->availability = $availability;
    }


    public function save($pdo){

        $sql = "INSERT INTO books(title,author,yearPublication,genre,availability) VALUES(:title,:author,:yearPublication,:genre,:availability)";
        $stmt =$pdo->prepare($sql);

        return $stmt->execute([
            ':title' => $this->getTitle(),
            ':author' => $this->getAuthor(),
            ':yearPublication' => $this->getYearPublication(),
            ':genre' => $this->getGenre(),
            ':availability' => $this->getAvailability() ?: 'AVAILABLE'
        ]);
    }

    // getters
    public function getId(){ return $this->id;}
    public function getTitle(){ return $this->title;}
    public function getAuthor(){ return $this->author;}
    public function getYearPublication(){ return $this->yearPublication;}
    public function getGenre(){ return $this->genre;}
    public function getAvailability(){ return $this->availability;}

    //setters
    public function setTitle(string $title): void { $this->title = $title;}
    public function setAuthor(string $author): void { $this->author = $author;}
    public function setYearPublication(int $yearPublication): void { $this->yearPublication = $yearPublication;}
    public function setGenre(string $genre): void {$this->genre = $genre;}
    public function setAvailability(string $availability): void {$this->availability = $availability;}
    
    
}