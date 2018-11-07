<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER1', '127.0.0.1');
define('DB_USERNAME1', 'root');
define('DB_PASSWORD1', 'cybercyber');
define('DB_NAME1', 'blog_practica');

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER1 . ";dbname=" . DB_NAME1, DB_USERNAME1, DB_PASSWORD1);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>