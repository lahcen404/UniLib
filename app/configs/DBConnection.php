<?php
class Database {
    public static function connectDB(){
        try{

    $pdo = new PDO(
        "mysql:host=localhost;dbname=uniLibDB;charset=utf8",
        "root",
        "root"
    );
    return $pdo;

    echo "Connected successfull !!";
}catch(PDOException $e){
    die("Error in connection !!" . $e->getMessage());
}
    }


}
    

?>