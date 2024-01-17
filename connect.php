<?php
$pdo = new PDO('mysql:host=db;dbname=bookstore', 'user', 'password', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
?>