<?php
	define('DBHOST','localhost');
	define('DBUSER','root');
	define('DBPASS','');
	define('DBNAME','calisthenics');
    try{
       $conn = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
    }
?>