<?php
require_once __DIR__. '/../configs/DBConnection.php';
require_once __DIR__. '/../models/Book.php';
require_once __DIR__. '/../../helpers/debug.php';

class BookController {

    // display all books
    public function displayAllBooks(){

        $pdo = Database::connectDB();

        $books = Book::displayAllBooks($pdo);

       // dd($books);

       $title = "Library Catalog";
       $content_file = 'admin/list-books-admin';
                require_once __DIR__ . '/../../views/templates/layout.php';


    }

    public function editBook() {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        // dd($id);
        
        if (!$id) {
            header("Location: list-books-admin");
            exit();
        }

        $pdo = Database::connectDB();
        $book = Book::getBookById($pdo, $id); 

        if (!$book) {
            header("Location: list-books-admin");
            exit();
        }

        $title = "Edit Book";
        $content_file = 'admin/edit_book'; 

        require_once __DIR__ . '/../../views/templates/layout.php';
    }

    // update book
    public function updateBook(){
        
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header("Location: list-books-admin");
            exit();
        }

        
        $id     = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);
        $title  = trim(filter_input(INPUT_POST , 'title' , FILTER_SANITIZE_SPECIAL_CHARS));
        $author = trim(filter_input(INPUT_POST , 'author' , FILTER_SANITIZE_SPECIAL_CHARS));
        $year   = filter_input(INPUT_POST , 'yearPublication' , FILTER_VALIDATE_INT); // Changed variable name to match Model
        $genre  = trim(filter_input(INPUT_POST , 'genre' , FILTER_SANITIZE_SPECIAL_CHARS));
        $avail  = $_POST['availability'] ?: 'AVAILABLE';

        $errors = [];

        // Valiiidation
        if (empty($title)) $errors['title'] = "Title is required!";
        if (empty($author)) $errors['author'] = "Author is required!";
        if (empty($year))   $errors['yearPub'] = "Year is required!";

       
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            header("Location: edit_book?id=" . $id);
            exit();
        }

        
        $book = new Book($id, $title, $author, $year, $genre, $avail);
        $pdo = Database::connectDB();

        if ($book->updateBook($pdo)) {
            $_SESSION['success'] = "Book updated successfully!";
            header("Location: list-books-admin"); 
        } else {
            $_SESSION['errors']['global'] = "Problem updating Book";
            header("Location: edit_book?id=" . $id);
        }
        exit();
    }
        
    

    // delete a book
    public function deleteBook(){

        $id = filter_input(INPUT_GET , 'id' , FILTER_VALIDATE_INT);
        // dd($id);

        if(!$id){
            $_SESSION['errors']['global'] = "ID not Found !!!";
            header("Location: /list-books-admin");
            exit();
        }else{
            $pdo = Database::connectDB();
            if(Book::deleteBook($pdo,$id)){
                $_SESSION['success'] = "Book deleted succuessfully !!";

            }else{
                $_SESSION['errors']['global'] = "Probleeem in delete of Book !!";
            }

            header("Location: /list-books-admin");
            exit();
        }


        

    }


    public function addBook() {
        $title = "Add New Book";
        $content_file = 'admin/add_book';
       require_once __DIR__ . '/../../views/templates/layout.php';
        
    }
    // add a book
    public function storeBook() {

       
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: add_book");
            exit();
        }

        
        $title  = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS));
        $year   = filter_input(INPUT_POST, 'yearPublication', FILTER_SANITIZE_NUMBER_INT);
        $genre  = trim(filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_SPECIAL_CHARS));
        $avail  = $_POST['availability'] ?? 'AVAILABLE';

        $errors = [];

        
        if (empty($title)) {
            $errors['title'] = "Book Title is required!";
        } elseif (!preg_match('/^[a-zA-Z0-9\s]+$/', $title)) {
            $errors['title'] = "Title cannot contain special characters !!";
        }

       
        if (empty($author)) {
            $errors['author'] = "Author name is required!!!";
        } elseif (!preg_match('/^[a-zA-Z0-9\s]+$/', $author)) {
            $errors['author'] = "Author Name cannot contain special characters !!";
        }

        
        if (empty($year)) {
            $errors['yearPub'] = "Year is required!!!";
        } elseif (!filter_var($year, FILTER_VALIDATE_INT)) {
            $errors['yearPub'] = "Year must be a number!!!";
        } elseif ($year < 1000 || $year > date('Y') + 1) {
            $errors['yearPub'] = "Please enter a real year!!!";
        }

        
        if (empty($genre)) {
            $errors['genre'] = "Genre is required!";
        }

       
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            header("Location: add_book");
            exit();
        }

        
        $book = new Book(null, $title, $author, $year, $genre, $avail);
        $pdo = Database::connectDB();

        if ($book->save($pdo)) {
            $_SESSION['success'] = "Book added successfully!";
        } else {
            $_SESSION['errors'] = ['db' => "Book not  added :!!"];
        }

        header('Location: add_book');
        exit();
    }
}
?>