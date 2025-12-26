<?php
    require_once __DIR__. '/../configs/DBConnection.php';
    require_once __DIR__ . '/../models/User.php';
    require_once __DIR__ . '/../Enums/role.php';


class AuthController{

    public function register(){

        $errors = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_SPECIAL_CHARS);
            $lastName = filter_input(INPUT_POST , 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $password = $_POST['POST'];

            global $pdo;

            if(empty($firstName) || empty($lastName)){
                $errors['name'] = "First Name and Last Name are Required !!";
            }

            if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors['email']= "Email is Required !!";
            }

            if(strlen($password) < 6){
                $errors['password'] = "Password must be more than 6 characters !!";
            }

            if(empty($errors)){
                if(User::findByEmail($pdo,$email)){
                    $errors['emaail'] = "Email is already registered !!";
                }else{
                    $user = new User(null,$firstName,$lastName,$email,$password);

                    if($user->save($pdo)){
                    header("Location : /login");
                    exit();
                }
                }

            
            }
        }
        
        $title = "Register - UniLab";
        $content_file = "auth/register";
    }


}
