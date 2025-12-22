<?php

    try{
    $pdo = new PDO(
        "mysql:host=localhost;dbname=uniLabDB;charset=utf8",
        "root",
        "root"
    );

    echo "Connected successfull !!";
}catch(PDOException $e){
    echo "Not Connected , try again !!!";
}

?>