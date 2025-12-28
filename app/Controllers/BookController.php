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


    // add a book
    public function addBook() {

       
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