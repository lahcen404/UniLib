<?php

class Borrow{

    private $id;
    private $userId;
    private $bookId;
    private $loanDate;
    private $returnDate;

    public function __construct($id=null , $userId=null , $bookId=null , $loanDate=null , $returnDate=null){
        $this->id= $id;
        $this->userId= $userId;
        $this->bookId= $bookId;
        $this->loanDate= $loanDate;
        $this->returnDate= $returnDate;
    }

    // create a borrow
    public static function create($pdo, $userId, $bookId) {
        $sql = "INSERT INTO borrows (loan_date, book_id, user_id) VALUES (NOW(), :book_id, :user_id)";
        $stmt = $pdo->prepare($sql);
        
        return $stmt->execute([
            ':book_id' => $bookId,
            ':user_id' => $userId
        ]);
    }

    // check if book is already borrrrowed by usser
    public static function isBorrowedByUser($pdo, $userId, $bookId) {
        $sql = "SELECT id FROM borrows WHERE user_id = :uid AND book_id = :bid AND return_date IS NULL";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':uid' => $userId, ':bid' => $bookId]);
        return $stmt->fetch();
    }

    // get active borrows for a user
    public static function getActiveBorrowsByUser($pdo, $userId) {
        $sql = "SELECT b.id as borrow_id, b.loan_date, bk.id as book_id, bk.title, bk.author 
                FROM borrows b
                JOIN books bk ON b.book_id = bk.id
                WHERE b.user_id = :uid AND b.return_date IS NULL
                ORDER BY b.loan_date DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':uid' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mark as borroweed
    public static function markAsReturned($pdo, $userId, $bookId) {

        $sql = "UPDATE borrows SET return_date = NOW() 
                WHERE user_id = :uid AND book_id = :bid AND return_date IS NULL";
        
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':uid' => $userId, 
            ':bid' => $bookId
        ]);
    }

    //getters
    public function getId(){return $this->id;}
    public function getUserId(){ return $this->userId;}
    public function getBookId(){ return $this->bookId;}
    public function getLoanDate(){ return $this->loanDate;}
    public function getReturnDate(){ return $this->returnDate;}


    // setters 
    public function setLoanDate(string $loanDate){ $this->loanDate = $loanDate;}
    public function setReturnDate(?string $returnDate){ $this->returnDate = $returnDate;}
    

}