<?php

session_start();
    require_once __DIR__ . '/../app/configs/DBConnection.php';

//     require_once __DIR__ . '/../app/models/User.php';
//     require_once __DIR__ . '/../app/models/Admin.php';

//     $pdo = Database::connectDB();

// echo " Database is connected!<br>";

// $user = new User(1, 'lahcen', 'maskour', 'lahcen@lahcen.com', '123456');
// $admin = new Admin(1, 'lahcenAdmin', 'maskourAdmin', 'lahcenAdmin@lahcen.com', '123456');

// echo "<b>Full Name:</b> " . $user->getFullName() . "<br>";
// echo "<b>Email:</b> " . $user->getEmail() . "<br>";

// echo "<b>Full Name:</b> " . $admin->getFullName() . "<br>";
// echo "<b>Email:</b> " . $admin->getEmail() . "<br>";

// $role = $user->getRole();
// echo "<b>Role:</b> " . (is_object($role) ? $role->name : $role) . "<br>";


// $savedHash = $admin->getPassword();
// echo "Saved Hash: " . $savedHash . "<br>";



require_once __DIR__ . '/../app/router/Router.php';

$router = new Router();


$router->addView('home',     'home',           'Home - UniLib');
$router->addController('login',    'AuthController',     'login');
$router->addController('register', 'AuthController',  'register');
$router->addController('logout',   'AuthController',     'logout');
$router->addController('add_book', 'BookController', 'addBook');
$router->addController('store_book', 'BookController', 'storeBook');
$router->addController('list-books-admin', 'BookController', 'displayAllBooks');
$router->addController('deleteBook', 'BookController', 'deleteBook');
$router->addController('edit_book', 'BookController', 'editBook');
$router->addController('update_book', 'BookController', 'updateBook');
$router->addController('details', 'BookController', 'showDetails');
$router->addController('borrow_book', 'BorrowController', 'borrowBook');



$router->addView('dashboard','admin/dashboard','Admin Dashboard');
$router->addView('my_borrows','user/my_borrows','Book Details');
$router->addView('404','404','404 Error');


$router->route();
?>