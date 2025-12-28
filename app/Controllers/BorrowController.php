<?php
require_once __DIR__ . '/../configs/DBConnection.php';
require_once __DIR__ . '/../models/Book.php';
require_once __DIR__ . '/../models/Borrow.php';

class BorrowController {

    public function borrowBook() {
      
        if (!isset($_SESSION['user_id'])) {
            $_SESSION['errors']['global'] = "You must login to borrow books.";
            header("Location: login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: list-books-admin");
            exit();
        }

        
        $bookId = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
        $userId = $_SESSION['user_id'];

        if (!$bookId) {
            header("Location: list-books-admin");
            exit();
        }

        $pdo = Database::connectDB();

        
        $book = Book::getBookById($pdo, $bookId);
        
        if (!$book || $book['availability'] !== 'AVAILABLE') {
            $_SESSION['errors']['global'] = "Sorry, this book is not available.";
            header("Location: details?id=" . $bookId);
            exit();
        }

        
        try {
            $pdo->beginTransaction();

            
            Borrow::create($pdo, $userId, $bookId);

            
            Book::updateStatus($pdo, $bookId, 'BORROWED');

            $pdo->commit();
            
            $_SESSION['success'] = "Book borrowed successfully!";
            header("Location: details?id=" . $bookId); 

        } catch (Exception $e) {
            $pdo->rollBack();
            $_SESSION['errors']['global'] = "Error processing borrow.";
            header("Location: details?id=" . $bookId);
        }
        exit();
    }
}