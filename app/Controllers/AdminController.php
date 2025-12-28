<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Book.php';

class AdminController {

    public function index() {
        
        $pdo = Database::connectDB();

        $users = User::getAll();
        $books = Book::displayAllBooks($pdo);

        
        $title = "Admin Dashboard";
        $content_file = 'admin/dashboard';
        require_once __DIR__ . '/../../views/templates/layout.php';
    }
}