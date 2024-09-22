<?php

$servername = 'localhost';
$username = 'root';
$password = '1234';
$data = 'board';

try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$data,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB 연결 성공";
} catch (PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
?>