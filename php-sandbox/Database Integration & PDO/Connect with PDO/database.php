<?php

//Database credentials
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$userName = 'brad';
$password = '123456';


$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    //Create PDO instance
    $pdo = new PDO($dsn, $userName, $password);

    //Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database Connected';
} catch (PDOException $e) {
    //if there's an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
}
