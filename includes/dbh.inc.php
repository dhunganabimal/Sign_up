<?php
$host='localhost';
$dbname='myfirst_database';
$dbusername='root1';
$dbpassword='root@123';

try {
$pdo=new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection Failed:". $e->getMessage());
}