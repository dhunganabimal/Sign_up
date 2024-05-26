<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["username"];
try {
    require_once "dbh.inc.php";
    $query="INSERT INTO users_one (username) VALUES(?);";
    $stmt=$pdo->prepare($query);

    $stmt->execute([$username]);
    $pdo=null;
    $stmt=null;
    header("location: ../index.php");
    die();
} catch (PDOException $e) {
    die("Query FAiled :". $e-> getMessage());

    
}

}
else {
    header("location: ../index.php");
}