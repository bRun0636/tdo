<?php
    

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "todo_list";

    $dsn = "mysql:host=$serverName;dbname=$dbName;charset=utf8";

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    try{
        $pdo = new PDO($dsn, $dbUsername, $dbPassword, $opt);
    }
    catch(PDOException $e){
        echo "Connection failed". $e->getMessage();
        exit();
    }
?>