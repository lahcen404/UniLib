<?php
require_once __DIR__ . '/../configs/DBConnection.php';
require_once __DIR__ . '/../models/Book.php';
require_once __DIR__ . '/../models/Borrow.php';

class BorrowController {

    // borrow a book
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

    // return a book
    public function returnBook() {
        
        if (!isset($_SESSION['user_id'])) {
            header("Location: login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: my_borrows");
            exit();
        }

        
        $bookId = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
        $userId = $_SESSION['user_id'];

        if (!$bookId) {
            $_SESSION['errors']['global'] = "Invalid Book ID.";
            header("Location: my_borrows");
            exit();
        }

        $pdo = Database::connectDB();

        try {
            $pdo->beginTransaction();

            
            Borrow::markAsReturned($pdo, $userId, $bookId);

           
            Book::updateStatus($pdo, $bookId, 'AVAILABLE');

            $pdo->commit();
            
            $_SESSION['success'] = "Book returned successfully!";
            
        } catch (Exception $e) {
            $pdo->rollBack();
            $_SESSION['errors']['global'] = "Error returning book.";
        }

        header("Location: my_borrows");
        exit();
    }
    
    // display my borrows
    public function myBorrows() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: login");
            exit();
        }
        
        $pdo = Database::connectDB();
        $borrows = Borrow::getActiveBorrowsByUser($pdo, $_SESSION['user_id']);
        
        $title = "My Borrowed Books";
        $content_file = 'user/my_borrows';
        require_once __DIR__ . '/../../views/templates/layout.php';
    }
    
}