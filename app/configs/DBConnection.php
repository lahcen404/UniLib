<?php
class Database {
    public static function connectDB(){
        try{

    $pdo = new PDO(
        "mysql:host=localhost;dbname=uniLibDB;charset=utf8",
        "root",
        "root"
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;

    echo "Connected successfull !!";
}catch(PDOException $e){
    die("Error in connection !!" . $e->getMessage());
}
    }


}
    

?>